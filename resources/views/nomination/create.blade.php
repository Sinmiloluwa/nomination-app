@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Nominate') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('nomination.store')}}">
                        @csrf

                       <div class="form-group row">
                         <label for="" class="col-md-4 col-form-label text-md-right">Category</label>
                         <select class="form-control" name="category" id="" style="width: 50%;">
                         <option class="form-control" style="width: 50%;">Select Your Category</option>
                             @foreach($categories as $category){
                                <option class="form-control" style="width: 50%;">{{$category->name}}</option>
                             }
                           
                           @endforeach
                         </select>
                         @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fullname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname">

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="" type="hidden" class="" name="role_id">

                               
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('LinkedIn') }}</label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" >
                            </div>
                        </div>
                        @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Nominate') }}
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