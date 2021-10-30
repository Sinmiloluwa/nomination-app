<?php

namespace App\Http\Controllers;

use App\Models\Nomination;
use App\Models\Nominee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NomineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nominee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'phone_number' => 'required|min:11|max:11',
        //     'alt' => 'min:11|max:11',
        //     'linkedin' => 'required',
        //     'twitter' => 'required',
        //     'email' =>'required',
        //     'instagram' => 'required',
        //     'experience' => 'required'
        // ]);

        $category = DB::table('sub_categories')->where('name',$request->category)->first();
        
        $sub_category_id = $category->id;

        $category_id = 2;

        $nomination = new Nominee();
        $nomination->linkedin = $request->linkedin;
        $nomination->twitter = $request->twitter;
        $nomination->facebook = $request->facebook;
        $nomination->sub_category_id = $sub_category_id;
        $nomination->category_id = $category_id;
        $nomination->instagram = $request->instagram;
        $nomination->website = $request->website;
        $nomination->company_name = $request->companyName;
        $nomination->save();

        return response()->json([
            'status' => 'Nomination Accepted',
            'data' => $nomination
        ], 200);

        
    }

    public function acceptIndividual(Request $request) 
    {
        $category = DB::table('sub_categories')->where('name',$request->category)->first();
        
        $sub_category_id = $category->id;

        $category_id = 1;

        $nomination =new Nominee;
        $nomination->firstname = $request->firstName;
        $nomination->lastname = $request->lastName;
        $nomination->phone_number = $request->phone_number;
        $nomination->linkedin = $request->linkedin;
        $nomination->twitter = $request->twitter;
        $nomination->category_id = $category_id;
        $request->location_id = $request->location;
        $nomination->facebook = $request->facebook;
        $nomination->sub_category_id = $sub_category_id;
        $nomination->experience = $request->yoe;
        $nomination->gender = $request->genders;
        $nomination->instagram = $request->instagram;
        $nomination->email = $request->email;

        return response()->json([
            'status' => 'Nomination Accepted',
            'data' => $nomination
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
