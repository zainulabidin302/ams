<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RestController extends Controller
{
    public function viewUsers(){
      return response()->json(
        User::all()
      );
    }
}
