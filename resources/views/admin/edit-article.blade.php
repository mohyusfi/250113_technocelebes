@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <h2 class="mb-4">Edit Articles</h2>
        {{-- {{ $article }} --}}
        @livewire('edit-article', [
            'article' => $article,
        ])
    </div>
@endsection
