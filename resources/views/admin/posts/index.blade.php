@extends('admin.layouts.template')

@section('content')

<div class="section-header">
    <h1>DataTables</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Modules</a></div>
      <div class="breadcrumb-item">DataTables</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Posts</h2>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Basic DataTables</h4>
          </div>
         
          <div class="card-body">
            <p style="color: white;text-align: right"><a href="{{ route('post.create')}}" class="btn btn-primary" > Create </a></p>
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>                                 
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>                                 
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>
    
@endsection