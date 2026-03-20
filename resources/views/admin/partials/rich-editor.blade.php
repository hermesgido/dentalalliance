@php
    $fieldId = $fieldId ?? $name;
    $fieldValue = old($name, $value ?? '');
@endphp

<div class="admin-field">
    <label for="{{ $fieldId }}">{{ $label }}</label>
    <div
        class="admin-blocknote-shell"
        data-blocknote-editor
        data-input-id="{{ $fieldId }}"
        data-initial-html="{{ base64_encode($fieldValue) }}"
    ></div>
    <textarea id="{{ $fieldId }}" name="{{ $name }}" hidden>{{ $fieldValue }}</textarea>
    <span class="admin-help">{{ $help ?? 'Best for custom page content. Use the toolbar for formatted text, links, images, and button-style CTAs.' }}</span>
</div>
