<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramModule;
use Illuminate\View\View;

class ProgramModuleController extends Controller
{
    public function show(Program $program, ProgramModule $module): View
    {
        abort_unless(
            $program->is_active
            && $program->has_modules
            && $module->program_id === $program->id
            && $module->is_active,
            404
        );

        return view('program-module-detail', [
            'program' => $program,
            'module' => $module,
        ]);
    }
}
