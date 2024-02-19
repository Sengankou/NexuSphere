<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class FeedbackController extends Controller
{
    public function index(): View
    {
        return view('feedbacks', [
            //
        ]);
    }
}
