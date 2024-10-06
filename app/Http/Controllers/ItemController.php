<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = Item::get();
        return view("item_index", compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("item_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Item::create([
            "shop_id" => Auth::id(),
            "name" => $request->name,
            "price" => $request->price
        ]);
        return redirect(route("item_create"))->with(["message" => "商品登録が完了しました"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = Item::find($id);
        return view("item_edit", compact("item"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $item = Item::find($id);
        $item->update([
            "name" => $request->name,
            "price" => $request->price
        ]);
        return redirect(route("item_edit", ["id" => $item->id]))->with(["message" => "編集が完了しました"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = Item::find($id);
        $item->delete();
        return redirect(route("item_index"));
    }
}
