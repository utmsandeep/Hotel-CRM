<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Tenant\Admin\PerposalTemplate;

class PerposalController extends Controller
{
    public function showPerposalTemplate(){
        $template = PerposalTemplate::first();
    	return view('tenant.admin.perposal.perposal-template' , compact('template'));
    }
    public function showPerposal(){
    	
    }

    public function storePerposal(Request $request){
    	
    	return $request;

    	return json_encode (array("day"=>$request->day , "date"=>$request->date));
    }
}
