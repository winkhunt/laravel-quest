                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" name="title" value="{{ old('title',$question->title) }}">
                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="body">Describe Detail</label>
                           <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" rows="5">{{ old('body',$question->body) }}</textarea>
                           @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                           
                           <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
                        </div>