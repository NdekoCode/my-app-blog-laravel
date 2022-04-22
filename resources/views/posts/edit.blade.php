@extends('layouts.layouts')
@section('content')
    <h1>Modification de l'article</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-floating mb-3">

        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => "Titre de l'article"]) }}
        {{ Form::label('title', 'Titre') }}
        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
    </div>
    <div class="form-floating mb-3">

        {{ Form::textarea('body', $post->body, ['class' => 'form-control','placeholder' => "Contenu de l'article",'rows' => '5','style' => 'height:auto']) }}
        {{ Form::label('body', 'Contenus') }}
        @if ($errors->has('body'))
            <span class="text-danger">{{ $errors->first('body') }}</span>
        @endif
    </div>
    {{-- Pour faire passer la methode de post en PUT --}}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Modifier votre article', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
