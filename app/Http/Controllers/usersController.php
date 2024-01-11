<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index()
    {
        $users = users::all ();
        return response() ->json($users);
    }

    public function show($id)
    {
        $users = users::find ($id);
        return response() ->json($users);
    }

    public function store(Request $request)
    {
        $users = users::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $users = users::find ($id);
        $users->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $users = users::find ($id);
        $users->delete();
        return response() ->json("Berhasil Dihapus");
    }

}