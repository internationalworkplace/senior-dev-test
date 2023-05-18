<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CoursePostRequest;
use App\Models\User;

class CourseController extends Controller
{
    public function index()
    {
        $trainers = User::isTrainer()->get();

        return view('create-course', compact('trainers'));
    }

    public function create(CoursePostRequest $request): void
    {
        // Implement the save logic.
    }
}
