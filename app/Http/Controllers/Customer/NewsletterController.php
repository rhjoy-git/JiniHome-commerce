<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // ✅ Validate email
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        // ✅ Save email into database (example)
        DB::table('newsletter_subscribers')->insert([
            'email' => $request->email,
            'created_at' => now(),
        ]);

        // ✅ Redirect with success message
        return back()->with('success', 'Thanks for subscribing!');
    }
}
