<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importa el facade DB correctamente
use App\Providers\Servicio; // Asegúrate de que la ruta al modelo es correcta

// class ServiciosController extends Controller
// {
//     public function index()
//     {
//         $servicios = DB::table('servicios')->get();
//         return view('servicios', compact('servicios'));
//     }

//     public function show($id)
//     {
//         return view('show', [
//             'servicio' => Servicios::find($id)
//         ]);
//     }
// }

