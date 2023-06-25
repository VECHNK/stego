<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filecheck;
use App\Models\file_as;
use App\Models\st_prog;


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

                    return redirect('/listchecks')->with('message','Совпадения найдены.');
            }
                return redirect()->back()->with('message','Совпадения не найдены.');
            }
            
        }
        //return redirect()->back();
    }

    public function uploadMultiple(Request $request)
    {
        if($request->hasFile('files')) {
            $files = $request->file('files');
            $count = 0;
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
                        $count=$count+1;
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
            if ($count == 0)
            {
            return redirect()->back()->with('message','Совпадения не найдены.');   
            }
            else
            return redirect('/listchecks')->with('message','Совпадения найдены.');
        }
        return redirect()->back();
    }

    public function UploadProgFiles(Request $request,st_prog $st_prog)
    {
        if($request->hasFile('files')) {
            $files = $request->file('files');

            foreach ($files as $key => $file) {
                if($file->isValid()) {
                $fileName = $file->getClientOriginalName();
                $type = $file->getMimeType();
                $size = $file->getSize();
                $filehashmd5 = md5_file($file);
                $filehashsha1 = sha1_file($file);
                //$filehashsha256 = CRYPT_SHA256($file);
                $prog_name = $st_prog->prog_name;
                //dd($prog_name);
                        file_as::create([
                            'file_name'=>$fileName,
                            'st_prog_name'=>$prog_name,
                            'type'=>$type,
                            'size'=>$size,
                            'SHA1'=>$filehashsha1,
                            'MD5'=>$filehashmd5,
                            ]);
                }   
            }
            return redirect('/listapp')->with('message','Файлы загружены.');
            }
            return redirect()->back();
        }
        
    }

