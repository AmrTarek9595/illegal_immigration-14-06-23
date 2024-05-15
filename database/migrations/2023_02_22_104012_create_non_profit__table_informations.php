<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatenonprofitTableInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_profit_table_informations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('keys')->unsigned();

            $table->text('type_of_service');
            $table->text('benifits_of_service');
            $table->text('requirments');
            $table->text('period_of_gain_service');
            $table->text('cost_of_service');
            $table->text('ways_to_apply');
            $table->text('another_comments');
            
            $table->text('location');
            
            $table->timestamps();
            $table->foreign('keys')
            ->references('id')->on('non_profit_company_informations')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('non_profit_table_informations');
    }
}
