<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{

    public function index()
    {
        return Estado::all();
    }

    public function store(Request $request)
    {
        Estado::create($request->all());
    }

    public function show($id)
    {
        return Estado::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);
        $estado->update($request->all());
    }

    public function destroy($id)
    {
        $estado = Estado::findOrFail($id);
        $estado->delete();
    }

}
