@extends('layouts.public.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movies.movie-cart :movie="$movie" :genres="$genres"/>
                @endforeach
            </div>
        </div> <!-- End popular movies -->

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now playing movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movies.movie-cart :movie="$movie"/>
                @endforeach
            </div>
        </div> <!-- End now playing movies -->
    </div>
    <script>
			// const favoriteModal = () => {
			// 	const showFavoriteUser = document.querySelectorAll('#favoriteOpenModal');
			// 	const showFavoriteUserModal = document.querySelectorAll('#favoriteModal');
            //
			// 	showFavoriteUser.forEach((user, i) => {
			// 		user.addEventListener('click', () => {
			// 			showFavoriteUserModal[i].classList.remove('hidden');
			// 		});
			// 	});
			// }
			// favoriteModal();
    </script>
@endsection