<?php

namespace App\Models\en;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_table_information extends Model
{
    use HasFactory;
    protected $table = 'en_non_profit_table_informations';
    protected $fillable = [
        'type_of_service',
        'benifits_of_service',
        'requirments',
        'period_of_gain_service',
        'cost_of_service',
        'ways_to_apply'
    ];
    public function en_company_information()
    {
        return $this->belongsTo('App\Models\en_company_information');
    }
}
