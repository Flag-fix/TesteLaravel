<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        return Cidade::all();
    }

    public function store(Request $request)
    {
        Cidade::create($request->all());
    }

    public function show($id)
    {
        return Cidade::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->update($request->all());
    }

    public function destroy($id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();
    }
}
