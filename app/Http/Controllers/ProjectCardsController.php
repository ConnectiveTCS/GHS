<?php

namespace App\Http\Controllers;

use App\Models\ProjectCards;
use Illuminate\Http\Request;

class ProjectCardsController extends Controller
{
    // List all project cards
    public function index()
    {
        return response()->json(ProjectCards::all());
    }

    // Create a new project card
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,svg',
            'description' => 'nullable|string',
            'position' => 'nullable|integer',
            'completion_percentage' => 'nullable|string',
            'project_timeline' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('project_cards', 'public');
        }

        $projectCard = ProjectCards::create($validated);
        // Auto-generating project_id same as the primary key id
        $projectCard->update(['project_id' => $projectCard->id]);

        return response()->json($projectCard, 201);
    }

    // Show a specific project card by id
    public function show($id)
    {
        $projectCard = ProjectCards::findOrFail($id);
        return response()->json($projectCard);
    }

    // Update a specific project card by id
    public function update(Request $request, $id)
    {
        $projectCard = ProjectCards::findOrFail($id);

        $validated = $request->validate([
            'project_id' => 'sometimes|required|integer',
            'title' => 'sometimes|required|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,svg',
            'description' => 'nullable|string',
            'position' => 'nullable|integer',
            'completion_percentage' => 'nullable|string',
            'project_timeline' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('project_cards', 'public');
        }

        $projectCard->update($validated);

        return view('club_150.project_card.index', compact('projectCard'));
    }

    // Delete a specific project card by id
    public function destroy($id)
    {
        $projectCard = ProjectCards::findOrFail($id);
        $projectCard->delete();

        return response()->json(null, 204);
    }
}
