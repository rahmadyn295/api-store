<?php

namespace App\Http\Controllers;

use App\Models\orderitems;
use Illuminate\Http\Request;

class orderitemsController extends Controller
{
    public function index()
    {
        $orderitems = orderitems::all ();
        return response() ->json($orderitems);
    }

    public function show($id)
    {
        $orderitems = orderitems::find ($id);
        return response() ->json($orderitems);
    }

    public function store(Request $request)
    {
        $orderitems = orderitems::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $orderitems = orderitems::find ($id);
        $orderitems->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $orderitems = orderitems::find ($id);
        $orderitems->delete();
        return response() ->json("Berhasil Dihapus");
    }

}