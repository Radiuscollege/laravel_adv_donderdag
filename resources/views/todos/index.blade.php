@extends('layouts.base')

@section('content')
    <div class="todo-items balloon container with-title">
        <h2 class="title">Todo items</h2>
        <div class="messages">
            @foreach($todos as $todo)
                <div class="message -left">
                    <i class="bcrikko"></i>
                    <div class="balloon from-left">
                        <p>{{ $todo->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection