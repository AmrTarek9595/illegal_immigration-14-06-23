<?php

namespace App\Models\en;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_profit_table_information extends Model
{
    use HasFactory;
    protected $table = 'en_profit_table_informations';

    protected $fillable = [
        "layer1_from_to",
        "layer1_interest",
        "layer1_damen",
        "layer1_workpaper",
        "layer1_period_gain_service",
        "layer1_ftrt_samah",
        "layer1_modet_sadad",
        "layer1_taamen",
        "layer1_takdem",
      
        "layer2_from_to",
        "layer2_interest",
        "layer2_damen",
        "layer2_workpaper",
        "layer2_period_gain_service",
        "layer2_ftrt_samah",
        "layer2_modet_sadad",
        "layer2_taamen",
        "layer2_takdem",
        
        "layer3_from_to",
        "layer3_interest",
        "layer3_damen",
        "layer3_workpaper",
        "layer3_period_gain_service",
        "layer3_ftrt_samah",
        "layer3_modet_sadad",
        "layer3_taamen",
        "layer3_takdem",
        
        "layer4_from_to",
        "layer4_interest",
        "layer4_damen",
        "layer4_workpaper",
        "layer4_period_gain_service",
        "layer4_ftrt_samah",
        "layer4_modet_sadad",
        "layer4_taamen",
        "layer4_takdem",

        "layer5_from_to",
        "layer5_interest",
        "layer5_damen",
        "layer5_workpaper",
        "layer5_period_gain_service",
        "layer5_ftrt_samah",
        "layer5_modet_sadad",
        "layer5_taamen",
        "layer5_takdem",

        "layer6_from_to",
        "layer6_interest",
        "layer6_damen",
        "layer6_workpaper",
        "layer6_period_gain_service",
        "layer6_ftrt_samah",
        "layer6_modet_sadad",
        "layer6_taamen",
        "layer6_takdem",
        "location",
        
        "another_comments"
    ];
    public function profit_company_information()
    {
        return $this->belongsTo('App\Models\en_profit_company_information');
    }

}
