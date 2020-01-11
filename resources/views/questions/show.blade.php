@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <div class="row">
                            <div class="col-10"> <h1>{{ $question->title }}</h1></div>
                            <div class="col-2 ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back To Home</a>
                            </div>
                        </div>
                       
                        {{-- <div class="ml-auto align-top">
                            
                        </div> --}}
                    </div>
                </div>

                <div class="card-body"> 
                    {!! $question->body_html !!}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
