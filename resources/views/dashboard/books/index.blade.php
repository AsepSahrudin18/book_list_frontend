@extends('layouts.app')
@section('content')
@auth
<div class="container pt-3 table-responsive">

    <a class="btn btn-primary p-3" href="{{route('books.create')}}">Add</a>
    <table class="table table-light table-hover bordered">
        <thead>
            @foreach($titles as $tt)
            <th>{{$tt}}</th>
            @endforeach

            @php
            $no = 1;
            @endphp
            @foreach($books as $row)

            <tr>
                <th>{{$no++}}</th>
                <th>{{$row['isbn']}}</th>
                <th>{{$row['title']}}</th>
                <th>{{$row['subtitle']}}</th>
                <th>{{$row['author']}}</th>
                <th>{{$row['published']}}</th>
                <th>{{$row['publisher']}}</th>
                <th>{{$row['pages']}}</th>
                <th>{{$row['description']}}</th>
                <th>{{$row['website']}}</th>
                <th><a class="btn btn-warning p-3" href="{{route('books.show',$row->id)}}">Detail</a></th>
                <th>
                    <form method="POST" action="{{route('books.destroy', $row->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger p-3">Delete</button>
                    </form>
                </th>
                <th>
                    <a class="btn btn-success p-3" href="{{route('books.edit',$row->id)}}">Edit</a>
                </th>
            </tr>
            @endforeach
        </thead>
    </table>
</div>
@endauth
@endsection