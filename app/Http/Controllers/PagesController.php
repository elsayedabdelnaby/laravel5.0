<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
		$name = '<span style="color:blue">sayed alaraby</span>';
		$job  = '<span style="color:red;">Web Developer & CRM Specialist</span>';
		return view('pages.about', compact('name', 'job'));
	}

}
