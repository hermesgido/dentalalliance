@php($pageTitle = $program->exists ? 'Edit Program' : 'Create Program')
@include('admin.partials.shell-start')

<div class="admin-card">
    <h1 class="admin-heading">{{ $program->exists ? 'Edit Program' : 'Create Program' }}</h1>
    <p class="admin-copy">Programs act as containers for modules. Visitors will always open the modules list first.</p>

    <form method="POST" action="{{ $program->exists ? route('admin.programs.update', $program) : route('admin.programs.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($program->exists)
            @method('PUT')
        @endif

        <input type="hidden" name="has_modules" value="1">

        <div class="admin-grid admin-grid-2" style="margin-top: 24px;">
            <div class="admin-field">
                <label for="title">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title', $program->title) }}" required data-title-source>
            </div>
            <div class="admin-field">
                <label for="slug">Slug</label>
                <input id="slug" name="slug" type="text" value="{{ old('slug', $program->slug) }}" data-slug-target data-autofill-enabled="{{ $program->exists ? 'false' : 'true' }}">
                <span class="admin-help">Leave blank to auto-generate from the title.</span>
            </div>
            <div class="admin-field">
                <label for="category">Category</label>
                <select id="category" name="category">
                    @foreach (['advanced-clinical-training', 'conferences-flagship-events', 'custom-institutional-training'] as $category)
                        <option value="{{ $category }}" @selected(old('category', $program->category) === $category)>{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="admin-field">
                <label for="cover_image_upload">Cover Image</label>
                <input id="cover_image_upload" name="cover_image_upload" type="file" accept="image/*">
                <span class="admin-help">Upload a program image for cards and banners. The hero will keep the fixed tone styling.</span>
                @if ($program->cover_image)
                    <div style="margin-top: 12px;">
                        <img src="{{ asset($program->cover_image) }}" alt="{{ $program->title }}" style="width: 180px; height: 120px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0;">
                    </div>
                @endif
            </div>
            <div class="admin-field">
                <label for="hero_title">Hero Title</label>
                <input id="hero_title" name="hero_title" type="text" value="{{ old('hero_title', $program->hero_title) }}" data-title-mirror data-autofill-enabled="{{ $program->exists ? 'false' : 'true' }}">
            </div>
            <div class="admin-field">
                <label for="summary">Summary</label>
                <input id="summary" name="summary" type="text" value="{{ old('summary', $program->summary) }}" data-title-mirror data-autofill-enabled="{{ $program->exists ? 'false' : 'true' }}">
            </div>
            <div class="admin-field">
                <label for="start_at">Start At</label>
                <input id="start_at" name="start_at" type="datetime-local" value="{{ old('start_at', optional($program->start_at)->format('Y-m-d\TH:i')) }}">
            </div>
            <div class="admin-field">
                <label for="end_at">End At</label>
                <input id="end_at" name="end_at" type="datetime-local" value="{{ old('end_at', optional($program->end_at)->format('Y-m-d\TH:i')) }}">
            </div>
            <div class="admin-field">
                <label for="location_name">Location Name</label>
                <input id="location_name" name="location_name" type="text" value="{{ old('location_name', $program->location_name) }}">
            </div>
            <div class="admin-field">
                <label for="location_address">Location Address</label>
                <input id="location_address" name="location_address" type="text" value="{{ old('location_address', $program->location_address) }}">
            </div>
            <div class="admin-field">
                <label for="map_url">Map URL</label>
                <input id="map_url" name="map_url" type="text" value="{{ old('map_url', $program->map_url) }}">
            </div>
            <div class="admin-field">
                <label for="sort_order">Sort Order</label>
                <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $program->sort_order ?? 0) }}">
            </div>
        </div>

        <div class="admin-grid admin-grid-3" style="margin-top: 18px;">
            <label class="admin-field"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', $program->is_active)) style="width: auto; margin-right: 8px;"> Program is active</label>
        </div>

        <div class="admin-actions">
            <button type="submit" class="admin-btn">{{ $program->exists ? 'Save Changes' : 'Create Program' }}</button>
            <a href="{{ route('admin.programs.index') }}" class="admin-btn secondary">Back</a>
        </div>
    </form>
</div>

@include('admin.partials.shell-end')
