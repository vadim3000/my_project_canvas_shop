<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            INSERT INTO products(`name`, `description`)
            VALUES ('baseball item', 'Unknown item'),('car', 'a fake or a real one?'),('pills', 'unknown source'),('gun', 'a real gun');
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('TRUNCATE TABLE products');

    }
}
