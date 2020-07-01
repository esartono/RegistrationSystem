<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        if($request->feedback == true){
            \App\User::where('id', auth()->user()->id)->update(['step' => 5]);
        }

        $feedback = $request->only('feedback', 'comment') + ['user_id' => auth()->user()->id];
        Feedback::create($feedback);

        return redirect()->route('home');
    }
}
