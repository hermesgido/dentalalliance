<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProgramController extends Controller
{
    public function index(): View
    {
        $programs = Program::query()
            ->where('is_active', true)
            ->withCount([
                'modules as active_modules_count' => fn ($query) => $query->where('is_active', true),
            ])
            ->orderBy('sort_order')
            ->orderBy('title')
            ->get();

        $categoryLabels = [
            'advanced-clinical-training' => 'Advanced Clinical Training',
            'conferences-flagship-events' => 'Conferences & Flagship Events',
            'custom-institutional-training' => 'Custom & Institutional Training',
        ];

        $programCategories = collect($categoryLabels)
            ->map(function (string $label, string $key) use ($programs): array {
                $items = $programs->where('category', $key)->values();

                return [
                    'key' => $key,
                    'title' => $label,
                    'description' => match ($key) {
                        'advanced-clinical-training' => 'Specialized CPD-focused learning tracks for modern clinical excellence.',
                        'conferences-flagship-events' => 'High-level platforms connecting industry, academia, and clinical leadership.',
                        default => 'Tailored capacity-building pathways for institutions and partners.',
                    },
                    'items' => $items,
                ];
            })
            ->filter(fn (array $category): bool => $category['items']->isNotEmpty())
            ->values();

        return view('programs', [
            'programCategories' => $programCategories,
        ]);
    }

    public function show(Program $program): View|RedirectResponse
    {
        abort_unless($program->is_active, 404);

        return redirect()->route('programs.modules.index', ['program' => $program]);
    }

    public function modules(Program $program): View
    {
        abort_unless($program->is_active, 404);

        $allModules = $program->modules()
            ->where('is_active', true)
            ->get();

        $featuredModules = $allModules
            ->where('is_featured', true)
            ->values();

        $modules = $allModules
            ->where('is_featured', false)
            ->groupBy(fn ($module) => optional($module->start_at)->format('F Y') ?: 'Upcoming');

        return view('program-modules', [
            'program' => $program,
            'featuredModules' => $featuredModules,
            'modulesByMonth' => $modules,
        ]);
    }
}
