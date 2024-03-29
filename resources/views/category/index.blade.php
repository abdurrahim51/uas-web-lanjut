@extends('layout.be.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>MARKET FRESH</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Aksi</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
