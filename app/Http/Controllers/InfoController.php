<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Info;
use App\Manufacturer;
use App\User;

class InfoController extends Controller
{
    public function createinfo(Request $request){
    	
    	$info = new Info();
    	
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
    	return redirect('/inbound/add');
    	 




    }
    public function showInfo(){
    	$saveinfo=Info::all();
    	return view('admin.category.manageCategory',['saveinfo'=>$saveinfo]);
    }
    public function search(){
    	$search=Input::get('search');
    	if ($search!=' ') {
    	$searchdata	= Info::where('username', 'LIKE', '%'.$search.'%')
    						->orWhere('contuctNumber', 'LIKE', '%'.$search.'%')
    						->orWhere('cardNumber', 'LIKE', '%'.$search.'%')
    						->get();
    						if (count($searchdata)>0) {
    							return view('admin.search.search')->withDetails($searchdata)->withQuery($search);
    						}
    	}
    	return view('admin.search.search')->withMessage("no data found");

    	 
    }
    public function user(){
    	$users = User::all();

    	return view('user',['users'=>$users]);
    }
    public function inboundadd(){
        return view('admin.category.inboundadd');
    }
    public function outboundadd(){
        return view('admin.category.outboundadd');
    }
}
