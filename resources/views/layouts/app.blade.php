<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Catatan') - Catatan CRUD</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: system-ui, sans-serif; background: #f4f5f7; color: #222; margin: 0; }
        .wrap { max-width: 860px; margin: 32px auto; padding: 0 16px; }
        .card { background: #fff; border-radius: 10px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        h1 { margin: 0 0 16px; font-size: 1.5rem; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 10px 8px; border-bottom: 1px solid #eee; }
        th { font-size: .85rem; color: #666; }
        .btn { display: inline-block; padding: 7px 14px; border: 0; border-radius: 6px; background: #2563eb; color: #fff; text-decoration: none; font-size: .9rem; cursor: pointer; }
        .btn.gray { background: #6b7280; } .btn.green { background: #16a34a; } .btn.red { background: #dc2626; }
        .bar { display: flex; justify-content: space-between; gap: 8px; margin-bottom: 16px; flex-wrap: wrap; }
        input[type=text], textarea, select { width: 100%; padding: 9px; border: 1px solid #ccc; border-radius: 6px; font: inherit; }
        label { display: block; margin: 12px 0 4px; font-weight: 600; font-size: .9rem; }
        .alert { background: #dcfce7; color: #166534; padding: 10px 14px; border-radius: 6px; margin-bottom: 16px; }
        .error { color: #dc2626; font-size: .85rem; margin-top: 4px; }
        .badge { background: #e0e7ff; color: #3730a3; padding: 2px 8px; border-radius: 99px; font-size: .8rem; }
        form.inline { display: inline; }
        .actions { white-space: nowrap; }
    </style>
</head>
<body>
<div class="wrap">
    <div class="card">
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</div>
</body>
</html>
