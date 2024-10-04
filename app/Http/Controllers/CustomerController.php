<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\MerchantProfile;

class CustomerController extends Controller
{
    public function index()
    {
        $merchants = MerchantProfile::with('menus')->get();

        return view('customer.index', compact('merchants'));
    }

    public function homeCustomer()
    {
        $title = "Home";
        $all_menu = Menu::all();
        $paket_pagi = Menu::where('kategori', 'paket pagi')->get();
        $paket_siang = Menu::where('kategori', 'paket siang')->get();
        $paket_malam = Menu::where('kategori', 'paket malam')->get();
        $paket_single = Menu::where('kategori', 'paket single')->get();
        return view('customer.index', compact('title', 'all_menu', 'paket_pagi', 'paket_siang', 'paket_malam', 'paket_single'));
    }

    public function menuCustomer()
    {
        $title = "Menu";
        $all_menu = Menu::all();
        $paket_pagi = Menu::where('kategori', 'paket pagi')->get();
        $paket_siang = Menu::where('kategori', 'paket siang')->get();
        $paket_malam = Menu::where('kategori', 'paket malam')->get();
        $paket_single = Menu::where('kategori', 'paket single')->get();
        return view('customer.menu.menu', compact('title', 'all_menu', 'paket_pagi', 'paket_siang', 'paket_malam', 'paket_single'));
    }
}
