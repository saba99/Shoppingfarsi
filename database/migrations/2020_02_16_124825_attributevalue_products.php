<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AttributevalueProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributevalue_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('attributeValue_id');
            $table->foreign('attributeValue_id')->references('id')->on('attributes_values');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
 
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
        Schema::dropIfExists('attributevalue_products');
    }
}
