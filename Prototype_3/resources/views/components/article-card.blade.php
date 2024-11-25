<div class="card h-100 shadow-sm">
    <div class="card-body">
        <h3 class="card-title h5">{{ $article['title'] }}</h3>
        <p class="card-text text-truncate">{{ $article['content'] }}</p>
            @auth
                <form action="/articles/{{$article['id']}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                </form>
            @endauth
    </div>
</div>
