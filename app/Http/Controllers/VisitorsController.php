<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;

class VisitorsController extends Controller
{
    
    public function listAllVisitors(){
        $visitorsModel = new VisitorModel();
        $visitors = $visitorsModel->getAllVisitors();
        return view('visitors.visitors',['visitors' => $visitors]);
    }

    public function visitorCreate(Request $request){
        $this->validate($request, [
            'name' => ['required'],
            'id-number' => ['required'],
            'purpose' => ['required'],
            'visitees' => ['required']
        ]);        
        return "done";
    }
}
