<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_information extends Model
{
    use HasFactory;
    protected $table = 'non_profit_company_informations';
    protected $fillable = [
        'GOV',
        'markaz',
        'karya',
        'madina',
        'name_of_data_collection',
        'Day_Of_collection',
        'date',
        'name_of_company',
        'address_company',
        'name_of_source_data',
        'source_job_title',
        'PhoneNumber_his',
        'job_hours_from_to',
        'working_days',
        'type_of_service',
        'service_category',
        'fields_of_service',
        'terms_gain_service',
        'Target group',
        'continues_service',
        'covered_area',
        'Target_age_groups',
        'Advertising_method',
        'number_of_company',
        'whatsApp_of_company',
        'website_of_company',
        'email_of_company'
    ];
    public function table_information()
    {
        return $this->hasOne('App\Models\table_information');
    }
}
