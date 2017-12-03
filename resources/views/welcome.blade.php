@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Activisme_BE,</h1>
            <p class="lead">
                Een klein collectief. Dat opkomten voor Daklozen, Vluchtelingen, Ook zetten wij in voor wereldvrede en andere sociale punten.
            </p>
            <hr class="my-4">
            <p class="lead">
                <a class="btn br-card btn-primary btn-lg" href="#" role="button">
                    <i class="fa fa-info-circle"></i> Onze visie
                </a>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8"> {{-- Content --}}
                <div class="card br-card card-shadow mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn br-card btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>
            </div> {{-- /END content --}}

            <div class="col-4"> {{-- Sidebar --}}
                <div class="card card-shadow br-card">
                    <div class="card-header">Nieuwsbrief</div>

                    <div class="card-body">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control br-card" placeholder="uw email adres">
                                <span class="input-group-btn">
                                    <button class="btn br-card btn-secondary" type="button">Inschrijven</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card my-4 card-shadow br-card">
                    <h5 class="card-header">Categorieen</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card br-card card-shadow my-4">
                    <h5 class="card-header">Kalender</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>

                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> {{-- /END sidebar --}}
        </div>
    </div>
@endsection