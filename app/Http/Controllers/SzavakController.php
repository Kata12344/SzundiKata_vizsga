<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
    public function index()
    {
        $szavak = Szavak::all();
        return $szavak;
    }
    public function show($id)
    {
        $szavak = Szavak::all($id);
        return $szavak;
    }
    public function destroy($id)
    {
        Szavak::find($id)->delete();
    }

    public function store(Request $request)
    {
        $szavak = new Szavak();
        $szavak->tevekenyseg_id = $request->tevekenyseg_id;
        $szavak->osztaly_id = $request->osztaly_id;
        $szavak->allapot = $request->allapot;
        $szavak->save();
    }

    public function update(Request $request, $id)
    {
        $szavak = Szavak::find($id);
        $szavak->tevekenyseg_id = $request->tevekenyseg_id;
        $szavak->osztaly_id = $request->osztaly_id;
        $szavak->allapot = $request->allapot;
        $szavak->save();
    }
    public function minden(){
        $szavak = DB::select("select * 
        from temas t, szavaks sz 
        where sz.temaId = t.id ");
        return $szavak;
    }

}
