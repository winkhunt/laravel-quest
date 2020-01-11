@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary">Ask Question</a>
                        </div>
                    </div>
                    @include('layouts._message')
                </div>
                
                <div class="card-body">
                    
                    @foreach ($questions as $question)
                    <div class="media">
                        <div class="d-flex flex-column counters">
                            <div class="vote">
                                <strong>{{ $question->vote }}</strong>{{ str_plural('vote',$question->vote) }}
                            </div>
                            <div class="status {{ $question->status }}">
                                <strong>{{ $question->answer_count }}</strong>{{ str_plural('answer',$question->answer_count) }}
                            </div>
                            <div class="view">
                               {{ $question->view."". str_plural('view',$question->view) }}
                            </div>
                        </div>
                        
                        <div class="media-body">
                            <div class="d-flex align-items-center">
                                <h3 class="mt-0"><a href="{{ $question->url }}">{{ str_limit($question->title,55) }}</a></h3>
                                <div class="ml-auto">

                                    @can('update',$question)
                                        <a href="{{ route('questions.edit',$question->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                                    @endcan
                                    
                                    @can('delete',$question)
                                        <form action="{{ route('questions.destroy',$question->id) }}" method="post" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    @endcan
                                    
                                </div>
                            </div>
                            
                            <p class="lead">
                                Asked by
                                <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                <small class="text-muted">{{ $question->created_date }}</small>
                            </p>
                            {{ str_limit($question->body,150) }}
                        </div>
                    </div>
                    <hr> 
                    @endforeach

                    {{ $questions->links() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
