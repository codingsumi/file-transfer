<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $data = File::all();
        return view('index')->with(compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('file'), $filename);
            $data = new File();
            $data->file = 'file/' . $filename;
            $data->save();
            return response()->json(['message' => 'data stored Successfull']);
        }
        return response()->json(['message' => 'File Not Found']);
    }
    public function delete($id)
    {
        $data = File::findOrFail($id);
        if ($data) {
            $file_path = public_path($data->file);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
            $data->delete();
            return response()->json(['message'=>'data delete Successfull']);
        }
        return response()->json(['message'=>'data Not FoundF']);
    }
}
