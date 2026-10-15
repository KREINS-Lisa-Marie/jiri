@php(
    $currentRoute = Route::currentRouteName()
)
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
          content="Jiri, Evaluateur, Evalué, Evaluation, Projets">
    <meta name="author" content="Lisa-Marie Kreins">
    <meta name="description" content="La page de Jiri">
    <title>{{ $title ?? 'Jiri' }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="#dashboard-top">
@if( !str_starts_with($currentRoute, 'auth.'))
    <x-sidebar></x-sidebar>
@else
    <x-navigation></x-navigation>
@endif



{{$slot}}

</body>
</html>
