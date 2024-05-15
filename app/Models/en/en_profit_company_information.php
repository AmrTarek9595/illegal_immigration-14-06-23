<?php

namespace App\Models\en;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_profit_company_information extends Model
{
    use HasFactory;
    protected $table = 'en_profit_company_informations';
    protected $fillable = [
        "GOV",
        "markaz",
        "karya",
        "madina",
        "name_of_data_collection",
        "Day_Of_collection",
        "date",
        "name_of_company",
        "address_company",
        "name_of_source_data",
        "source_job_title",
        "PhoneNumber_his",
        "job_hours_from_to",
        "working_days",
        "type_of_service",
        "service_category",
        "type_of_investment",
        "fields_of_service",
        "terms_gain_service",
        "covered_area",
        "Target_group",
        "continues_service",
        "Target_age_groups",
        "number_of_company",
        "whatsApp_of_company",
        "website_of_company",
        "email_of_company",
        "location",
    ];
    public function table_information()
    {
        return $this->hasOne('App\Models\en_profit_table_information');
    }
}
