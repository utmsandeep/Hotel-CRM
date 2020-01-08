<?php

namespace App\Http\Controllers\super_admin\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\super_admin\website\City;
use DB;
use Auth;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = City::paginate(10);
		return view('super_admin.pages.city',$data);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super_admin.pages.add-city');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$request->validate([
            'name' => 'required',
            'small_description' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
        ]);
		unset($request['_token']);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/city/'), $imageName);
		
        City::create(array_merge($request->all() , ['created_by'=>Auth::user()->id,'image'=>$imageName]));
        return redirect()->route('cityList')->with('success','Add Successfully.');        //
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
        $city = City::find($id);
		if($city){
			return view('super_admin.pages.edit-city',compact('city'));
		}else{
			with('error','Error.');
		}		
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
        $city = City::find($id);
		$request->validate([
			'name' => 'required',
			'small_description' => 'required',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'price' => 'required',
		]);
		if($city){
			if(!empty($request->hasFile('image'))){
				$imageName = time().'.'.$request->image->extension();  
				$request->image->move(public_path('images/city/'), $imageName);
				$city->update(array_merge($request->all() , ['image'=>$imageName]));
			}else{
				$city->update($request->all());
			}
			
			return redirect()->route('cityList')->with('success','Update Successfully.');        //
		}else{
			with('error','Error.');
		}
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$cityimage = City::find($id);
        $city = City::where('id',$id)->delete();
		return redirect()->route('cityList')->with('success','Delete Successfully.');        //
    }
}
