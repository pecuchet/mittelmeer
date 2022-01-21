@php
    $manifest = json_decode(file_get_contents(base_path('public/mix-manifest.json')), true);
    $config = [
        'appName' => config('app.name'),
        'appVersion' => config('app.version'),
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mittelmeer</title>
    <meta name="google" value="notranslate">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="{{ $manifest['/index.css'] }}">
</head>
<body>
<div id="app"></div>
<script>window.mittelmeer = @json($config);</script>
<script src="{{ $manifest['/index.js'] }}"></script>
</body>
</html>
