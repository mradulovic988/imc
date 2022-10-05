@extends('layouts.public.main')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular actors
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <div class="actors mt-8">
                        <a href="#">
                            <img src="https://image.tmdb.org/t/p/w470_and_h470_face//vkoSSVrGxFYvtr2uUdz99ENXF1v.jpg" alt="profile image"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#"
                               class="text-lg hover:text-gray-300">Ana de Armas</a>
                            <div class="text-sm truncate text-gray-400">Blade Runner 2049, Knives Out, War Dogs</div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="page-load-status">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
            </div>
            <p class="infinite-scroll-last">End of content</p>
            <p class="infinite-scroll-error">No more pages to load</p>
        </div><!-- End popular actors -->

        {{-- <div class="flex justify-between mt-16">
            @if ($previous)
                <a href="/actors/page/{{ $previous }}">Previous</a>
            @else
                <div></div>
            @endif

            @if ($next)
                <a href="/actors/page/{{ $next }}">Next</a>
            @else
                <div></div>
            @endif
        </div> --}}

    </div>
@endsection

@section('scripts')
{{--    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>--}}

{{--    <script>--}}
{{--			let elem = document.querySelector('.grid');--}}
{{--			let infScroll = new InfiniteScroll(elem, {--}}
{{--				path: '/actors/page/@{{#}}',--}}
{{--				append: '.actors',--}}
{{--				status: '.page-load-status'--}}
{{--			});--}}
{{--    </script>--}}
@endsection
