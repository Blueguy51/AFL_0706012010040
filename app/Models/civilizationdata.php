<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class civilizationdata extends Model
{
    use HasFactory;
    protected $table = 'civilizationdata';

    protected $fillable = [
        'isOriginal',
        'civname',
        'civcode',
        'banner',
        'civtype',
        'uniquetechone',
        'uniquetechtwo',
        'civsbonus',
        'teambonus',
        'civdescription',
        'civinformation1',
        'civinformation2',
        'civoverview',
        'strategies'
    ];

    protected $primaryKey='civcode';
    public $incrementing=false;

    public function uniqueunits()
    {
        return $this->hasMany(uniqueunitsdata::class, 'civcode', 'civcode');
    }
}
