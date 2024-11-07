<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('item-master', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item-name' => 'required|string',
            'item-description' => 'nullable|string',
            'item-code' => 'required|integer',
            'barcode' => 'required|string',
            'price' => 'required|numeric',
            'item-status' => 'required|string',
            'item-brand' => 'required|string',
            'item-category' => 'required|string',
            'item-subcategory' => 'required|string',
        ]);

        $item = new Item();
        $item->name = $validatedData['item-name'];
        $item->description = $validatedData['item-description'];
        $item->code = $validatedData['item-code'];
        $item->barcode = $validatedData['barcode'];
        $item->price = $validatedData['price'];
        $item->status = $validatedData['item-status'];
        $item->brand = $validatedData['item-brand'];
        $item->category = $validatedData['item-category'];
        $item->subcategory = $validatedData['item-subcategory'];
        $item->save();

        // Return JSON response with the created item
        return response()->json([
            'success' => true,
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'item-name' => 'required|string',
            'item-description' => 'nullable|string',
            'item-code' => 'required|integer',
            'barcode' => 'required|string',
            'price' => 'required|numeric',
            'item-status' => 'required|string',
            'item-brand' => 'required|string',
            'item-category' => 'required|string',
            'item-subcategory' => 'required|string',
        ]);

        $item = Item::findOrFail($id); // Use findOrFail to handle non-existent items
        $item->name = $validatedData['item-name'];
        $item->description = $validatedData['item-description'];
        $item->code = $validatedData['item-code'];
        $item->barcode = $validatedData['barcode'];
        $item->price = $validatedData['price'];
        $item->status = $validatedData['item-status'];
        $item->brand = $validatedData['item-brand'];
        $item->category = $validatedData['item-category'];
        $item->subcategory = $validatedData['item-subcategory'];
        $item->save();

        return response()->json([
            'success' => true,
            'item' => $item
        ]);
    }

    public function destroy($id)
    {
        // Instead of deleting the item, update its status to delisted
        Item::find($id)->update(['status' => 'delisted']);
        return redirect()->back();
    }

    // public function showSalesModule()
    // {
    //     $items = Item::all(); // Retrieve all items from the database
    //     dd($items); // Dump and die to check if items are retrieved
    //     return view('sales-module', compact('items')); // Pass items to the view
    // }

    public function showSalesModule()
    {
        $items = Item::all(); // Retrieve all items from the database
        return view('sales-module', compact('items')); // Pass items to the view
    }
}
