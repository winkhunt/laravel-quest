@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back To Home</a>
                        </div>
                    </div>
                </div>

                <div class="card-body"> 
                    @include('layouts._message')
                     <form action="{{ route('questions.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" name="title" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="body">Describe Detail</label>
                           <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" rows="5">{{ old('body') }}</textarea>
                           @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                           
                           <button type="submit" class="btn btn-outline-primary btn-lg">Ask Question</button>
                        </div>
                     </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
