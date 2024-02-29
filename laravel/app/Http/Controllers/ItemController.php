<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Http\Response;// Assuming you have an Item model

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all items
        $items = ItemResource::collection(Item::all());
        return response()->json($items, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new item
        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a single item
        $item = Item::findOrFail($id);
        return response()->json(new ItemResource($item), Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the item
        $item = Item::findOrFail($id);

        // Update the item
        $item->update($request->all());

        return response()->json($item, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the item and delete it
        $item = Item::findOrFail($id);
        $item->delete();
        return response()->json(null, 204);
    }
}
