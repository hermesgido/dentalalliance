@php($pageTitle = 'Modules')
@include('admin.partials.shell-start')

<div class="admin-card">
    <div style="display: flex; justify-content: space-between; gap: 16px; align-items: flex-start; flex-wrap: wrap;">
        <div>
            <h1 class="admin-heading">{{ $program->title }} Modules</h1>
            <p class="admin-copy">Manage the modules that belong to this program.</p>
        </div>
        <div class="admin-actions" style="margin-top: 0;">
            <a href="{{ route('admin.programs.edit', $program) }}" class="admin-btn secondary">Edit Program</a>
            <a href="{{ route('admin.programs.modules.create', $program) }}" class="admin-btn">Add Module</a>
        </div>
    </div>
</div>

<div class="admin-card" style="margin-top: 20px;">
    <table class="admin-table">
        <thead>
            <tr>
                <th>Module</th>
                <th>Status</th>
                <th>Featured</th>
                <th>Schedule</th>
                <th>Sort</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($modules as $module)
                <tr>
                    <td>
                        <strong>{{ $module->title }}</strong><br>
                        <span style="color: #667085;">/{{ $module->slug }}</span>
                    </td>
                    <td>
                        <span class="admin-badge">{{ $module->status_label ?: 'Open' }}</span>
                    </td>
                    <td>
                        <span class="admin-badge">{{ $module->is_featured ? 'Featured' : 'Standard' }}</span>
                    </td>
                    <td>
                        @if ($module->start_at)
                            {{ $module->start_at->format('M d, Y h:i A') }}
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $module->sort_order }}</td>
                    <td>
                        <div class="admin-actions" style="margin-top: 0;">
                            <a href="{{ route('admin.programs.modules.edit', [$program, $module]) }}" class="admin-btn secondary">Edit</a>
                            <form method="POST" action="{{ route('admin.programs.modules.destroy', [$program, $module]) }}" onsubmit="return confirm('Delete this module?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="admin-btn danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No modules found for this program.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@include('admin.partials.shell-end')
