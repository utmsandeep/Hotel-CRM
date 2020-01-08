<?php

namespace App\Http\Controllers\super_admin\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\super_admin\website\Banner;
use DB;
use Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = Banner::paginate(10);
		return view('super_admin.pages.banner',$data);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super_admin.pages.add-banner');
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
        ]);
		unset($request['_token']);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/banner/'), $imageName);
		
        Banner::create(array_merge($request->all() , ['created_by'=>Auth::user()->id,'image'=>$imageName]));
        return redirect()->route('bannerList')->with('success','Add Successfully.');        //
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
        $banner = Banner::find($id);
		if($banner){
			return view('super_admin.pages.edit-banner',compact('banner'));
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
        $banner = Banner::find($id);
		if($banner){
			
			$request->validate([
				'name' => 'required',
				'small_description' => 'required',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			
			if(!empty($request->hasFile('image'))){
				$imageName = time().'.'.$request->image->extension();  
				$request->image->move(public_path('images/banner/'), $imageName);
				$banner->update(array_merge($request->all() , ['image'=>$imageName]));
			}else{
				$banner->update($request->all());
			}
			
			return redirect()->route('bannerList')->with('success','Update Successfully.');        //
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
		$bannerimage = Banner::find($id);
        $banner = Banner::where('id',$id)->delete();
		return redirect()->route('bannerList')->with('success','Delete Successfully.');        //
    }
}
