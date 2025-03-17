<?php

namespace App\Http\Controllers; // Correct namespace

use App\Models\Feature;

class FeatureController extends Controller // Class name matches filename
{
    // app/Http/Controllers/FeatureController.php
    public function index()
    {
        $features = Feature::all(); // Retrieve all records from the database
        return view('features.index', compact('features')); // Pass $features to the view
    }
}