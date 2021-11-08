<?php

namespace App\Http\Controllers;

use App\Models\civilizationdata;
use App\Models\uniqueunitsdata;
use Illuminate\Http\Request;

class UniqueUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/navbarhelper/listofuniqueunit', [
            "title" => "List of Unique Unit",
            "pagetitle" => "Details Unique Unit",
            "listofuniqueunit" => uniqueunitsdata::where('isOriginal', true)->get(),
            "uniqueunitdata" => uniqueunitsdata::where('isOriginal', false)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/navbarhelper/createcustomunits', [
            "title" => "Custom Project",
            "pagetitle" => "Custom Unit Editor",
            "civsdata" => civilizationdata::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('uniticon')) {
            $image = $request->file('uniticon');
            $imgName = $request->uniticon . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uniqueuniticons/');
            $image->move($destinationPath, $imgName);
        }


        uniqueunitsdata::create(
            [
                'civcode' => $request->civcode,
                'unitcode' => $request->unitcode,
                'uniticon' => '/uniqueuniticons/' . $imgName,
                'unitname' => $request->unitname,
                'introduced' => $request->introduced,
                'type' => $request->type1 . ' , ' . $request->type2,
                'age' => $request->age,

                'hitpoint' => $request->hitpoint,
                'attack' => $request->attack,
                'attackbonus' => $request->attackbonus,
                'rateoffire' => $request->rateoffire,
                'armormelee' => $request->armormelee,
                'armorpierce' => $request->armorpierce,
                'armorclass' => $request->armorclass,
                'lineofsight' => $request->lineofsight,
                'movement' => $request->movement,

                'trainedat' => $request->trainedat,
                'traincost' => $request->traincost,
                'traintime' => $request->traintime,

                'strong' => $request->strong,
                'weak' => $request->weak,

                'unitdes' => $request->unitdes,

                'unitstrategy' => $request->unitstrategy,

                'isOriginal' => false
            ]
        );
        return redirect(route('listofuniqueunit.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unitcode)
    {
        return view('/civilizationdata/uniqueunitdetail', [
            "title" => "Unique Unit Details",
            "pagetitle" => "Detail Unique Unit",
            "unitdata" => uniqueunitsdata::where('unitcode', $unitcode)->get()->first()
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unitcode)
    {
        return view('/navbarhelper/editcustomunits', [
            "title" => "Edit Custom Unique Unit",
            "pagetitle" => "Detail Unique Unit",
            "unitdata" => uniqueunitsdata::where('unitcode', $unitcode)->get()->first(),
            "civsdata" => civilizationdata::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unitcode)
    {


        $unitdata = uniqueunitsdata::findOrFail($unitcode);

        if ($request->hasFile('uniticon')) {
            $image = $request->file('uniticon');
            $imgName = '/uniqueuniticons/' . $request->unitcode . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uniqueuniticons/');
            $image->move($destinationPath, $imgName);
        } else {
            $imgName = $unitdata->uniticon;
        }
        $unitdata->update(
            [
                'civcode' => $request->civcode,
                'unitcode' => $request->unitcode,
                'uniticon' => $imgName,
                'unitname' => $request->unitname,
                'introduced' => $request->introduced,
                'type' => $request->type1 . ' , ' . $request->type2,
                'age' => $request->age,

                'hitpoint' => $request->hitpoint,
                'attack' => $request->attack,
                'attackbonus' => $request->attackbonus,
                'rateoffire' => $request->rateoffire,
                'armormelee' => $request->armormelee,
                'armorpierce' => $request->armorpierce,
                'armorclass' => $request->armorclass,
                'lineofsight' => $request->lineofsight,
                'movement' => $request->movement,

                'trainedat' => $request->trainedat,
                'traincost' => $request->traincost,
                'traintime' => $request->traintime,

                'strong' => $request->strong,
                'weak' => $request->weak,

                'unitdes' => $request->unitdes,

                'unitstrategy' => $request->unitstrategy,

                'isOriginal' => false
            ]

        );
        return redirect(route('listofuniqueunit.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($unitcode)
    {
        $unitdata = uniqueunitsdata::findOrFail($unitcode);
        $unitdata->delete();

        return redirect(route('listofuniqueunit.index'));
    }
}
