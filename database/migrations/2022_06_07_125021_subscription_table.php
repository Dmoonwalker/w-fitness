<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('plan');
            $table->date('issue_date');
            $table->date('due_date');
            $table->integer('amount_paid');
            $table->integer('total');
            $table->string('status');
            $table->timestamps();
            $table->integer('subscribers_id');
            $table->foreign('subscribers_id')->references('id')->on('subscribers');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('subscription');
    }
}
