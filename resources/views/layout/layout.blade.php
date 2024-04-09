<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="{{ $isForm ? 'tw-bg-n100' : 'tw-bg-n200' }} scroll selection:tw-bg-b500 selection:tw-text-n100">

    @include('layout.nav')

    @yield('content')
    

</body>

</html>
