<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('productName');
            $table->mediumText('productTitle');
            $table->integer('categoryId');
            $table->integer('manufacturerId');
            $table->float('productPrice');
            $table->integer('productQuantity');
            $table->text('productShortDescription');
            $table->text('productLongDescription');
            $table->text('productImage');
            $table->tinyInteger('publicationStatus');
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
        Schema::dropIfExists('Products');
    }
}
