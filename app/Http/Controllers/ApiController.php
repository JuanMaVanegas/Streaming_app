<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Qrcode;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function __construct(){
        $this->middleware("auth:sanctum");
    }
    public function productos(Request $request){
        if($request->has('id')){
            $id = $request->input('id');
            $productos = Qrcode::where('id', $id)->get();
        }else{
            $productos = Qrcode::all();
        }
        return response()->json($productos);
    }
    public function transactions(Request $request){
        if($request->has('id')){
            $amount = $request->input('amount');
            $id = $request->input('id');
            $transactions = Payment::where('id', $id)->get();
            $transactions = Payment::where('amount', $amount)->get();
        }else{
            $transactions = Payment::all();
        }
        return response()->json($transactions);
    }
}
