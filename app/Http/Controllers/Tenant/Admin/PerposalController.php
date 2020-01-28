<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerposalController extends Controller
{
    public function showPerposalTemplate(){
    	return view('tenant.admin.perposal.perposal-template');
    }
    public function showPerposal(){
    	
    }

    public function storePerposal(Request $request){

    }
}
