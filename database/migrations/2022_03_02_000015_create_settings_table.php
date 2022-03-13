<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name_en');
            $table->string('site_name_ar');
            $table->longText('slogan_en')->nullable();
            $table->longText('slogan_ar')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
