<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',75);
            $table->text('description');
            $table->string('price',25);
            /*
             *  ID tipos de producto
             *  ID company
             */
            $table->bigInteger('product_type_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();

            /*
             *  FOREIGN
             */
            $table->foreign('product_type_id')->references('id')->on('product_types');
            $table->foreign('company_id')->references('id')->on('companies');


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
        Schema::dropIfExists('products');
    }
}
