@extends('layouts.layout')

@section('title' , 'HOME')

@section('content')
    <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="{{route('home')}}" class="mx-3 pb-3 link-category d-block d-md-inline {{isset($categoryIdSelected)? '':'selected-category'}}" >Todas</a>
                    @foreach($categories as $category)
                        <a href="{{route('post.category', $category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline {{(isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category':''}}" >{{$category->name}}</a>
                    @endforeach
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 col-12 justify-content-center mb-5">
                            <div class="card m-auto" style="width: 18rem;">
                                <img class="card-img-top" src="{{asset($post->featured)}}" alt={{$post->name}}>
                                <div class="card-body">
                                    <small class="card-txt-category">Categoría: {{$post->category->name}}</small>
                                    <h5 class="card-title my-2">{{$post->title}}</h5>
                                    <div class="d-card-text">
                                        <p>
                                            {{$post->content}}
                                        </p>
                                    </div>
                                    <a href="{{route('post', $post->id)}}" class="post-link"><b>Leer más</b></a>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <span class="card-txt-author">{{$post->author}}</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="card-txt-date">{{$post->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--<!-- Post 2 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/4.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">YouDevs</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post 3 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/5.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">YouDevs</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>
@endsection
