<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnProfitTableInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_profit_table_informations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('keys')->unsigned()->uniqid();
            
            $table->text("layer1_from_to");
            $table->text("layer1_interest");
            $table->text("layer1_damen");
            $table->text("layer1_workpaper");
            $table->text("layer1_period_gain_service");
            $table->text("layer1_ftrt_samah");
            $table->text("layer1_modet_sadad");
            $table->text("layer1_taamen");
            $table->text("layer1_takdem");
         


            $table->text("layer2_from_to")->nullable();
            $table->text("layer2_interest")->nullable();
            $table->text("layer2_damen")->nullable();
            $table->text("layer2_workpaper")->nullable();
            $table->text("layer2_period_gain_service")->nullable();
            $table->text("layer2_ftrt_samah")->nullable();
            $table->text("layer2_modet_sadad")->nullable();
            $table->text("layer2_taamen")->nullable();
            $table->text("layer2_takdem")->nullable();
         

            $table->text("layer3_from_to")->nullable();
            $table->text("layer3_interest")->nullable();
            $table->text("layer3_damen")->nullable();
            $table->text("layer3_workpaper")->nullable();
            $table->text("layer3_period_gain_service")->nullable();
            $table->text("layer3_ftrt_samah")->nullable();
            $table->text("layer3_modet_sadad")->nullable();
            $table->text("layer3_taamen")->nullable();
            $table->text("layer3_takdem")->nullable();
     

            $table->text("layer4_from_to")->nullable();
            $table->text("layer4_interest")->nullable();
            $table->text("layer4_damen")->nullable();
            $table->text("layer4_workpaper")->nullable();
            $table->text("layer4_period_gain_service")->nullable();
            $table->text("layer4_ftrt_samah")->nullable();
            $table->text("layer4_modet_sadad")->nullable();
            $table->text("layer4_taamen")->nullable();
            $table->text("layer4_takdem")->nullable();
            
            $table->text("layer5_from_to")->nullable();
            $table->text("layer5_interest")->nullable();
            $table->text("layer5_damen")->nullable();
            $table->text("layer5_workpaper")->nullable();
            $table->text("layer5_period_gain_service")->nullable();
            $table->text("layer5_ftrt_samah")->nullable();
            $table->text("layer5_modet_sadad")->nullable();
            $table->text("layer5_taamen")->nullable();
            $table->text("layer5_takdem")->nullable();

            
            $table->text("layer6_from_to")->nullable();
            $table->text("layer6_interest")->nullable();
            $table->text("layer6_damen")->nullable();
            $table->text("layer6_workpaper")->nullable();
            $table->text("layer6_period_gain_service")->nullable();
            $table->text("layer6_ftrt_samah")->nullable();
            $table->text("layer6_modet_sadad")->nullable();
            $table->text("layer6_taamen")->nullable();
            $table->text("layer6_takdem")->nullable();

            $table->text('location')->nullable();;
            $table->text("another_comments")->nullable();
            $table->foreign('keys')
            ->references('id')->on('en_profit_company_informations')->onDelete('cascade');
            
        


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
        Schema::dropIfExists('en_profit_table_informations');
    }
}
