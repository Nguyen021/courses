@extends('layouts.app')

@section('title','This is blade template')

@section('content')
<div>
    @if(count($tasks))
        @foreach($tasks as $task)
            <div>
               <a href="{{ route('task.show',['id'=>$task->id ]) }}"> {{ $task->title}}</a>
            </div>
        @endforeach
    @else
        <div>There are no task</div>
    @endif
</div>
 
<div>
    @forelse($tasks as $task)
        <div>{{ $task->title}}</div>
        @empty
        <div>Empty</div>
    @endforelse
</div>
@endsection