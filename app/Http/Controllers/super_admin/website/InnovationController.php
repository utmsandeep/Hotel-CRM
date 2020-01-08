<?php

namespace App\Http\Controllers\super_admin\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\super_admin\website\Innovation;
use DB;
use Auth;

class InnovationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = Innovation::paginate(10);
		return view('super_admin.pages.innovation',$data);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super_admin.pages.add-innovation');
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
        $request->image->move(public_path('images/innovation/'), $imageName);
		
        Innovation::create(array_merge($request->all() , ['created_by'=>Auth::user()->id,'image'=>$imageName]));
        return redirect()->route('innovationList')->with('success','Add Successfully.');        //
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
        $innovation = Innovation::find($id);
		if($innovation){
			return view('super_admin.pages.edit-innovation',compact('innovation'));
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
        $innovation = Innovation::find($id);
		if($innovation){
			
			$request->validate([
				'name' => 'required',
				'small_description' => 'required',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			
			if(!empty($request->hasFile('image'))){
				$imageName = time().'.'.$request->image->extension();  
				$request->image->move(public_path('images/innovation/'), $imageName);
				$innovation->update(array_merge($request->all() , ['image'=>$imageName]));
			}else{
				$innovation->update($request->all());
			}
			
			return redirect()->route('innovationList')->with('success','Update Successfully.');        //
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
		$innovationimage = Innovation::find($id);
        $innovation = Innovation::where('id',$id)->delete();
		return redirect()->route('innovationList')->with('success','Delete Successfully.');        //
    }
}
