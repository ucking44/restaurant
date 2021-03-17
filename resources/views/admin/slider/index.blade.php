@extends('layouts.backend.app')

@section('title', 'Slider')

@push('css')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/plugins/jquery-ui/jquery-ui.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Slider</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Master</li>
            <li class="breadcrumb-item active">Slider</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.backend.partials.msg')
                    <a href="{{ route('slider.create') }}" class="btn btn-primary">Create Slider</a>
                        <div class="card">
                            <div class="card-header card-header-primary">
                            <h4 class="card-title "><b>All Slider</b></h4>
                            {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th class="center">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $key => $slider)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $slider->title }}</td>
                                                <td>{{ $slider->sub_title }}</td>
                                                <td>{{ $slider->image }}</td>
                                                <td>{{ $slider->created_at }}</td>
                                                <td>{{ $slider->updated_at }}</td>
                                                <td><a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-info btn-sm"><i class="material-icons">edit</i> </a>

                                                    <form id="delete-form-{{ $slider->id }}" method="POST" action="{{ route('slider.destroy', $slider->id) }}" style="display: none;">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this data?')) {
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $slider->id }}').submit();
                                                    }
                                                    else {
                                                        event.preventDefault();
                                                    }">
                                                    <i class="material-icons">delete</i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- {{ $sliders->links() }} --}}
                            </div>
                        </div>
                        </div>
            </div>
            {{ $sliders->links() }}
        </div>
    </div>
    <!-- /.content -->

@endsection

@push('js')
    <!-- DataTables -->
    <script src="{{ asset('asset/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('asset/plugins/jquery-ui/jquery-ui.js') }}">


    <script>
        $(function() {
            $('#startDate').datepicker({
                autoclose:true,
                dateFormat:'dd-mm-yy',
            });
            $('#endDate').datepicker({
                autoclose:true,
                dateFormat:'dd-mm-yy',
            });
        })
    </script>


@endpush
