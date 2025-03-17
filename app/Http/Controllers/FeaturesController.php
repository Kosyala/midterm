<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;

class FeaturesController extends Controller
{
    public function features() {
        $features = Features::all();
        return view('mvc', compact('features'));
    }
}
