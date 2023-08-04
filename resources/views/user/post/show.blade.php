<!-- resources/views/posts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>d8191c43-8ec5-48fb-8d7c-805efcb6deeb</h1>
    
    <!-- Display the post content -->

    <!-- Add the Livewire component for comments -->
    @livewire('user.comment.add-comment', ['postId' => 'd8191c43-8ec5-48fb-8d7c-805efcb6deeb'])
@endsection