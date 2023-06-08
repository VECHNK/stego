<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\st_prog;
use Illuminate\Validation\Rule;

class st_progContorller extends Controller
{
    //
    public function show(){
        $data=st_prog::all();
        return view('st_progs',['st_prog'=>$data]);
    }

    public function create()
    {
        return view('addapp');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $formFields = $request->validate(
            [
                //'id' => 'required',
                'prog_name' => ['required',Rule::unique('st_progs','prog_name')],
                'is_portable' => 'required',
                'author' => 'required',
                'type' => 'required',
                'extension' => 'required',
                'encryption' => 'required',
                'operating_system' => 'required',
                'creation_date' => 'required',
            ]
            );

            st_prog::create($formFields);

            return redirect('/listapp')->with('message','Application added');
    }

    public function edit(st_prog $st_prog) {
        //dd($st_prog->prog_name);
        return view('editapp',['st_prog' => $st_prog]);
    }

    public function update(Request $request, st_prog $st_prog)
    {
        //dd($request->all());
        $formFields = $request->validate(
            [
                //'id' => 'required',
                'prog_name' => 'required',
                'is_portable' => 'required',
                'author' => 'required',
                'type' => 'required',
                'extension' => 'required',
                'encryption' => 'required',
                'operating_system' => 'required',
                'creation_date' => 'required',
            ]
            );
            $prog_id=$request->id;
            $st_prog->id=$prog_id;
            $st_prog->update($formFields);

            return redirect('/listapp')->with('message','Application updated');
    }

    //Delete app
    public function destroy(st_prog $st_prog){
        $st_prog->delete();
        return redirect('/')->with('message','Application deleted');
    }
}
