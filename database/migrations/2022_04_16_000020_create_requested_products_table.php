<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestedProductsTable extends Migration
{
    public function up()
    {
        Schema::create('requested_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('country');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('product');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
