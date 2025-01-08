<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Busca todos os projetos no banco
        return view('index', compact('projects')); // Envia para a view
    }
}
