<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Scenario;

class AssetController extends Controller
{
    public function create(Scenario $scenario)
    {
        return view('asset.form', [
            'scenario' => $scenario,
            'asset' => new Asset(),
        ]);
    }
}
