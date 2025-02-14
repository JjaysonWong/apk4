{{-- not using at the moment --}}
@foreach ($games as $game)
    <div>
        <a href="{{ route('game.show', $game->slug) }}">
            <img src="{{ asset('storage/' . $game->image) }}" width="100">
            <h3>{{ $game->name }}</h3>
        </a>
    </div>
@endforeach
