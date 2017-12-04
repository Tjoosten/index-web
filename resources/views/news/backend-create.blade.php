@extends('layouts.app')

@section('content')
    <div class="container mt-4 mb-4">
        {!! Breadcrumbs::render('news-create') !!}

        <div class="row">
            <div class="col-12">
                {{-- TODO: Style attribute is dirty fix for responsive design. Fix this later. --}}
                <div class="card br-card card-shadow" style="margin-bottom: 1rem;">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="dutch-tab" data-toggle="tab" href="#dutch" role="tab" aria-controls="dutch" aria-selected="false">
                                    <span class="flag-icon flag-icon-nl mr-1"></span> Nederlands
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  id="french-tab" data-toggle="tab" href="#french" role="tab" aria-controls="french" aria-selected="false">
                                    <span class="flag-icon flag-icon-fr mr-1"></span> Frans
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="english-tab" data-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="false">
                                    <span class="flag-icon flag-icon-us"></span> Engels
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dutch" role="tabpanel" aria-labelledby="dutch-tab">
                                {{-- TODO: Create dutch partial --}}
                                @include('news.create.form-dutch')
                            </div>

                            <div class="tab-pane fade" id="french" role="tabpanel" aria-labelledby="french-tab">
                                {{-- TODO: Create french partial --}}
                                @include('naws.create.form-french')
                            </div>

                            <div class="tab-pane fade" id="english" role="tabpanel" aria-labelledby="english-tab">
                                {{-- TODO: Create english partial. --}}
                                @include('news.create.form-english')
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <span class="pull-right">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-check"></i> Opslaan
                            </button>

                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-undo"></i> Annuleren
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection