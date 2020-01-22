@extends('layouts.layout')

@section('title', 'Brands SHOW')

@section('content')
    <div class="row bg-dark">
        <table>
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
                <td><a>{{ $brand->name }}</a></td>
                <td><a href="{{ route('brands.edit', ['brand' => $brand]) }}">Edit</a></td>
                <td><form action={{ route('brands.destroy', ['brand' => $brand]) }} method="POST">
                        @csrf
                        @method('DELETE')
                        <input type='hidden' name='id' value="{{$brand->id}}">
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
                <td>
                    <form action="{{ route('models.index') }}" method="get">
                        <input type="hidden" name="search2" value="true" />
                        <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                        <input type="submit" value="Get Models" />
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
