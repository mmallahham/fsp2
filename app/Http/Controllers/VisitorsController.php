<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Visitor;

class VisitorsController extends Controller
{
    
    public function listAllVisitors(){
        $visitors = Visitor::all();
        return view('visitors.visitors',['visitors' => $visitors]);
    }

    public function visitorCreate(Request $request){
        $this->validate($request, [
            'name' => ['required'],
            'id-number' => ['required'],
            'purpose' => ['required'],
            'visitees' => ['required']
        ]);  
        $vimage = '/images/no_image.png';
        if(Input::hasFile($request->input('vimage'))) {
            
            $file = Input::file('vimage');
            echo 'copied 1';
            $file->move(public_path().'/images/',$file->getClientOriginalName());
            echo 'copied 2';
            $vimage = '/images/'.$file->getClientOriginalName();
            echo 'copied 3';
        }


        $visitor = new Visitor([
            'name' => $request->input('name'),
            'type' => $request->input('id-type'),
            'idNumber' => $request->input('id-number'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('Email'),
            'visitees' => $request->input('visitees'),
            'purpose' => $request->input('purpose'),
            'vimage' => $vimage
            
        ]);
        $visitor->save();
        return "done";
    }
}
