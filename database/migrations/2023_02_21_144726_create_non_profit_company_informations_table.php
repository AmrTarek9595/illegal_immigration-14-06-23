<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonprofitCompanyInformationsTable extends Migration
{
    /**
     * Run the migrations.
     **
     * @return void
     */
    public function up()
    {
        Schema::create('non_profit_company_informations', function (Blueprint $table) {
            $table->id();
            $table->text('GOV');
            $table->text('markaz')->nullable();
            $table->text('karya')->nullable();
            $table->text('madina')->nullable();
            $table->text('name_of_data_collection')->nullable();
            $table->text('Day_Of_collection');
            $table->date('date');
            
            
            $table->text('name_of_company');
            $table->text('address_company');
            $table->text('name_of_source_data');
            $table->text('source_job_title');
            $table->text('PhoneNumber_his');
            
            $table->text('job_hours_from_to');
            $table->text('working_days');
            $table->text('type_of_service');
            $table->text('service_category');
            $table->text('fields_of_service');
            $table->text('terms_gain_service');
            $table->text('Target_group')->nullable();
            $table->text('continues_service');
            $table->text('covered_area');
            $table->text('Target_age_groups')->nullable();
            $table->text('Advertising_method')->nullable();
            $table->text('number_of_company');
            $table->text('whatsApp_of_company')->nullable();
            $table->text('website_of_company')->nullable();
            $table->text('email_of_company')->nullable();
            

            

            
            $table->timestamp('failed_at')->useCurrent();
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
        Schema::dropIfExists('non_profit_company_informations');
    }
}
