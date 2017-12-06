@extends('layouts.app')

@section('content')
    <div class="container my-4">
        {!! Breadcrumbs::render('category-index') !!}
        @include('flash::message') {{-- Flash session storage --}}

        <div class="row">
            <div class="col-12">
                <div class="mb-4 card card-shadow br-card">
                    <div class="card-header">
                        <i class="fa fa-fw fa-tags"></i> Nieuwe categorieen:

                        <span class="pull-right">
                            <a href="{{ route('category.admin.create') }}" class="badge badge-link">
                                <i class="fa fa-plus"></i> Categorie toevoegen
                            </a>
                        </span>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ingevoegd door:</th>
                                    <th scope="col">Naam:</th>
                                    <th colspan="2" scope="col">Beschrijving:</th> {{-- colspan="2" is nodig voor de functies --}}
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($categories) > 0) {{-- There are tags found --}}
                                    @foreach($categories as $category) {{-- Loop through the categories --}}
                                        <tr>
                                            <td><strong>#{{ $category->id }}</strong></td>
                                            <td>{{ $category->author->name }}</td>
                                            <td><span class="badge badge-info">{{ $category->name }}</span></td>
                                            <td>{{ $category->description }}</td>

                                            <td class="text-center"> {{-- Options --}}
                                                <a class="text-muted" href="">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </a>

                                                <a class="text-muted" href="">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </a>

                                                <a class="text-muted" href="{{ route('category.admin.delete', $category) }}">
                                                    <i class="fa fa-fw fa-close"></i>
                                                </a>
                                            </td> {{-- /options --}}
                                        </tr>
                                    @endforeach {{-- /END loop --}}
                                @else {{-- No categories are found in the system.  --}}
                                    <tr>
                                        <td colspan="5"><i>(Er zijn geen categorieen gevonden in het systeem.)</i></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        {{ $categories->render('vendor.pagination.simple-bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection