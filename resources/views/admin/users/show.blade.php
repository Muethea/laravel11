@extends('layouts.app')


@section('content')
<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->

    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-6">{{ $user->name }}</h2>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        
    </div>
</div>
   
@endsection
