<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Admin' }} | DA4EA</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/admin-editor.jsx'])
    <style>
        body {
            margin: 0;
            background: #f8fafc;
            color: #0f172a;
            font-family: Arial, sans-serif;
        }
        .admin-shell {
            max-width: 1240px;
            margin: 0 auto;
            padding: 24px;
        }
        .admin-topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 24px;
            padding: 18px 22px;
            border-radius: 18px;
            background: #111827;
            color: #f8fafc;
        }
        .admin-topbar a {
            color: inherit;
            text-decoration: none;
        }
        .admin-nav {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }
        .admin-nav a,
        .admin-nav button {
            border: 1px solid rgba(255, 255, 255, 0.14);
            background: rgba(255, 255, 255, 0.06);
            color: #f8fafc;
            border-radius: 999px;
            padding: 10px 14px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }
        .admin-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.06);
        }
        .admin-heading {
            margin: 0 0 8px;
            font-size: 34px;
            line-height: 1.15;
        }
        .admin-copy {
            margin: 0;
            color: #475467;
            line-height: 1.7;
        }
        .admin-status {
            margin-bottom: 18px;
            padding: 14px 16px;
            border-radius: 14px;
            background: #ecfdf3;
            color: #067647;
            border: 1px solid #abefc6;
        }
        .admin-grid {
            display: grid;
            gap: 18px;
        }
        .admin-grid-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .admin-grid-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
        .admin-field label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .admin-field input,
        .admin-field textarea,
        .admin-field select {
            width: 100%;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 12px 14px;
            font: inherit;
            box-sizing: border-box;
            background: #fff;
        }
        .admin-field textarea {
            min-height: 130px;
            resize: vertical;
        }
        .admin-blocknote-shell {
            border: 1px solid #cbd5e1;
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            min-height: 380px;
        }
        .admin-blocknote-shell .bn-container,
        .admin-blocknote-shell .bn-editor,
        .admin-blocknote-shell .bn-side-menu,
        .admin-blocknote-shell .bn-formatting-toolbar,
        .admin-blocknote-shell [data-color-scheme="light"] {
            background: #fff !important;
            color: #0f172a !important;
        }
        .admin-blocknote-shell .bn-editor {
            min-height: 320px;
        }
        .admin-help {
            display: block;
            margin-top: 6px;
            color: #667085;
            font-size: 13px;
        }
        .admin-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 18px;
        }
        .admin-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            padding: 12px 18px;
            border: 0;
            background: #c2a968;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            cursor: pointer;
        }
        .admin-btn.secondary {
            background: #0f172a;
        }
        .admin-btn.danger {
            background: #b42318;
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
        }
        .admin-table th,
        .admin-table td {
            text-align: left;
            padding: 14px 12px;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: top;
        }
        .admin-table th {
            color: #344054;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }
        .admin-badge {
            display: inline-flex;
            align-items: center;
            border-radius: 999px;
            padding: 6px 10px;
            background: #f2f4f7;
            color: #344054;
            font-size: 13px;
            font-weight: 700;
        }
        .admin-errors {
            margin-bottom: 18px;
            padding: 14px 16px;
            border-radius: 14px;
            background: #fef3f2;
            color: #b42318;
            border: 1px solid #fecdca;
        }
        @media (max-width: 900px) {
            .admin-grid-2,
            .admin-grid-3 {
                grid-template-columns: 1fr;
            }
            .admin-topbar {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="admin-shell">
        <div class="admin-topbar">
            <div>
                <div style="font-size: 13px; text-transform: uppercase; letter-spacing: 0.14em; color: #cbd5e1; margin-bottom: 6px;">DA4EA Admin</div>
                <a href="{{ route('admin.programs.index') }}" style="font-size: 24px; font-weight: 700;">Content Management</a>
            </div>
            <div class="admin-nav">
                <a href="{{ route('admin.programs.index') }}">Programs</a>
                <a href="{{ route('programs.index') }}" target="_blank" rel="noopener">Open Public Site</a>
                <form method="POST" action="{{ route('admin.logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>

        @if (session('status'))
            <div class="admin-status">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="admin-errors">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const titleSource = document.querySelector('[data-title-source]');

                if (!titleSource) {
                    return;
                }

                const slugTarget = document.querySelector('[data-slug-target]');
                const titleMirrors = document.querySelectorAll('[data-title-mirror]');

                const slugify = function (value) {
                    return value
                        .toLowerCase()
                        .trim()
                        .replace(/[^a-z0-9\s-]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                };

                const shouldAutofill = function (element) {
                    return element && element.dataset.autofillEnabled === 'true' && element.dataset.manuallyEdited !== 'true';
                };

                const markManualEdit = function (element) {
                    if (! element || element.dataset.autofillEnabled !== 'true') {
                        return;
                    }

                    element.addEventListener('input', function () {
                        element.dataset.manuallyEdited = 'true';
                    });
                };

                if (slugTarget) {
                    markManualEdit(slugTarget);
                }

                titleMirrors.forEach(function (element) {
                    markManualEdit(element);
                });

                titleSource.addEventListener('input', function () {
                    const titleValue = titleSource.value.trim();

                    if (shouldAutofill(slugTarget)) {
                        slugTarget.value = slugify(titleValue);
                    }

                    titleMirrors.forEach(function (element) {
                        if (shouldAutofill(element)) {
                            element.value = titleValue;
                        }
                    });
                });
            });
        </script>
