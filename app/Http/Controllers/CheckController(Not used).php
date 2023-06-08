<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filecheck;
use App\Models\file_as;
use Illuminate\Validation\Rule;

class CheckController extends Controller
{

    public function show(){
        $data=filecheck::all();
        return view('check_files',['filecheck'=>$data]);
    }

    //Create new check case
    public function create()
    {
        return view('addcheck');
    }

    //add check form
    public function store(Request $request)
    {
        //dd($request->file('checkfile'));
        
        $formFields = $request->validate(
            [
                'casename' => 'required',
            ]
            );

            if($request->hasFile('checkfile')){
                $file = $request->file('checkfile');

                if($file->isValid()) {
                    $filepath = $file->store('public/uploads');
                    $filename = basename($filepath);

                    return redirect('/listchecks')->with('message','Case added');
                }
            }

            filecheck::create($formFields);

        
    }
}
