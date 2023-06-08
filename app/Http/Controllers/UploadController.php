<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filecheck;
use App\Models\file_as;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function show(){
        $data=filecheck::all();
        return view('check_files',['filecheck'=>$data]);
    }

    public function uploadSingle(Request $request)
    {   //dd($request->file('file'));
        if($request->hasFile('file')) {
            $file = $request->file('file');
            
            if($file->isValid()) {
                $filePath = $file->store('public/uploads');
                $fileName = $file->getClientOriginalName();
                $filehash = md5_file($file); 
                $type = $file->getMimeType();
                $size = $file->getSize(); 
            foreach (file_as::all() as $cfile)
            if ($cfile->MD5==$filehash)
            {
                filecheck::create([
                    'path'=>$filePath,
                    'filename'=>$fileName,
                    'MD5'=>$filehash,
                    'type'=>$type,
                    'size'=>$size,
                    'st_prog'=>$cfile->st_prog_name]);

                    return redirect('/listchecks')->with('message','Match found.');
            }
                return redirect()->back()->with('message','No matches found.');
            }
            
        }
        //return redirect()->back();
    }

    public function uploadMultiple(Request $request)
    {
        if($request->hasFile('files')) {
            $files = $request->file('files');

            foreach ($files as $key => $file) {
                if($file->isValid()) {
                $filePath = $file->store('public/uploads');
                $fileName = $file->getClientOriginalName();
                $filehash = md5_file($file);
                $type = $file->getMimeType();
                $size = $file->getSize();

                foreach (file_as::all() as $cfile)
                {
                if ($cfile->MD5==$filehash)
                {
                    filecheck::create([
                        'path'=>$filePath,
                        'filename'=>$fileName,
                        'MD5'=>$filehash,
                        'type'=>$type,
                        'size'=>$size,
                        'st_prog'=>$cfile->st_prog_name]);
                }
            }
            }
            }
            return redirect('/listchecks')->with('message','File uploaded.');
        }
        return redirect()->back();
    }

    public function uploadSingleCustom(Request $request)
    {
        if($request->hasFile('file')) {
            $file = $request->file('file');

            if($file->isValid()) {
                $destinationPath = public_path('uploads');
                $extension = $file->getClientOriginalExtension();
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $originalName . '-' . uniqid() . '.' . $extension;
                $file->move($destinationPath, $fileName);

                return redirect()->back()->with('message','File uploaded.');
            }
        }
        return redirect()->back();
    }

    public function uploadMultipleCustom(Request $request)
    {
        if($request->hasFile('files')) {
            $files = $request->file('files');

            foreach ($files as $key => $file) {
                if($file->isValid()) {
                    $destinationPath = public_path('uploads');
                    $extension = $file->getClientOriginalExtension();
                    $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $fileName = $originalName . '-' . uniqid() . '.' . $extension;
                    $file->move($destinationPath, $fileName);
                }
            }
            return redirect()->back()->with('message','File uploaded.');
        }
        return redirect()->back();
    }
}
