<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top News</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<body>
<div class="container mx-auto mt-5">
    
    <h1 class="text-3xl font-bold mb-5">Search News</h1>

    
    <form method="GET" action="/news">
        <input type="text" name="q" value="{{ $query ?? '' }}" class="border rounded p-2" placeholder="Search for news...">
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Search</button>
    </form>

    <h2 class="text-3xl font-bold mt-5 mb-5">Top News Headlines</h2>

    @if (isset($articles) && count($articles) > 0)
        <ul>
            @foreach ($articles as $article)
                <li class="mb-4">
                    <h3 class="text-xl font-semibold">
                        <a href="{{ $article['url'] }}" target="_blank" class="text-blue-500 hover:underline">
                            {{ $article['title'] }}
                        </a>
                    </h3>
                    <p>{{ $article['description'] }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No news found.</p>
    @endif
</div>



</body>
</html>