<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {
    	/*$data = [
    			'first' => 'João Pedro',
    			'last'  => 'Nardari',
    		];
    	return view('pages.about')->with($data);*/

    	$first = 'João Pedro';
    	$last  = 'Nardari';

    	return view('pages.about', compact('first', 'last'));
    }
}
