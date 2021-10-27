<?php

namespace App\Http\Controllers;

use App\Models\Nominee;
use Illuminate\Http\Request;

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

        if ($request->has('companyName')) {
            $category_id = 1;
        } else {
            $category_id = 2;
        }

        $nomination = new Nominee();
        // $nomination->firstname = $request->firstname;
        // $nomination->lastname = $request->lastname;
        // $nomination->phone_number = $request->phone_number;
        // $nomination->alt_phone = $request->alt;
        $nomination->linkedin = $request->linkedin;
        $nomination->twitter = $request->twitter;
        $nomination->instagram = $request->instagram;
        $nomination->email = $request->email;
        $nomination ->experience = $request->experience;
        $nomination->category_id = $category_id;
        $nomination->company_name = $request->companyName;
        $nomination->save();

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
