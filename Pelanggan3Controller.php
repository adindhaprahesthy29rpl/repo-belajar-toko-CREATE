<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan3;
use Illuminate\Support\Facades\Validator;

class Pelanggan3Controller extends Controller
{
    public function store(Request $request)
 {
 $validator=Validator::make($request->all(),
 [
 'nama' => 'required',
 'alamat' => 'required',
 'telp' => 'required',
 'username' => 'required',
 'password' => 'required'
 ]
 );
 if($validator->fails()) {
 return Response()->json($validator->errors());
 }
 $simpan = Pelanggan3::create([
 'nama' => $request->nama,
 'alamat' => $request->alamat,
 'telp' => $request->telp,
 'username' => $request->username,
 'password' => $request->password
 ]);
 if($simpan) {
 return Response()->json(['status'=>1]);
 }
 else {
 return Response()->json(['status'=>0]);
 }
 }
}
