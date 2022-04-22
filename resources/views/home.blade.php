@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard {{ auth()->user()->id }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="d-flex justify-content-end">
                            <a href="/posts/create" class="btn btn-primary mt-3">Ajouter un nouvel article</a>
                        </div>
                        <h3>Vos articles</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Titre</th>
                                    <th>Utilisateur</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td class="d-flex justify-content-evenly">
                                            @if (auth()->user()->id === $post->user_id)
                                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Modifier
                                                    l'article</a>
                                                {!! Form::open(['action' => ['PostsController@destroy', $post->id, 'method' => 'POST']]) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit("Supprimer l'article", ['class' => 'btn btn-danger']) }}
                                                {!! Form::close() !!}
                                            @else
                                                <a href="/posts/{{ $post->id }}">Voir l'article</a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-info">Vous n'avez pas encore publier d'article</div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
