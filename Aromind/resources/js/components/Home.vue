<template>
    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="/img/ex4.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/img/ex4.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/img/ex4.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
        <div class="row" style="margin-top: 3%;">
            <div class="card" style="width: 18rem; margin-left: 2%;">
                <img src="/img/non.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary1">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-left: 10%;">
                <img src="/img/non.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary1">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-left: 10%;">
                <img src="/img/non.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary1">Go somewhere</a>
                </div>
            </div>
        </div>
        
        <div class="row" style="margin: 3%;">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary1">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary1">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>

<style>
    .btn-primary1 {
        background: rgb(234,119,142);
        /* background: linear-gradient(10deg, rgba(237,153,117,1) 0%, rgba(234,119,142,1) 33%, rgba(234,119,142,1) 83%, rgba(213,119,147,1) 100%); */
        color: white;
    }
</style>
