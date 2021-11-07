<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shareduniqueunit extends Model
{
    use HasFactory;

    //shared unique unit such as Condottiero, Imperial Skirmisher, Genitour
    private static $shareduniqueunits = [

    [ //Italians Condottiero - shared with allies in Imperial Age
        //Informatiom
        'unitcode' => 'italiansharedunit',
        'unitname' => 'Condottiero',
        'introduced' => 'Age of Empires II: The Conquerors',
        'type' => 'Infantry',
        'unitcivs' => 'Aztecs',
        'age' => 'Castle Age',
        //Unit Statistics
        'hitpoint' => '50',
        'attack' => '10, melee',
        'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
        'rateoffire' => '2',
        'armormelee' => '1',
        'armorpierce' => '1',
        'armorclass' => 'Infantry, Unique Unit',
        'movement' => '1',
        'lineofsight' => '3',
        //Unit Training
        'trainedat' => 'Castle',
        'traincost' => '60 food, 30 gold',
        'traintime' => '11 seconds'
    ],
    [ //Berbers Genitour - Shared with Allies from Castle Age
        //Information
        'unitcode' => 'bebersharedunit',
        'unitname' => 'Genitour',
        'introduced' => 'Age of Empires II: The Conquerors',
        'type' => 'Infantry',
        'unitcivs' => 'Aztecs',
        'age' => 'Castle Age',
        //Unit Statistics
        'hitpoint' => '50',
        'attack' => '10, melee',
        'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
        'rateoffire' => '2',
        'armormelee' => '1',
        'armorpierce' => '1',
        'armorclass' => 'Infantry, Unique Unit',
        'movement' => '1',
        'lineofsight' => '3',
        //Unit Training
        'trainedat' => 'Castle',
        'traincost' => '60 food, 30 gold',
        'traintime' => '11 seconds'
    ],
    [ //Vietnamese Imperial Skirmisher - Shared with Allies in Imperial Age
        //Informatiom
        'unitcode' => 'vietnamesesharedunit',
        'unitname' => 'Imperial Skirmisher',
        'introduced' => 'Age of Empires II: The Conquerors',
        'type' => 'Infantry',
        'unitcivs' => 'Aztecs',
        'age' => 'Castle Age',
        //Unit Statistics
        'hitpoint' => '50',
        'attack' => '10, melee',
        'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
        'rateoffire' => '2',
        'armormelee' => '1',
        'armorpierce' => '1',
        'armorclass' => 'Infantry, Unique Unit',
        'movement' => '1',
        'lineofsight' => '3',
        //Unit Training
        'trainedat' => 'Castle',
        'traincost' => '60 food, 30 gold',
        'traintime' => '11 seconds'
    ]
];
}
