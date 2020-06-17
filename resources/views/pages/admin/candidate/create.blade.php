@extends('layouts.admin')

@section('candidate-active', 'active')

@section('content')
    <div class="container-fluid">
      <div class="col-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Create New Candidate</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              <form action="{{ route('candidate.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="candidateName">Candidate Name</label>
                  <input type="text" class="form-control" id="candidateName" name="name" placeholder="Enter Candidate Name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label for="motto">Motto</label>
                  <input type="text" class="form-control" id="motto" name="motto" placeholder="Enter Candidate Motto" value="{{old('motto')}}">
                </div>
                <div class="form-group">
                  <label for="vision">Vision</label>
                  <input type="text" class="form-control" id="vision" name="vision" placeholder="Enter Candidate Vision" value="{{old('vision')}}">
                </div>
                <div class="form-group">
                  <label for="mission">Mission</label>
                  <textarea name="mission" id="mission" rows="10" class="d-block w-100 form-control"> {{old('mission')}} </textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection