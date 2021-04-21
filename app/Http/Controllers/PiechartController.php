<?php

namespace App\Http\Controllers;
use App\Models\Piechart;
use Illuminate\Http\Request;

class PiechartController extends Controller
{
    public function piechart(Request $request)
    {
    	$veg = Piechart::where('type','veg')->get();
    	$non_veg = Piechart::where('type','non-veg')->get();    	
    	$veg_count = count($veg);
    	$non_veg_count = count($non_veg);
    	return view('piechart',compact('veg_count','non_veg_count'));
    }
}
