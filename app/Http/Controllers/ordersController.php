<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function index()
    {
        $orders = orders::all ();
        return response() ->json($orders);
    }

    public function show($id)
    {
        $orders = orders::find ($id);
        return response() ->json($orders);
    }

    public function store(Request $request)
    {
        $orders = orders::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $orders = orders::find ($id);
        $orders->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $orders = orders::find ($id);
        $orders->delete();
        return response() ->json("Berhasil Dihapus");
    }

}