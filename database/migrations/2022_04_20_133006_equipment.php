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
        Schema::create('equipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CEQ',100)->unique()->notnull();
            $table->string('name', 100)->nullable()->default('text');
            $table->string('Address_IP', 100);
            $table->integer('action_status')->unsigned()->nullable()->default(1);
            $table->integer('connect_status')->unsigned()->nullable()->default(1);
            $table->string('service_use');
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
        Schema::dropIfExists('equipments');
        }
};
