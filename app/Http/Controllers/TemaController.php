<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index()
    {
        $tema = Tema::all();
        return $tema;
    }
    public function show($id)
    {
        $tema = Tema::all($id);
        return $tema;
    }
    public function destroy($id)
    {
        Tema::find($id)->delete();
    }

    public function store(Request $request)
    {
        $tema = new Tema();
        $tema->tevekenyseg_id = $request->tevekenyseg_id;
        $tema->osztaly_id = $request->osztaly_id;
        $tema->allapot = $request->allapot;
        $tema->save();
    }

    public function update(Request $request, $id)
    {
        $tema = Tema::find($id);
        $tema->tevekenyseg_id = $request->tevekenyseg_id;
        $tema->osztaly_id = $request->osztaly_id;
        $tema->allapot = $request->allapot;
        $tema->save();
    }

}
