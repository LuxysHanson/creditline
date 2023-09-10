<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->json('loan')->nullable();
            $table->json('car')->nullable();
            $table->json('doc_images')->nullable();
            $table->json('client')->nullable();
            $table->json('address')->nullable();
            $table->json('car_images_1')->nullable();
            $table->json('car_images_2')->nullable();
            $table->json('photo_car')->nullable();
            $table->integer('step')->default(1);
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
