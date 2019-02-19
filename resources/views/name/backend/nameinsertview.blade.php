@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Name</div>

                    <div class="card-body">
                        <form action="{{ url('name/insert') }}" method="post">
                          @if(session('status'))
                            <div class="alert alert-success">
                              {{session('status')}}
                            </div>
                          @endif
                          @if($errors->all())
                            <div class="alert alert-danger">
                              @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                            </div>
                          @endif
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Gender</label>
                                <div class="col-md-6">
                                  <input id="male" type="radio" name="gender" value="1" required>
                                  <label for="male">Male</label>
                                  <input id="female" type="radio" name="gender" value="2" required>
                                  <label for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Origin</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="origin" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">English Meaning</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="english_meaning"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Bangla Meaning</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="bangla_meaning"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Name
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
