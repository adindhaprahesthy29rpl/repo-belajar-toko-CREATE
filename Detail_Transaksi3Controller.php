<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_Transaksi3;
use Illuminate\Support\Facades\Validator;

class Detail_Transaksi3Controller extends Controller
{
    public function store(Request $request)
    {
    $validator=Validator::make($request->all(),
    [
    'id_transaksi3' => 'required',
    'id_produk3' => 'required',
    'qty' => 'required',
    'subtotal' => 'required'
    ]
    );
    if($validator->fails()) {
    return Response()->json($validator->errors());
    }
    $simpan = Detail_Transaksi3::create([
    'id_transaksi3' => $request->id_transaksi3,
    'id_produk3' => $request->id_produk3,
    'qty' => $request->qty,
    'subtotal' => $request->subtotal
    ]);
    if($simpan) {
    return Response()->json(['status'=>1]);
    }
    else {
    return Response()->json(['status'=>0]);
    }
    }
}
