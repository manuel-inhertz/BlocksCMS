@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('post.update', $post->alias) }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-row">
                           <div class="form-group col-md-6">
                                <label for="title">{{ __('Title') }}</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $post->title }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="form-group col-md-6">
                                <label for="alias">{{ __('Alias') }}</label>
                                <input id="alias" type="text" class="form-control @error('alias') is-invalid @enderror" name="alias" value="{{ old('alias') ?? $post->alias }}" required autocomplete="alias">
    
                                @error('alias')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                    <label for="content" class="">{{ __('Content') }}</label>
                                    {{--<textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" style="height: 250px;" required>
                                        {{ old('content') ?? $post->content }}   
                                    </textarea>--}}
                                    <div id="flexible-content" data-content="{{ old('content') ?? $post->content }}"></div>
        
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="image">{{ __('Featured image') }}</label>
                                    <input type="file" name="image" id="image" class="form-control-file" accept="image/*" value="{{ old('image') ?? $post->image }}">
        
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <div class="image-preview">
                                    <img src="#" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="text-center col-lg-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection