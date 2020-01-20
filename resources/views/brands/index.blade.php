@extends('layouts.layout')

@section('title', 'Brands INDEX')

@section('content')
    <div class="row bg-dark">
        <h1 class="col-12 text-white-50">Brands</h1>
        <form class="col-12" action="{{ route('brands.index') }}" method="get">
            <p class="text-white-50">Search by name:</p><input  type="text" name="search" />
            <input type="submit" value="Search" />
        </form>
        <a class="col" href="{{ route('brands.create') }}">Create new</a><br>
        <div class="w-100"></div>
        @if($brands->isNotEmpty())
            <table>
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
                        <td><a href="{{ route('brands.show', ['brand' => $brand]) }}">{{ $brand->name }}</a></td>
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
                @endforeach
                </tbody>
            </table>
        @else
            <p>There's nothing to show!</p>
        @endif
    </div>
@endsection

