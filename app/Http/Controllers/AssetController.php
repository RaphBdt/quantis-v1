<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetFormRequest;
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

    public function store(AssetFormRequest $request, Scenario $scenario)
    {
        Asset::create($request->validated());

        return to_route('scenarios.show', ['scenario' => $scenario])->with('success', 'The asset was successfully created');
    }

    public function edit(Asset $asset, Scenario $scenario)
    {
        return view('asset.form', [
            'scenario' => $scenario,
            'asset' => $asset,
        ]);
    }

    public function update(AssetFormRequest $request, Asset $asset)
    {
        $asset->update($request->validated());

        return to_route('scenarios.show', ['scenario' => $asset])->with('success', 'The asset was successfully updated');
    }
}
