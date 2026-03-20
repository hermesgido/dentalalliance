@php($pageTitle = 'Programs')
@include('admin.partials.shell-start')

<div class="admin-card">
    <div style="display: flex; justify-content: space-between; gap: 16px; align-items: flex-start; flex-wrap: wrap;">
        <div>
            <h1 class="admin-heading">Programs</h1>
            <p class="admin-copy">Create, edit, and delete public programs. Every program opens a modules list for visitors.</p>
        </div>
        <a href="{{ route('admin.programs.create') }}" class="admin-btn">Add Program</a>
    </div>
</div>

<div class="admin-card" style="margin-top: 20px;">
    <table class="admin-table">
        <thead>
            <tr>
                <th>Program</th>
                <th>Category</th>
                <th>Status</th>
                <th>Sort</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($programs as $program)
                <tr>
                    <td>
                        <strong>{{ $program->title }}</strong><br>
                        <span style="color: #667085;">/{{ $program->slug }}</span>
                    </td>
                    <td>{{ $program->category }}</td>
                    <td>
                        <span class="admin-badge">{{ $program->is_active ? 'Active' : 'Hidden' }}</span>
                    </td>
                    <td>{{ $program->sort_order }}</td>
                    <td>
                        <div class="admin-actions" style="margin-top: 0;">
                            <a href="{{ route('admin.programs.edit', $program) }}" class="admin-btn secondary">Edit</a>
                            <a href="{{ route('admin.programs.modules.index', $program) }}" class="admin-btn secondary">Modules</a>
                            <form method="POST" action="{{ route('admin.programs.destroy', $program) }}" onsubmit="return confirm('Delete this program?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="admin-btn danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No programs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@include('admin.partials.shell-end')
