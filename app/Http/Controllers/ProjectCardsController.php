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
            'project_id' => 'required|integer',
            'title' => 'required|string',
            'image' => 'nullable|string',
            'description' => 'nullable|string',
            'position' => 'nullable|integer',
            'completion_percentage' => 'nullable|string',
            'project_timeline' => 'nullable|string',
        ]);

        $projectCard = ProjectCards::create($validated);

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
            'image' => 'nullable|string',
            'description' => 'nullable|string',
            'position' => 'nullable|integer',
            'completion_percentage' => 'nullable|string',
            'project_timeline' => 'nullable|string',
        ]);

        $projectCard->update($validated);

        return response()->json($projectCard);
    }

    // Delete a specific project card by id
    public function destroy($id)
    {
        $projectCard = ProjectCards::findOrFail($id);
        $projectCard->delete();

        return response()->json(null, 204);
    }
}
