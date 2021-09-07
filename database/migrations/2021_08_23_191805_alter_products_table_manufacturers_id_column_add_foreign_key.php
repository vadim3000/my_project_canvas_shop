<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductsTableManufacturersIdColumnAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table){
           $table->foreignId('manufacturer_id')
               ->after('id')
               ->nullable()
               ->constrained('manufacturers')
               ->nullOnDelete()
               ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table){
            $table->dropForeign(['manufacturer_id']);
            $table->dropColumn('manufacturer_id')->references('id');
        });
    }
}
