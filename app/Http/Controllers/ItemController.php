<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use PhpParser\Node\Expr\Cast\Double;

class ItemController extends Controller
{
    public function itemPage()
    {
        return view('item');
    }

    public function saveItem(Request $request)
    {
        $item = new Item;

        $item->item_code = $request->itemCode;
        $item->item_name = $request->itemName;
        $item->item_descript = $request->itemDescript;
        //dump($request->itemPrice);
        //print_r($request->itemPrice);
        //die();
        //Test Comment
        $item->item_price = doubleval($request->itemPrice);
        $item->cur_quantity = intval($request->curQuantity);
        $item->ro_level = intval($request->roLevel);
        $item->save();

        return redirect()->back()->with('success', 'Record saved successfully!');
    }
}

