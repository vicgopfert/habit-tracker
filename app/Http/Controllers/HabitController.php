<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use App\Http\Requests\HabitRequest;
use Illuminate\Contracts\View\View;

class HabitController extends Controller
{
    public function create(): View
    {
        return view('habit.create');
    }

    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        auth()->user()->habits()->create($validated);

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito criado com sucesso!');
    }

    public function edit(Habit $habit)
    {
        //
    }

    public function update(Request $request, Habit $habit)
    {
        //
    }

    public function destroy(Habit $habit)
    {
        if ($habit->user_id !== auth()->user()->id) {
            return redirect()
                ->route('site.dashboard')
                ->with('error', 'Você não tem permissão para apagar este hábito!');
        }

        $habit->delete();

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito apagado com sucesso!');
    }
}
