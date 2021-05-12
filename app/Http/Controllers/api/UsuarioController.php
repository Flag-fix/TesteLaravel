<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuarios::all();
    }

    public function usuarioCidade()
    {
        $users = DB::select('SELECT c.nome, COUNT(u.id) Total
            FROM usuarios u
            INNER JOIN enderecos e ON e.id = u.endereco_id
            INNER JOIN cidades c ON c.id = e.cidade_id
            WHERE e.cidade_id = c.id
            GROUP BY c.nome');

        return $users;
    }
    public function usuarioEstado()
    {
        $users = DB::select('SELECT est.nome, COUNT(u.id) Total
            FROM usuarios u
            INNER JOIN enderecos e ON e.id = u.endereco_id
            INNER JOIN cidades c ON c.id = e.cidade_id
            INNER JOIN estados est ON est.id = c.estado_id
            WHERE c.estado_id = est.id
            GROUP BY est.nome');
        return $users;
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
