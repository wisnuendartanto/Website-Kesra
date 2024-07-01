@extends('layout.main')
@section('content')
    @include('partials.navbar_link')
    
    
    <!-- Title-->
    <div id="kegiatan">
        <div class="container pt-5 pb-5 px-3">
            <div class="row">
                <div class="col">
                    <h3 class="text-start mt-0">{{ $category->name }}</h3>
                </div>
                <div class="col">
                    <form action="{{ URL::to('kegiatan/' . $category->slug) }}" method="get">
                        <input type="text" class="form-control float-end w-50" name="search" placeholder="Pencarian"
                            value="{{ request()->input('search') }}">
                    </form>
                </div>
            </div>
        </div>
        <!-- Post-->
        @foreach ($articles as $r)
            <div class="container pb-5">
                <div class="row g-0 bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="{{ asset($r->image) }}" class="w-100" alt="...">
                    </div>
                    <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0">{{ $r->title }}</h5>
                        <p class="text-justify">
                            {{ $r->description }}
                        </p>
                        <a href="{{ URL::to('article/' . $r->slug) }}" class="stretched-link">Baca lebih banyak</a>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-12 d-flex justify-content-center">
            {{ $articles->links() }}
        </div>

@endsection
