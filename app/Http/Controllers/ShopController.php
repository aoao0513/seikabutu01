<?php

namespace App\Http\Controllers;

use App\Models\Shop
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Shop $shop)
    {
        return $shop->get();
    }
}
