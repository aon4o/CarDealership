@extends('layouts.layout')

@section('title', 'Brands SHOW')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Brand SHOW</h1>
        <table class="table table-hover table-bordered table-striped text-white-50">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->name }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ route('brands.edit', ['brand' => $brand]) }}">Edit</a>
                    <form action={{ route('brands.destroy', ['brand' => $brand]) }} method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <input type='hidden' name='id' value="{{$brand->id}}">
                        <input class="btn btn-danger" type="submit" value="Delete"/>
                    </form>
                    <form action="{{ route('models.index') }}" method="get" style="display: inline-block;">
                        <input type="hidden" name="search2" value="true" />
                        <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                        <input class="btn btn-info" type="submit" value="Get Models" />
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
