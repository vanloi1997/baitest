@extends('layouts.master')

@section('content')
  <section class="section">
          <div class="section-header">
            <h1>Quản Lý Bài Viết</h1>
            <div class="section-header-button">
              <a href="features-post-create.html" class="btn btn-success">Thêm Mới Bài Viết</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Danh Mục Bài Viết</a></div>
              <div class="breadcrumb-item">Tất Cả Bài Viết</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tất Cả Bài Viết</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tbody>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                          <tr>
                            @if (isset($category))
                              @foreach($category as $categories)
                                <td>{{ $categories->id }}</td>
                                <td>{{ $categories->name }}</td>
                                <td><div class="badge badge-success">Active</div></td>
                                <td>
                                  <div>
                                    <a href="#" class="btn btn-primary">Sửa</a>
                                    <a href="#" class="btn btn-danger">Xóa</a>
                                  </div>
                                </td>
                              @endforeach
                            @endif    
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@stop