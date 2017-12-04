@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        {!! Breadcrumbs::render('news-create') !!}

        <div class="row mb-4">
            <div class="col-12">
                <div class="card br-card card-shadow">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span class="flag-icon flag-icon-nl mr-1"></span> Nederlands
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="flag-icon flag-icon-fr mr-1"></span> Frans
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="flag-icon flag-icon-us"></span> Engels
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection