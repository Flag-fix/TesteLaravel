<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function index()
    {
        return Endereco::all();
    }

    public function store(Request $request)
    {
        Endereco::create($request->all());
    }

    public function show($id)
    {
        return Endereco::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->update($request->all());
    }

    public function destroy($id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();
    }
}
