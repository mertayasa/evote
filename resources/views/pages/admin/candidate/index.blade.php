@extends('layouts.admin')

@section('candidate-active', 'active')

@section('content')
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <a href="{{ route('candidate.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50 pr-2"></i>New Candidate</a>
    </div>
  </div>

  <div class="col-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Candidate List</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
          <?php 
          $no = 1;  
          ?>
        
          <div class="table-area table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>  
                  <th>Name</th>  
                  <th>Image</th>  
                  <th>Motto</th>  
                  <th>Vision</th>  
                  <th>Mission</th>    
                  <th>Actions</th>    
                </tr>   
              </thead> 
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{ $item->name }}</td>
                  <td> <img src="{{ Storage::url($item->image) }}" alt="" width="100px"></td>
                  <td>{{ $item->motto }}</td>
                  <td>{{ $item->vision }}</td>
                  <td>{{ $item->mission }}</td>
                  <td>
                    <a href="{{ route('candidate.edit', $item->id) }}" class="btn btn-warning">
                      <i class="fas fa-pencil-alt" ></i>
                    </a>
                    <form action="{{ route('candidate.destroy', $item->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @empty
                <h3>Anjay</h3>
                @endforelse
              </tbody>
            </table>
      </div>
    </div>
  </div>
  </div>


@endsection