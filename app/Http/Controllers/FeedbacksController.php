<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbacksController extends Controller
{
    public function index()
    {
        return view('feedbacks.index');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:feedbacks',
            'phone_number' => 'required|unique:feedbacks',
        ]);

        Feedback::create($validated);

        return redirect()->route('feedbacks.show');
    }

    public function show()
    {
        $feedbacks = Feedback::orderBy('id', 'desc')->get();

        return view('feedbacks.show')->with(['feedbacks' => $feedbacks]);
    }
}
