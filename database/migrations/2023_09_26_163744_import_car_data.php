<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class ImportCarData extends Migration
{

    protected $path = __DIR__ .'/data/car_data.xlsx';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        # очистить значения бд
        \App\Models\Brand::query()->delete();
        \App\Models\Model::query()->delete();

        # загрузка данных из эксель
        $reader = new Xlsx();
        $spreadsheet = $reader->load($this->path);
        $data = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($data)) {
            foreach ($data as $item) {

                if (!$item) continue;

                $brand = $this->getBrand($item[0] ?? '');
                if ($brand) {

                    $name = $item[1] ?? '';
                    $model = \App\Models\Model::query()->where('name', $name)->first();
                    if ($model) continue;

                    \App\Models\Model::query()->create([
                        'name' => $name,
                        'brand_id' => $brand->id,
                        'data' => [
                            'year_start' => $item[2] ?? null,
                            'year_end' => $item[3] ?? null,
                        ]
                    ]);
                }

            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

    protected function getBrand($name)
    {
        $brand = \App\Models\Brand::query()->where('name', $name)->first();
        if ($brand)
            return $brand;

        return \App\Models\Brand::query()->create(['name' => $name]);
    }

}
