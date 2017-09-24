<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userRoles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('projectTypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('projectStatuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('symbol');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('payModes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('transactionTypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('transactionStatuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('type');
            $table->integer('status');
            $table->integer('cost')->nullable();
            $table->integer('budget')->nullable();
            $table->integer('currency');
            $table->integer('payMode');
            $table->integer('commission');
            $table->integer('oTime')->comment('optimistic time in hours')->nullable();
            $table->integer('pTime')->comment('pessimistic time in hours')->nullable();
            $table->integer('mTime')->comment('most likely time in hours')->nullable();
            $table->integer('eTime')->comment('expected time in hours')->nullable();
            $table->integer('dailyDedication')->comment('daily dedication in hours')->nullable();
            $table->timestamp('initialDate')->nullable();
            $table->timestamp('internalDeadline')->nullable();
            $table->timestamp('clientDeadline')->nullable();
            $table->timestamps();
            $table->softDeletes();
            /*$table->foreign('type')->references('id')->on('projectTypes')->onDelete('cascade');
            $table->foreign('status')->references('id')->on('projectStatuses')->onDelete('cascade');
            $table->foreign('payMode')->references('id')->on('payModes')->onDelete('cascade');
            $table->foreign('currency')->references('id')->on('currencies')->onDelete('cascade');*/
        });
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('user_id');
            $table->integer('status');
            $table->string('reason');
            $table->integer('type');
            $table->integer('money');
            $table->integer('currency');
            $table->integer('payMode');
            $table->integer('date');
            $table->text('comments');
            $table->timestamps();
            $table->softDeletes();
            /*$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type')->references('id')->on('transactionTypes')->onDelete('cascade');
            $table->foreign('status')->references('id')->on('transactionStatuses')->onDelete('cascade');
            $table->foreign('payMode')->references('id')->on('payModes')->onDelete('cascade');
            $table->foreign('currency')->references('id')->on('currencies')->onDelete('cascade');*/
        });
        Schema::table('users', function (Blueprint $table) {
            $table->integer('rol');
            $table->softDeletes();
            //$table->foreign('rol')->references('id')->on('userRoles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userRoles');
        Schema::dropIfExists('projectTypes');
        Schema::dropIfExists('projectStatuses');
        Schema::dropIfExists('currencies');
        Schema::dropIfExists('payModes');
        Schema::dropIfExists('transactionTypes');
        Schema::dropIfExists('transactionStatuses');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('transaction');
    }
}
