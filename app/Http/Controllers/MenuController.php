<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Auth::user()->merchantProfile->menus;

        return view('merchant.menu.menus', compact('menus'));
    }

    public function create()
    {
        return view('merchant.menu.create-menu');
    }

    public function store(MenuRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['merchant_id'] = Auth::user()->merchantProfile->id;


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menu_images');
            $validatedData['image'] = $path;
        }

        Auth::user()->merchantProfile->menus()->create($validatedData);

        return redirect()->route('merchant.menus')->with('success', 'Menu ditambahkan');
    }

    public function edit(Menu $menu)
    {
        return view('merchant.menu.edit-menu', compact('menu'));
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            if ($menu->image) {
                Storage::delete($menu->image);
            }
            $path = $request->file('image')->store('menu_images');
            $validatedData['image'] = $path;
        }

        $menu->update($validatedData);

        return redirect()->route('merchant.menus')->with('success', 'Menu diperbarui');
    }


    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('merchant.menus')->with('success', 'Menu dihapus');
    }
}
