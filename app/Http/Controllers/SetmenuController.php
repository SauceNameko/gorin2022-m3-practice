<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Setmenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $setmenus = Setmenu::get();
        return view("setmenu_index", compact("setmenus"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $items = Item::get();
        return view("setmenu_create", compact("items"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $selectedOptions = $request->item_id;
        // $item = Item::where("name", $request->item_id)->get();
        // dd($selectedOptions);
        foreach ($selectedOptions as $sele) {
            Setmenu::create([
                "shop_id" => Auth::id(),
                "name" => $sele,
            ]);
        }
        return redirect(route("setmenu_create"))->with(["message" => "セットメニューを登録しました"]);
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
        $setmenu = Setmenu::find($id);
        $items = Item::get();
        return view("setmenu_edit", compact("setmenu", "items"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $setmenu = Setmenu::find($id);
        $setmenu->update([
            "name" => $request->name,
            "item_name" => $request->item_name
        ]);
        return redirect(route("setmenu_edit", ["id" => $setmenu->id]))->with(["message" => "編集が完了しました"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $setmenu = Setmenu::find($id);
        $setmenu->delete();
        return redirect(route("setmenu_index"));
    }
}
