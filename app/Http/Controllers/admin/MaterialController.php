<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function store(Request $request, Module $module)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:video,reading,quiz,interactive',
            'content' => 'required|string',
            'duration' => 'nullable|string',
            'order' => 'required|integer|min:1'
        ]);

        $module->materials()->create($validated);
        return back()->with('success', 'Material created successfully');
    }

    public function update(Request $request, Module $module, Material $material)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:video,reading,quiz,interactive',
            'content' => 'required|string',
            'duration' => 'nullable|string',
            'order' => 'required|integer|min:1'
        ]);

        $material->update($validated);
        return back()->with('success', 'Material updated successfully');
    }

    public function destroy(Module $module, Material $material)
    {
        $material->delete();
        return back()->with('success', 'Material deleted successfully');
    }
} 