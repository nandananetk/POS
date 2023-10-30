<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';

    protected $fillable = [
        'item_code',
        'item_name',
        'item_descript',
        'item_price',
        'cur_quantity',
        'ro_level',
        'updated_date',
        'updated_user',
    ];
}
