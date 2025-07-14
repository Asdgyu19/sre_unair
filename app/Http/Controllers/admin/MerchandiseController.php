<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchandise;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchandise = Merchandise::latest()->paginate(12);
        return view('admin.merchandise.index', compact('merchandise'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.merchandise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:available,unavailable',
        ]);

        $merch = new Merchandise();
        $merch->fill($request->except('image'));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('merchandise', 'public');
            $merch->image = 'storage/' . $path;
        }

        $merch->save();

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $merchandise = Merchandise::findOrFail($id);
        return view('admin.merchandise.edit', compact('merchandise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
            'status' => 'required|in:available,unavailable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $merch = Merchandise::findOrFail($id);
        $merch->fill($request->except('image'));

        if ($request->hasFile('image')) {
            if ($merch->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $merch->image));
            }
            $path = $request->file('image')->store('merchandise', 'public');
            $merch->image = 'storage/' . $path;
        }

        $merch->save();

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $merch = Merchandise::findOrFail($id);

        if ($merch->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $merch->image));
        }

        $merch->delete();

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise deleted successfully.');
    }
}
