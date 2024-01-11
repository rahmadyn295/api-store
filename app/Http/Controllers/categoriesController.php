<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index()
    {
        $categories = categories::all ();
        return response() ->json($categories);
    }

    public function show($id)
    {
        $categories = categories::find ($id);
        return response() ->json($categories);
    }

    public function store(Request $request)
    {
        $categories = categories::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $categories = categories::find ($id);
        $categories->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $categories = categories::find ($id);
        $categories->delete();
        return response() ->json("Berhasil Dihapus");
    }

}