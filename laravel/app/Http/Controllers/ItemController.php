<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Models\ItemImage;
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

        // Create item images associated with the item
        if ($request->has('image_urls')) {
            $imageUrls = $request->input('image_urls');
            foreach ($imageUrls as $imageUrl) {
                $itemImage = new ItemImage();
                $itemImage->item_id = $item->id;
                $itemImage->image_url = $imageUrl['image_url'];
                $itemImage->save();
            }
        }

        return response()->json(new ItemResource($item), Response::HTTP_CREATED);
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

        // Update the item attributes
        $item->update($request->except('image_urls'));

        // Update item images based on the provided IDs
        if ($request->has('image_urls')) {
            foreach ($request->input('image_urls') as $image) {
                $itemImage = ItemImage::findOrFail($image['id']);
                $itemImage->image_url = $image['image_url'];
                $itemImage->save();
            }
        }

        return response()->json(new ItemResource($item), Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the item and delete it
        $item = Item::findOrFail($id);
        $item->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
