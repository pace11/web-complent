<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplentIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complent_issue', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('user_id', 32)->nullabe();
            $table->string('lead_technician_id', 32)->nullabe();
            $table->string('technician_id', 32)->nullabe();
            $table->longText('description');
            $table->enum('status', array('inprogress', 'done'));
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('lead_technician_id')->references('id')->on('lead_technician')->onDelete('cascade');
            $table->foreign('technician_id')->references('id')->on('technician')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complent_issue');
    }
}
