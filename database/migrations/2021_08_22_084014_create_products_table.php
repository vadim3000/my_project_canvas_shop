<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE TABLE products(
            `id` BIGINT(12) UNSIGNED AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL DEFAULT \'\',
            `description` TEXT,
            PRIMARY KEY(`id`)
         ) ENGINE=INNODB
        ');


    }
//        Schema::create('products', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();
//        });


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE products;');
    }
}
