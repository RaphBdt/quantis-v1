<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScenarioFormRequest;
use App\Models\Scenario;
use Illuminate\Http\Request;

class ScenarioController extends Controller
{
    public function index()
    {
        return view('scenario.index', [
            'scenarios' => Scenario::orderBy('favorite')
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
        return to_route('scenarios.index')->with('success', 'The scenario has been created');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
