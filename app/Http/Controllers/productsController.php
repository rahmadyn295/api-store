<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index()
    {
        $products = products::all ();
        return response() ->json($products);
    }

    public function show($id)
    {
        $products = products::find ($id);
        return response() ->json($products);
    }

    public function store(Request $request)
    {
        $products = products::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $products = products::find ($id);
        $products->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $products = products::find ($id);
        $products->delete();
        return response() ->json("Berhasil Dihapus");
    }

}