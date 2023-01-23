@extends('layouts.app')
@section('content')
<div class="container">
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card text-black">
                        <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
                        <img src="https://digilib.pancabudi.ac.id/asset/images/buku/no-cover-book.jpg"
                            class="card-img-top" alt="Apple Computer" />
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title">Book {{$books->id}}</h5>
                                <p class="text-muted mb-4">{{$books->title}}</p>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <span>ISBN </span><span>{{$books->isbn}}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Subtitle</span><span>{{$books->subtitle}}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Author</span><span>{{$books->author}}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Published</span><span>{{$books->published}}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Publisher</span><span>{{$books->publisher}}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Pages</span><span>{{$books->pages}}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Description</span><span>{{$books->description}}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Website</span><span><a href="">{{$books->website}}</a></span>
                                </div>
                            </div>
                            <div class="pt-4"><a class="btn btn-warning" href="{{url('books')}}">Back</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection