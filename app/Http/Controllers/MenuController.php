<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuItem;

class MenuController extends Controller
{
    public function navbar()
    {       
        $item = Menu::where('name', '!=', 'admin')
            ->first();
        foreach ($item->menu_items as $i) {
            $data[] = $i->title;
        }

        return response()->json([
            'data' => $data
        ]);        
    }
}
