@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <h2 class="mb-4">Edit Portofolio</h2>
        @livewire('porto-edit', [
            'porto' => $porto,
        ])
    </div>
@endsection
