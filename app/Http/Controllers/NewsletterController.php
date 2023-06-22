<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        Subscriber::create([
            'email' => $request->input('email'),
        ]);
        return redirect()->back();
    }
}
