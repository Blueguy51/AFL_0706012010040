<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\civilizationdata;

class CivilizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/navbarhelper/listofcivilization', [
            "title" => "List of Civilization",
            "pagetitle" => "Civilization List",
            "civilizationdata" => civilizationdata::where('isOriginal', true)->get(),
            "customdata" => civilizationdata::where('isOriginal', false)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/navbarhelper/createcustomcivs', [
            "title" => "Custom Project",
            "pagetitle" => "Custom Unit Editor",
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
        if ($request->hasFile('banner')) { // jika $request mempunyai file image
            $image = $request->file('banner'); // inisialisasi variabel image dengan file image yang ada di $request
            $imgName = $request->civcode . '.' . $image->getClientOriginalExtension(); // namain filenya (punyaku nyesuain nama code, mungkin punyamu diganti ke $request->name atau apa)
            $destinationPath = public_path('/coatofarms/'); // file destination
            $image->move($destinationPath, $imgName); // memindahkan file
        } 
        // else { // jika $request tidak mengupload file image
        //     return redirect()->back()->withErrors('The logo field is required.'); // kasih pesan eror
        // }

        civilizationdata::create(
            [
                'civname' => $request->civname,
                'civcode' => $request->civcode,
                'civtype' => $request->civtype1 . " and " . $request->civtype2,
                'banner' => '/coatofarms/' . $imgName,
                'uniquetechone' => $request->uniquetechone,
                'uniquetechtwo' => $request->uniquetechtwo,
                'civsbonus' => $request->civsbonus,
                'teambonus' => $request->teambonus,
                'civdescription' => $request->civdescription,
                'civinformation1' => $request->civinformation1,
                'civinformation2' => $request->civinformation2,
                'civoverview' => $request->civoverview,
                'strategies' => $request->strategies,
                'isOriginal' =>false,
            ]
        );
        return redirect(route('listofcivilization.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $civcode
     * @return \Illuminate\Http\Response
     */
    public function show($civcode)
    {
        return view('/civilizationdata/civilizationdetail', [
            "title" => "Civilization Details",
            "pagetitle" => "Detail Civilization",
            "civdata" => civilizationdata::where('civcode', $civcode)->get()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($civcode)
    {
        return view('/navbarhelper/editcustomcivs', [
            "title" => "Edit Custom Civilization",
            "pagetitle" => "Welcome",
            "civdata" => civilizationdata::findOrFail($civcode)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $civcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $civcode)
    {
        $civdata = civilizationdata::findOrFail($civcode);

        if ($request->hasFile('banner')) {
            $image = $request->file('banner'); 
            $imgName = '/coatofarms/' . $request->civcode . '.' . $image->getClientOriginalExtension(); 
            $destinationPath = public_path('/coatofarms/'); 
            $image->move($destinationPath, $imgName); 
        }
        else{
            $imgName = $civdata -> banner;
        }

        
        $civdata -> update(
            [
                'civname' => $request->civname,
                'civcode' => $civdata->civcode,
                'civtype' => $request->civtype1 . " and " . $request->civtype2,
                'banner' => $imgName,
                'uniquetechone' => $request->uniquetechone,
                'uniquetechtwo' => $request->uniquetechtwo,
                'civsbonus' => $request->civsbonus,
                'teambonus' => $request->teambonus,
                'civdescription' => $request->civdescription,
                'civinformation1' => $request->civinformation1,
                'civinformation2' => $request->civinformation2,
                'civoverview' => $request->civoverview,
                'strategies' => $request->strategies
            ]
        );
        return redirect(route('listofcivilization.index'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $civcode
     * @return \Illuminate\Http\Response
     */
    public function destroy($civcode)
    {
        $civdata = civilizationdata::findOrFail($civcode);
        $civdata->delete();

        return redirect(route('listofcivilization.index'));
    }
}
