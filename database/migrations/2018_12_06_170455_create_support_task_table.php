<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Tasks\Model\SupportTask;

class CreateSupportTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(SupportTask::NAME, function (Blueprint $table) {
            $table->increments(SupportTask::PROPERTY_ID);
            $table->dateTime(SupportTask::PROPERTY_CREATED)->nullable(false);
            $table->dateTime(SupportTask::PROPERTY_MODIFIED)->nullable(false);
            $table->string(SupportTask::PROPERTY_TITLE, 100);
            $table->string(SupportTask::PROPERTY_BODY, 255);
            $table->boolean(SupportTask::PROPERTY_DELETED)->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(SupportTask::NAME);
    }
}
