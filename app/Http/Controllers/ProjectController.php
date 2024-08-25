<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::all();

        return response()->json([
            'data' => $projects
        ]);
    }
}
