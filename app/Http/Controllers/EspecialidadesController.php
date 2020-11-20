<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    public function home()
    {
        return view('pages.especialidades.home');
    }

    public function especialidade($id)
    {
        return view('pages.especialidades.especialidade');
    }
}
