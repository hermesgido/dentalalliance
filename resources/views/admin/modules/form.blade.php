@php($pageTitle = $module->exists ? 'Edit Module' : 'Create Module')
@include('admin.partials.shell-start')

<div class="admin-card">
    <h1 class="admin-heading">{{ $module->exists ? 'Edit Module' : 'Create Module' }}</h1>
    <p class="admin-copy">Program: {{ $program->title }}</p>

    <form method="POST" action="{{ $module->exists ? route('admin.programs.modules.update', [$program, $module]) : route('admin.programs.modules.store', $program) }}" enctype="multipart/form-data">
        @csrf
        @if ($module->exists)
            @method('PUT')
        @endif

        <div class="admin-grid admin-grid-2" style="margin-top: 24px;">
            <div class="admin-field">
                <label for="title">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title', $module->title) }}" required data-title-source>
            </div>
            <div class="admin-field">
                <label for="slug">Slug</label>
                <input id="slug" name="slug" type="text" value="{{ old('slug', $module->slug) }}" data-slug-target data-autofill-enabled="{{ $module->exists ? 'false' : 'true' }}">
                <span class="admin-help">Leave blank to auto-generate from the title.</span>
            </div>
            <div class="admin-field">
                <label for="cover_image_upload">Cover Image</label>
                <input id="cover_image_upload" name="cover_image_upload" type="file" accept="image/*">
                <span class="admin-help">Upload a module image for cards and banners. The hero keeps the fixed tone styling.</span>
                @if ($module->cover_image)
                    <div style="margin-top: 12px;">
                        <img src="{{ asset($module->cover_image) }}" alt="{{ $module->title }}" style="width: 180px; height: 120px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0;">
                    </div>
                @endif
            </div>
            <div class="admin-field">
                <label for="hero_title">Hero Title</label>
                <input id="hero_title" name="hero_title" type="text" value="{{ old('hero_title', $module->hero_title) }}" data-title-mirror data-autofill-enabled="{{ $module->exists ? 'false' : 'true' }}">
            </div>
            <div class="admin-field">
                <label for="summary">Summary</label>
                <input id="summary" name="summary" type="text" value="{{ old('summary', $module->summary) }}" data-title-mirror data-autofill-enabled="{{ $module->exists ? 'false' : 'true' }}">
            </div>
            <div class="admin-field">
                <label for="status_label">Status Label</label>
                <input id="status_label" name="status_label" type="text" value="{{ old('status_label', $module->status_label) }}">
            </div>
            <div class="admin-field">
                <label for="status_style">Status Style</label>
                <select id="status_style" name="status_style">
                    @foreach (['rsvp', 'going'] as $statusStyle)
                        <option value="{{ $statusStyle }}" @selected(old('status_style', $module->status_style) === $statusStyle)>{{ $statusStyle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="admin-field">
                <label for="sort_order">Sort Order</label>
                <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $module->sort_order ?? 0) }}">
            </div>
            <div class="admin-field">
                <label for="start_at">Start At</label>
                <input id="start_at" name="start_at" type="datetime-local" value="{{ old('start_at', optional($module->start_at)->format('Y-m-d\TH:i')) }}">
            </div>
            <div class="admin-field">
                <label for="end_at">End At</label>
                <input id="end_at" name="end_at" type="datetime-local" value="{{ old('end_at', optional($module->end_at)->format('Y-m-d\TH:i')) }}">
            </div>
            <div class="admin-field">
                <label for="location_name">Location Name</label>
                <input id="location_name" name="location_name" type="text" value="{{ old('location_name', $module->location_name) }}">
            </div>
            <div class="admin-field">
                <label for="location_address">Location Address</label>
                <input id="location_address" name="location_address" type="text" value="{{ old('location_address', $module->location_address) }}">
            </div>
            <div class="admin-field">
                <label for="map_url">Map URL</label>
                <input id="map_url" name="map_url" type="text" value="{{ old('map_url', $module->map_url) }}">
            </div>
        </div>

        <div class="admin-grid" style="margin-top: 18px;">
            @include('admin.partials.rich-editor', [
                'label' => 'Flexible Module Content',
                'name' => 'content_html',
                'value' => $module->content_html,
                'fieldId' => 'module_content_html',
                'help' => 'This becomes the main module detail content. Use it to build richer layouts with text, links, images, and CTA buttons.',
            ])
        </div>

        <div class="admin-grid admin-grid-3" style="margin-top: 18px;">
            <label class="admin-field"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', $module->is_active)) style="width: auto; margin-right: 8px;"> Module is active</label>
            <label class="admin-field"><input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $module->is_featured)) style="width: auto; margin-right: 8px;"> Feature this module on top</label>
        </div>

        <div class="admin-actions">
            <button type="submit" class="admin-btn">{{ $module->exists ? 'Save Changes' : 'Create Module' }}</button>
            <a href="{{ route('admin.programs.modules.index', $program) }}" class="admin-btn secondary">Back</a>
        </div>
    </form>
</div>

@include('admin.partials.shell-end')
