<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $table = "menu_items";

    protected $fillable = [
        'menu_id',
        'title',
        'url',
        'target',
        'icon_class',
        'color',
        'parent_id',
        'order',
        'route',
        'parameters'
    ];
}
