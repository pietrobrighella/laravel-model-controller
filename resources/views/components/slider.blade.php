<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        @foreach ($slider as $key => $slide)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" class="@if($loop->first) active @endif"
                aria-current="true" aria-label="{{ $slide->title }}"></button>
            {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button> --}}
        @endforeach
    </div>

    <div class="carousel-inner">
        <h2>Shuffle > Take(5) > Sort(vote)</h2>
        @foreach ($slider as $key => $slide)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{ $slide->image }}" class="d-block w-100" alt="{{ $slide->title }}">
                <div class="carousel-caption d-none d-md-block bg-black">
                    <h5>{{ $slide->title }} - {{ $slide->vote }}</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
