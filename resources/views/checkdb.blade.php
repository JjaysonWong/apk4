<!DOCTYPE html>
<html>
<head>
    <title>Check DB</title>
</head>
<body>
    <h1>Game Details</h1>
    @if($game)
        <p>ID: {{ $game->id }}</p>
        <p>Name: {{ $game->name }}</p>
    @else
        <p>No game found with ID = 9</p>
    @endif
</body>
</html>
