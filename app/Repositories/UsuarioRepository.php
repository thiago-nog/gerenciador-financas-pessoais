<?php

namespace App\Repositories;

use App\Models\Usuario;
use App\Repositories\Interfaces\UsuarioRepositoryInterface;

class UsuarioRepository implements UsuarioRepositoryInterface
{

    public function index()
    {
        return Usuario::orderBy('nome', 'asc')->get();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store($data)
    {
        return Usuario::create($data);
    }

    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    public function edit($id)
    {
        return Usuario::findOrFail($id);
    }

    public function update($data, $id): Usuario
    {
        $usuario = Usuario::where('id', $id)->first();
        $usuario->login = $data['login'];
        $usuario->password = $data['password'];

        return $usuario->save();
    }

    public function destroy($id): Usuario
    {
        $usuario = Usuario::findOrFail($id);

        return $usuario->delete();
    }
}
