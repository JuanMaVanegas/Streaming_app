<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class TokenController extends Controller
{
    public function generateToken(User $user){
        $token = $user->createToken('token-name');

        $user->remember_token = $token->plainTextToken;
        $user->save();

        return redirect()->route('users.show',$user->id)->with('success','Token generado y guardado con exito');
    }
}
