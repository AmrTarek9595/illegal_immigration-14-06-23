<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_information extends Model
{
    use HasFactory;
    protected $table = 'non_profit_table_informations';
    protected $fillable = [
        'type_of_service',
        'benifits_of_service',
        'requirments',
        'period_of_gain_service',
        'cost_of_service',
        'ways_to_apply'
    ];
    public function company_information()
    {
        return $this->belongsTo('App\Models\company_information');
    }
}
