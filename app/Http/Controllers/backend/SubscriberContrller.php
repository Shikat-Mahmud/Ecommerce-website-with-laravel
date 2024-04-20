<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SubscriberContrller extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string',
            ]);

            Subscriber::create([
                'email' => $request->input('email')
            ]);

            return redirect()->back()->with('success', 'Subscribed successfully.');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return redirect()->back()->withInput()->with('warning', 'Email already subscribed.');
            } else {
                return redirect()->back()->withInput()->with('error', $e->getMessage());
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
