<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Servicio;
class PersonasController extends Controller
{
    public function index(){
        // $persona = [
        //     ['titulo'=>'Anthony'],
        //     ['titulo'=>'Andrea'],
        //     ['titulo'=>'Cesar'],
        //     ['titulo'=>'Juan'],
        // ];
        $persona = DB::table('persona')->get();
        // $persona = Servicio::get();
        return view('persona',compact('persona'));
    }
}
