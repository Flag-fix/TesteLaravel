<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuarios::all();
    }

    public function store(Request $request)
    {
        Usuarios::create($request->all());
    }

    public function show($id)
    {
        return Usuarios::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = Usuarios::findOrFail($id);
        $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = Usuarios::findOrFail($id);
        $user->delete();
    }
}
