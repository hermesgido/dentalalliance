<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProgramModuleRequest;
use App\Http\Requests\UpdateProgramModuleRequest;
use App\Models\Program;
use App\Models\ProgramModule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminProgramModuleController extends Controller
{
    public function index(Program $program): View
    {
        return view('admin.modules.index', [
            'program' => $program,
            'modules' => $program->modules()->get(),
        ]);
    }

    public function create(Program $program): View
    {
        return view('admin.modules.form', [
            'program' => $program,
            'module' => new ProgramModule([
                'status_style' => 'rsvp',
                'is_active' => true,
            ]),
        ]);
    }

    public function store(StoreProgramModuleRequest $request, Program $program): RedirectResponse
    {
        $data = $request->normalizedData();
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);
        $data['program_id'] = $program->id;
        $data['cover_image'] = $request->hasFile('cover_image_upload')
            ? $this->storeCoverImage($request->file('cover_image_upload'))
            : $data['cover_image'];

        $module = ProgramModule::query()->create($data);

        return redirect()
            ->route('admin.programs.modules.edit', [$program, $module])
            ->with('status', 'Module created successfully.');
    }

    public function edit(Program $program, ProgramModule $module): View
    {
        abort_unless($module->program_id === $program->id, 404);

        return view('admin.modules.form', [
            'program' => $program,
            'module' => $module,
        ]);
    }

    public function update(UpdateProgramModuleRequest $request, Program $program, ProgramModule $module): RedirectResponse
    {
        abort_unless($module->program_id === $program->id, 404);

        $data = $request->normalizedData();
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);

        if ($request->hasFile('cover_image_upload')) {
            $data['cover_image'] = $this->storeCoverImage($request->file('cover_image_upload'));
        } else {
            unset($data['cover_image']);
        }

        $module->update($data);

        return redirect()
            ->route('admin.programs.modules.edit', [$program, $module])
            ->with('status', 'Module updated successfully.');
    }

    public function destroy(Program $program, ProgramModule $module): RedirectResponse
    {
        abort_unless($module->program_id === $program->id, 404);

        $module->delete();

        return redirect()
            ->route('admin.programs.modules.index', $program)
            ->with('status', 'Module deleted successfully.');
    }

    private function storeCoverImage(UploadedFile $file): string
    {
        $filename = now()->format('YmdHis').'-'.Str::random(10).'.'.$file->getClientOriginalExtension();
        $directory = public_path('uploads/program-modules');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $file->move($directory, $filename);

        return 'uploads/program-modules/'.$filename;
    }
}
