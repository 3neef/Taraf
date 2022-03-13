<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('address');
            $table->string('phone');
            $table->string('additional_phone')->nullable();
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
