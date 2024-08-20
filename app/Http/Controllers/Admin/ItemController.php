<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(): \Inertia\Response
    {
        $items = Item::with('categories')->get();
        return Inertia::render('Back/Items/Index', ['items' => $items]);
    }

    public function create(): \Inertia\Response
    {
        $categories = Category::all();
        return Inertia::render('Back/Items/Create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'categories' => 'required|array',
        ]);

        $item = Item::create($request->only('name', 'description', 'price'));
        $item->categories()->sync($request->categories);

        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    public function edit(Item $item): \Inertia\Response
    {
        $categories = Category::all();
        return Inertia::render('Back/Items/Edit', ['item' => $item, 'categories' => $categories]);
    }

    public function update(Request $request, Item $item): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'categories' => 'required|array',
        ]);

        $item->update($request->only('name', 'description', 'price'));
        $item->categories()->sync($request->categories);

        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(Item $item): \Illuminate\Http\RedirectResponse
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
