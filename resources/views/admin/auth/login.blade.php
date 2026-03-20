<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | DA4EA</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: linear-gradient(180deg, #f8fafc 0%, #eef2f6 100%);
            font-family: Arial, sans-serif;
            color: #0f172a;
            padding: 24px;
        }
        .login-card {
            width: 100%;
            max-width: 460px;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 22px;
            padding: 30px;
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.08);
        }
        input {
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 12px 14px;
            font: inherit;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .field {
            margin-bottom: 18px;
        }
        .btn {
            width: 100%;
            border: 0;
            border-radius: 999px;
            padding: 14px 18px;
            background: #c2a968;
            color: #fff;
            font-weight: 700;
            cursor: pointer;
        }
        .errors {
            margin-bottom: 18px;
            padding: 12px 14px;
            border-radius: 14px;
            background: #fef3f2;
            color: #b42318;
            border: 1px solid #fecdca;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div style="font-size: 13px; text-transform: uppercase; letter-spacing: 0.14em; color: #667085; margin-bottom: 8px;">DA4EA Admin</div>
        <h1 style="margin: 0 0 8px; font-size: 34px;">Sign In</h1>
        <p style="margin: 0 0 24px; color: #475467; line-height: 1.7;">Use an admin account to manage programs and modules.</p>

        @if ($errors->any())
            <div class="errors">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.store') }}">
            @csrf
            <div class="field">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </div>

            <div class="field" style="display: flex; align-items: center; gap: 10px;">
                <input id="remember" name="remember" type="checkbox" value="1" style="width: auto;">
                <label for="remember" style="margin: 0; font-weight: 600;">Remember me</label>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
