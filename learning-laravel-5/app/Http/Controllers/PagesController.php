<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {

    	$data = [
    		'first'   => 'João Pedro',
    		'last'    => 'Nardari',
    		'people'  => [
						'Test 1',
						'Test 2',
						'Test 3',],
    	];

    	return view('pages.about', $data);
    }

    public function contact() {
    	return view('pages.contact');
    }
}
