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
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable()->default('text');
            $table->string('desciption', 100)->nullable()->default('text');
            $table->integer('action_status')->unsigned()->nullable()->default(1);
            $table->string('auto-give', 100)->nullable();
            $table->integer('prefix')->unsigned()->nullable()->default(1);
            $table->integer('surfix')->unsigned()->nullable()->default(9999);
            $table->boolean('reset')->nullable()->default(false);
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('services');
    }
};
