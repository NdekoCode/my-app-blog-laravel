@extends('layouts.layouts')
@section('content')
    @auth
        @if (auth()->user()->id === $post->user_id)
            <div class="d-flex justify-content-end align-items-center mt-3 ">
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary mx-1">Editer l'article</a>
                {!! Form::open(['action' => ['PostsController@destroy', $post->id, 'method' => 'POST']]) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit("Supprimer l'article", ['class' => 'btn btn-danger']) }}
                {!! Form::close() !!}
            </div>
        @endif
    @endauth
    <div class="row g-5 mt-1">
        <div class="col-md-8">
            <article class="blog-post">
                <header>
                    <h2 class="bl   og-post-title">{{ $post->title }}</h2>
                    <p class="blog-post-meta">{{ date('Y-m-d', strtotime($post->created_at)) }} <a
                            href="#">{{ $post->user->name }}</a></p>

                </header>


                <p>{{ $post->body }}</p>
            </article>


            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled">Newer</a>
            </nav>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">A propos</h4>
                    <p class="mb-0">

                        <strong>Autheur: {{ $post->user->name }}<br /></strong>Customize this section to tell your
                        visitors a little
                        bit
                        about your
                        publication, writers, content, or something else entirely. Totally up to you.
                    </p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
