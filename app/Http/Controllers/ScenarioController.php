<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScenarioFormRequest;
use App\Models\Scenario;

class ScenarioController extends Controller
{
    public function index()
    {
        return view('scenario.index', [
            'scenarios' => Scenario::orderBy('favorite', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(12),
        ]);
    }

    public function create()
    {
        return view('scenario.form', [
            'scenario' => new Scenario(),
        ]);
    }

    public function store(ScenarioFormRequest $request)
    {
        Scenario::create($request->validated());
        
        return to_route('scenarios.index')->with('success', 'The scenario was successfully created');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Scenario $scenario)
    {
        return view('scenario.form', [
            'scenario' => $scenario,
        ]);
    }

    public function update(ScenarioFormRequest $request, Scenario $scenario)
    {
        $scenario->update($request->validated());
        return to_route('scenarios.index')->with('success', 'The scenario was successfully updated');
    }

    public function destroy(Scenario $scenario)
    {
        $scenario->delete();
        return to_route('scenarios.index')->with('success', 'The scenario was successfully deleted');
    }
}
