<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Todo List</title>
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            font-family: "Inter", "Segoe UI", system-ui, sans-serif;
            margin: 0;
            background: #f3f4f6;
            color: #111827;
        }

        main {
            max-width: 760px;
            margin: 48px auto;
            background: #fff;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.12);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 24px;
        }

        form {
            display: grid;
            gap: 12px;
        }

        .todo-form {
            margin-bottom: 32px;
            padding: 16px;
            border-radius: 12px;
            background: #f9fafb;
        }

        input[type="text"],
        input[type="date"] {
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            font-size: 1rem;
            width: 100%;
        }

        button {
            border: none;
            padding: 10px 16px;
            border-radius: 999px;
            background: #2563eb;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        button.secondary {
            background: #e5e7eb;
            color: #111827;
        }

        .todo-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .todo-details {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .todo-title.completed {
            text-decoration: line-through;
            color: #9ca3af;
        }

        .badge {
            font-size: 0.8rem;
            color: #2563eb;
            background: #dbeafe;
            padding: 4px 10px;
            border-radius: 999px;
        }

        .empty-state {
            padding: 20px;
            border-radius: 12px;
            background: #f3f4f6;
            text-align: center;
            color: #6b7280;
        }
    </style>
</head>
<body>
<main>
    @yield('content')
</main>
</body>
</html>
