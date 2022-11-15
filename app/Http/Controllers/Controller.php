<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Eform;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function view(){
        return view('eform');
    }

    public function store(Request $request){
  
        // echo "<pre>";
        // print_r($request->all());

        $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
            ]
        );

         $eform = new Eform;
         $eform->firstname = $request['firstname'];
         $eform->lastname = $request['lastname'];
         $eform->email = $request['email'];
         $eform->phone = $request['phone'];
         $eform->qualification = $request['qualification'];
         $eform->gender = $request['gender'];
         $eform->letter = $request['letter'];
         $eform->availability = $request['availability'];
         $eform->assessment = $request['assessment'];
         $eform->save();
         return view('submit');
    }

    public function show(){
        return view('eform');
    }
}
