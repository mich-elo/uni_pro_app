<!-- resources/views/search_entry.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Entry</title>
</head>
<body>
    <h1>Search Entry</h1>
    
    <form action="{{ route('search.entry') }}" method="GET">
        <label for="search_query">Search Query:</label><br>
        <input type="text" id="search_query" name="query"><br><br>
        <button type="submit">Search</button>
    </form>

    <!-- Display search results here -->
    @if(isset($results))
        <h2>Search Results</h2>
        @foreach($results as $result)
            <p>{{ $result }}</p>
        @endforeach
    @endif
</body>
</html>
