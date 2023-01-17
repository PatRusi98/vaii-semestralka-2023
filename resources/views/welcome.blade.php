<x-guest-layout>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.png" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/2.png" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/3.png" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Virtual Racing Nation</h5>
                    <p>Czech and Slovak simracing league.</p>
                </div>
            </div>
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

    <div class="featured">
        <div class="pr-small-container">
            <h2>Featured simulators</h2>
            <div class="pr-row">
                <div class="pr-col">
                    <img class="obrazok" src="img/rf2.png" alt="rFactor 2">
                    <h4><a href={{url('/rfactor2')}} data-bs-toggle="modal" data-bs-target="#exampleModal">rFactor 2</a></h4>
                    <p>Endurance Races, Formula 1</p>
                </div>
                <div class="pr-col">
                    <img class="obrazok" src="img/ac.png" alt="assetto corsa">
                    <h4><a href={{url('/ac')}} data-bs-toggle="modal" data-bs-target="#exampleModal">Assetto Corsa</a></h4>
                    <p>Slow Motion Cup, Track Days</p>
                </div>
                <div class="pr-col">
                    <img class="obrazok" src="img/acc.png" alt="ac competizione">
                    <h4><a href={{url('/acc')}} data-bs-toggle="modal" data-bs-target="#exampleModal">Assetto Corsa Competizione</a></h4>
                    <p>GT3 and GT4 Series</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
