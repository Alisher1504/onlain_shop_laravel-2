<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('website_url');
            $table->string('page_title');
            $table->string('meta_keyvords', 500);
            $table->string('meta_description', 500);

            $table->string('address', 500);
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email1');
            $table->string('email2');

            $table->string('facebook');
            $table->string('telegram');
            $table->string('instagram');
            $table->string('youtube');
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
        Schema::dropIfExists('set');
    }
};
