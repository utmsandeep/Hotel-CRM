<?php
namespace App\Http\Controllers\super_admin\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\super_admin\website\Uniquevenue;
use DB;
use Auth;

class UniquevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = Uniquevenue::paginate(10);
		return view('super_admin.pages.uniquevenue',$data);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super_admin.pages.add-uniquevenue');
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
        $request->image->move(public_path('images/uniquevenue/'), $imageName);
		
        Uniquevenue::create(array_merge($request->all() , ['created_by'=>Auth::user()->id,'image'=>$imageName]));
        return redirect()->route('uniquevenueList')->with('success','Add Successfully.');        //
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
        $uniquevenue = Uniquevenue::find($id);
		if($uniquevenue){
			return view('super_admin.pages.edit-uniquevenue',compact('uniquevenue'));
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
        $uniquevenue = Uniquevenue::find($id);
		if($uniquevenue){
			
			$request->validate([
				'name' => 'required',
				'small_description' => 'required',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			
			if(!empty($request->hasFile('image'))){
				$imageName = time().'.'.$request->image->extension();  
				$request->image->move(public_path('images/uniquevenue/'), $imageName);
				$uniquevenue->update(array_merge($request->all() , ['image'=>$imageName]));
			}else{
				$uniquevenue->update($request->all());
			}
			
			return redirect()->route('uniquevenueList')->with('success','Update Successfully.');        //
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
		$uniquevenueimage = Uniquevenue::find($id);
        $uniquevenue = Uniquevenue::where('id',$id)->delete();
		return redirect()->route('uniquevenueList')->with('success','Delete Successfully.');        //
    }
}
