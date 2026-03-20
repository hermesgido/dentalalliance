<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\Program;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminProgramController extends Controller
{
    public function index(): View
    {
        return view('admin.programs.index', [
            'programs' => Program::query()->orderBy('sort_order')->orderBy('title')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.programs.form', [
            'program' => new Program([
                'category' => 'advanced-clinical-training',
                'has_modules' => true,
                'is_active' => true,
            ]),
        ]);
    }

    public function store(StoreProgramRequest $request): RedirectResponse
    {
        $data = $request->normalizedData();
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);
        $data['has_modules'] = true;
        $data['cover_image'] = $request->hasFile('cover_image_upload')
            ? $this->storeCoverImage($request->file('cover_image_upload'))
            : $data['cover_image'];

        $program = Program::query()->create($data);

        return redirect()
            ->route('admin.programs.edit', $program)
            ->with('status', 'Program created successfully.');
    }

    public function edit(Program $program): View
    {
        return view('admin.programs.form', [
            'program' => $program,
        ]);
    }

    public function update(UpdateProgramRequest $request, Program $program): RedirectResponse
    {
        $data = $request->normalizedData();
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);
        $data['has_modules'] = true;

        if ($request->hasFile('cover_image_upload')) {
            $data['cover_image'] = $this->storeCoverImage($request->file('cover_image_upload'));
        } else {
            unset($data['cover_image']);
        }

        $program->update($data);

        return redirect()
            ->route('admin.programs.edit', $program)
            ->with('status', 'Program updated successfully.');
    }

    public function destroy(Program $program): RedirectResponse
    {
        $program->delete();

        return redirect()
            ->route('admin.programs.index')
            ->with('status', 'Program deleted successfully.');
    }

    private function storeCoverImage(UploadedFile $file): string
    {
        $filename = now()->format('YmdHis').'-'.Str::random(10).'.'.$file->getClientOriginalExtension();
        $directory = public_path('uploads/programs');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $file->move($directory, $filename);

        return 'uploads/programs/'.$filename;
    }
}
