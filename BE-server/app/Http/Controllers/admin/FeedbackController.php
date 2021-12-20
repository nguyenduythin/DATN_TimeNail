<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FeedbackController extends Controller
{

    public function index(Request $request)
    {
        return view('admin.page.feedback.feedback-list');
    }
}
