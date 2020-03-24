<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\ContractContent;
use App\Model\Tenant\Admin\HotelContract;


class ContractController extends Controller
{
    public function showForm(){
        $content = ContractContent::first();
    	return view('tenant.admin.hotels.contract_content' , compact('content'));
    }
    public function store(Request $request){
        $request->validate([
            'content'           =>'required'
        ]);

        $content = ContractContent::first();

        if(!empty($content)){
            $content->update(['content'=>$request->content]);
            $msg = "Updated";
        }
        else{
            $content =  ContractContent::create(['content'=>$request->content]);
            $msg = "Created";
        }
        return redirect()->route('tenant.admin.hotel.contract.content')->withSuccess("Content $msg.");
        // return $request;
    }
    public function index(){
        $contracts =  HotelContract::orderBy('id' ,'desc')->paginate(10);
        return view('tenant.admin.hotels.hotel-contract-index' , compact('contracts'));
    }
}
