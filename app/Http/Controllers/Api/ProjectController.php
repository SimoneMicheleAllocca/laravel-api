<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Recupera tutti i progetti dal database

        return response()->json([
            'projects' => $projects
        ]);
    }

    public function show($id)
{
    $project = Project::find($id);
    if (!$project) {
        return response()->json(['message' => 'Project not found'], 404);
    }
    return response()->json($project);
}
}

