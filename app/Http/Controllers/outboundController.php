<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Outbound;

class outboundController extends Controller
{
    public function creatOutbound(Request $request){
    	$info = new Outbound();
    	
    	$info->username=$request->username;
    	$info->cardNumber=$request->cardNumber;
    	$info->contuctNumber=$request->contuctNumber;
    	$info->categoryinfo=$request->categoryinfo;
    	$info->quaryinfo=$request->quaryinfo;
    	$info->branchinfo=$request->branchinfo;
    	$info->accountsinfo=$request->accountsinfo;
        $info->categorydes=$request->categorydes;
    	$info->serviceType=$request->serviceType;
    	$info->save();
    	return redirect('/outbound/add');
    }
    public function showInfooutbound(){
    	$saveinfo=Outbound::all();
    	return view('admin.category.showInfooutbound',['saveinfo'=>$saveinfo]);
    }
    public function searchoutbound(){
    	 	$search=Input::get('searchoutbound');
    	if ($search!=' ') {
    	$searchdata	= Outbound::where('username', 'LIKE', '%'.$search.'%')
    						->orWhere('contuctNumber', 'LIKE', '%'.$search.'%')
    						->orWhere('cardNumber', 'LIKE', '%'.$search.'%')
    						->get();
    						if (count($searchdata)>0) {
    							return view('admin.search.searchout')->withDetails($searchdata)->withQuery($search);
    						}
    	}
    	return view('admin.search.searchout')->withMessage("no data found");
    }
}
