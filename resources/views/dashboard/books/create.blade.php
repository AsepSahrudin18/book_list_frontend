@extends('layouts.app')
@section('content')
<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
    </div>
    @endif
    <form method="POST" action="{{route('books.store')}}">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ISBN</label>
            <input name="isbn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if ($errors->has('isbn'))
            <span class="text-danger">{{ $errors->first('isbn') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">TITLE</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">SUBTITLE</label>
            <input name="subtitle" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @if ($errors->has('subtitle'))
            <span class="text-danger">{{ $errors->first('subtitle') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">AUTHOR</label>
            <input name="author" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if ($errors->has('author'))
            <span class="text-danger">{{ $errors->first('author') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PUBLISHED</label>
            <input name="published" type="date" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @if ($errors->has('published'))
            <span class="text-danger">{{ $errors->first('published') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PUBLISHER</label>
            <input name="publisher" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @if ($errors->has('publisher'))
            <span class="text-danger">{{ $errors->first('publisher') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PAGES</label>
            <input name="pages" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if ($errors->has('pages'))
            <span class="text-danger">{{ $errors->first('pages') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">DESCRIPTION</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">WEBSITE</label>
            <input name="website" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if ($errors->has('website'))
            <span class="text-danger">{{ $errors->first('website') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection