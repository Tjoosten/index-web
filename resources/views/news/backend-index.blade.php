@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @include('flash::message') {{-- Flash session view instance --}}

        <div class="row">
            <div class="col-12">
                <div class="card card-shadow br-card">
                    <div class="card-header">
                        <i class="fa fa-fw fa-newspaper-o"></i> Nieuwsberichten beheer

                        <span class="pull-right">
                            @if (count($messages) > 0)
                                <a href="" class="badge badge-link">
                                    <i class="fa fa-search"></i> Zoek nieuws bericht
                                </a>
                            @endif

                            <a href="#" class="badge badge-link">
                                <i class="fa fa-plus"></i> Nieuw bericht
                            </a>
                        </span>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Status:</th>
                                            <th scope="col">Autheur:</th>
                                            <th scope="col">Titel:</th>
                                            <th colspan="2" scope="col">Toegevoegd op:</th> {{-- colspan="2" is nodig voor de functies --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($messages) > 0)
                                            @foreach ($messages as $message)
                                                <tr scope="row">
                                                    <td><strong>#{{ $message->id }}</strong></td>
                                                    <td> {{-- Status --}}
                                                        @if ($message->is_draft == 'Y')
                                                            <span class="badge badge-success">Gepubliceerd</span>
                                                        @else {{-- Message is published --}}
                                                            <span class="badge badge-warning">Klad versie</span>
                                                        @endif
                                                    </td> {{-- /END status --}}
                                                    <td>{{ $message->author->name }}</td>
                                                    <td>{{ $message->title }}</td>
                                                    <td>{{ $message->created_at->diffForHumans() }}</td>

                                                    <td> {{-- Options --}}
                                                    </td> {{-- /End Options --}}
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr scope="row">
                                                <td colspan="6"><i>(Er zijn nog geen nieuwsberichten toegevoegd.)</i></td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection