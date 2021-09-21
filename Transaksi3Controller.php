<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi3;
use Illuminate\Support\Facades\Validator;

class Transaksi3Controller extends Controller
{
    public function store(Request $request)
    {
    $validator=Validator::make($request->all(),
    [
    'id_pelanggan3' => 'required',
    'id_petugas3' => 'required',
    'tgl_transaksi' => 'required'
    ]
    );
    if($validator->fails()) {
    return Response()->json($validator->errors());
    }
    $simpan = Transaksi3::create([
    'id_pelanggan3' => $request->id_pelanggan3,
    'id_petugas3' => $request->id_petugas3,
    'tgl_transaksi' => $request->tgl_transaksi
    ]);
    if($simpan) {
    return Response()->json(['status'=>1]);
    }
    else {
    return Response()->json(['status'=>0]);
    }
    }
}
