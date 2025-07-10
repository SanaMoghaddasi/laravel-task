<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dornica Company</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        /* Header */
        header {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        /* Navbar */
        nav {
            background-color: #4b2885;
            color: white;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
        }

        nav .menu {
            display: flex;
            gap: 15px;
        }

        nav .menu a {
            color: white;
            text-decoration: none;
        }

        nav .menu a:hover {
            text-decoration: underline;
        }

        /* Layout */
        .container {
            display: grid;
            grid-template-columns: 1fr 3fr;
            grid-template-rows: auto 1fr auto;
            gap: 10px;
            min-height: calc(100vh - 38px);
        }

        .header {
            grid-column: 1 / -1;
            background-color: #dee2e6;
            text-align: center;
            padding: 20px;
            font-size: 36px;
        }

        .sidebar {
            background-color: #e9ecef;
            padding: 20px;
            text-align: center;
            display: inline-grid;
            align-content: center;
            font-size: 36px;
        }

        .content {
            background-color: #f8f9fa;
            width: 100%;
            text-align: center;
            display: inline-grid;
            align-content: center;
            font-size: 36px;
        }

        .footer {
            grid-column: 1 / -1;
            background-color: #4b2885;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 36px;
        }
    </style>
</head>

<body>

<!-- Navbar -->
@include('pages.partials.navbar')

<!-- Layout -->
<div class="container">
    @include('pages.partials.header')

    @include('pages.partials.sidebar')

    <main class="content">@yield('content')</main>

    @include('pages.partials.footer')
</div>

</body>
</html>
