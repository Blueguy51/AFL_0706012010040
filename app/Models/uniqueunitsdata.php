<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uniqueunitsdata extends Model
{
    use HasFactory;
    protected $table = 'uniqueunitsdata';

    protected $fillable = [
        'isOriginal',
        'civcode',
        'unitcode',
        'uniticon',
        'unitname',
        'introduced',
        'type',
        'unitcivs',
        'age',

        'hitpoint',
        'attack',
        'attackbonus',
        'civoverview',
        'rateoffire',
        'armormelee',
        'armorpierce',
        'armorclass',
        'lineofsight',
        'movement',

        'trainedat',
        'traincost',
        'traintime',

        'strong',
        'weak',

        'unitdes',

        'unitstrategy',
    ];

    protected $primaryKey='unitcode';
    public $incrementing=false;

    public function civilization (){
        return $this -> belongsTo(civilizationdata :: class, 'civcode', 'civcode');
    }

    
}
