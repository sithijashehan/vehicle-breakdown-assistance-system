<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BreakdownRequest;

class BreakdownController extends Controller
{
    // User form page
    public function create()
    {
        return view('breakdown');
    }

    // Save request
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_type' => 'required',
            'problem_description' => 'required',
        ]);

        BreakdownRequest::create([
            'user_id' => 1,
            'mechanic_id' => null,
            'vehicle_type' => $request->vehicle_type,
            'problem_description' => $request->problem_description,
            'latitude' => null,
            'longitude' => null,
            'status' => 'pending'
        ]);

        return back()->with('success', 'Request Sent Successfully');
    }

    // Admin view
    public function index()
    {
        $requests = BreakdownRequest::latest()->get();
        return view('admin.requests', compact('requests'));
    }

    // Update status
    public function updateStatus(Request $request, $id)
    {
        $req = BreakdownRequest::findOrFail($id);

        $req->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Status Updated Successfully');
    }
}