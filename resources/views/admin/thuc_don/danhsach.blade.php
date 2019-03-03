@extends('admin.layout.index')
@section('scripts')

@stop
@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Users</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard/basic.html">Admin</a></li>
            <li class="breadcrumb-item"><a href="users.html">Thực đơn</a></li>
            <li class="breadcrumb-item active">Danh sách</li>
        </ol>
        <div class="page-actions">
            <a href="admin/thucdon/them" class="btn btn-primary"><i class="icon-fa icon-fa-plus"></i>Thêm thực đơn</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h6>Danh sách</h6>
                </div>
                <div class="card-body">
                    <table id="default-datatable" class="table table-striped table-bordered" style="width:100%" cellspacing="0"
                          >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @foreach($thucdon as $at)
                                <tr>
                                    <td>{{ $at->id }}</td>
                                    <td>{{ $at->name }}</td>
                                    <td><a href="admin/thucdon/sua/{{$at->id}}" class="btn btn-default btn-sm"><i
                                        class="icon-fa icon-fa-search"></i>Edit</a>
                                      <a href="admin/thucdon/xoa/{{$at->id}}" class="btn btn-default btn-sm"
                                       data-token="ju0AJjtVlV2LnL9lhkK9fOpg7DhuaMFVgR1mifUv" data-delete
                                       data-confirmation="notie"> <i class="icon-fa icon-fa-trash"></i> Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
