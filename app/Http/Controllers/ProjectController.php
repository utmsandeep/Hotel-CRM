<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    function projectList(){
    	return view('tenant.admin.project.project-list');
    }

    function taskboard(){
    	return view('tenant.admin.project.taskboard');
    }

    function ticketList(){
    	return view('tenant.admin.project.ticket-list');
    }

    function ticketDetail(){
    	return view('tenant.admin.project.ticket-detail');
    }
}
