<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class ImportlocalityData extends Migration
{

    protected $path = __DIR__ .'/data/cato_data.xlsx';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        # загрузка данных из эксель
        $reader = new Xlsx();
        $spreadsheet = $reader->load($this->path);
        $data = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($data)) {
            foreach ($data as $key => $item) {

                if ($key == 0 || !$item[0]) continue;

                \App\Models\Locality::query()->create([
                    'id' => $item[0],
                    'name' => $item[3] ?? '',
                    'parent_id' => $item[1] ?? null,
                    'code' => $item[2] ?? ''
                ]);
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
}
