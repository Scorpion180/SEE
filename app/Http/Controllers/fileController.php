<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Storage;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Storage;
class fileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //dd($request->file('files'));
        $files = $request->file('files');
        foreach ($files as $file) {
            //Valida que se haya cargado el archivo correctamente
                if ($file->isValid()) {
                    //Guarda el archivo en storage/app/
                    $hashedName = $file->store('');
                    //Guarda registro en tabla archivos
                    $regfile = new File([
                        'file_id' => $request->fileable_id,
                        'file_type' => 'App\\' . $request->fileable_type,
                        'name' => $file->getClientOriginalName(),
                        'hashed' => $hashedName,
                        'mime' => $file->getClientMimeType(),
                        'size' => $file->getClientSize(),
                    ]);
                    $regfile->save();
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        $headers = ['Content-Type: ' . $file->mime];
        return Storage::download($file->hashed, $file->nombre, $headers);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        Storage::delete($file->hashed);
        $file->delete();
        return redirect()->back();
    }
}
