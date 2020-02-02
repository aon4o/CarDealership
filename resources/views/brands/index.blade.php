@extends('layouts.layout')

@section('title', 'Brands INDEX')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Brands</h1>
        <form class="form-inline col-12" action="{{ route('brands.index') }}" method="get">
            <label class="text-white-50 mr-2 mb-2" for="name">Search by name:</label>
            <input class="form-control mb-2 mr-2" id="name" type="text" name="search" placeholder="Name"/>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Search" />
        </form>
        <a class="btn btn-dark btn-outline-light m-2" href="{{ route('brands.create') }}">Create new</a><br>
        <div class="w-100"></div>
        @if($brands->isNotEmpty())
        <div class="m-2">
            <table class="table table-hover table-bordered table-striped text-white-50">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td><a class="btn btn-dark" href="{{ route('brands.show', ['brand' => $brand]) }}">{{ $brand->name }}</a></td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('brands.edit', ['brand' => $brand]) }}">Edit</a>
                            <form action={{ route('brands.destroy', ['brand' => $brand]) }} method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete"/>
                            </form>
                            <form action="{{ route('models.index') }}" method="get" style="display: inline-block;">
                                <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                                <input class="btn btn-info" type="submit" value="Get Models" />
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
            <p>There's nothing to show!</p>
        @endif
    </div>
@endsection

