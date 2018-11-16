<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateRollerHistoryTable
 * @package Modules\Roller\Database\Migrations
 */
class CreateRollerHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'roller_history',
            function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_id');
            $table->text('message');
            $table->text('command');
            $table->timestamps();
            }
        );

        Schema::table(
            'roller_history',
            function (Blueprint $table) {
                $table->foreign('room_id')
                    ->references('id')
                    ->on('rooms')
                    ->onDelete('cascade');
            }
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roller_history');
    }
}
