<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Nomination;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NominationController extends Controller
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
    public function create(Request $request)
    {
        $categories = Category::all('name','id');
        return response()->json($categories, 201);
    }

    public function getIndividualCategories()
    {
        $individualCategories = SubCategory::where('category_id',1)->get();
        return response()->json($individualCategories, 201);
    }

    public function getCompanyCategories()
    {
        $companyCategories = SubCategory::where('category_id',2)->get();
        return response()->json($companyCategories, 201);
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
        //     'category' => 'required',
        //     'gender' => 'required'
        // ]);

        $category = DB::table('sub_categories')->where('name',$request->category)->first();
        
        $category_id = $category->id;
        dd($category_id);

        $nomination = new Nomination();
        $nomination->firstname = $request->firstname;
        $nomination->lastname = $request->lastname;
        $nomination->linkedin = $request->linkedin;
        $nomination->sub_category_id = $category_id;
        $nomination->twitter = $request->twitter;
        $nomination->gender = $request->gender;
        $nomination->instagram = $request->instagram;
        $nomination->facebook = $request->facebook;
        $nomination->save();

        return response()->json($nomination,201);

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
