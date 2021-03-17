@extends('layouts.backend.app')

@section('title', 'Reservation')

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
            <h1 class="m-0 text-dark">Reservation</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Master</li>
            <li class="breadcrumb-item active">Reservation</li>
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
                        <div class="card">
                            <div class="card-header card-header-primary">
                            <h4 class="card-title "><b>Reservations</b></h4>
                            {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Time And Date</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th class="center">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($reservations as $key => $reservation)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $reservation->name }}</td>
                                                <td>{{ $reservation->phone }}</td>
                                                <td>{{ $reservation->email }}</td>
                                                <td>{{ $reservation->date_and_time }}</td>
                                                <td>{{ $reservation->message }}</td>
                                                <td>
                                                    @if ($reservation->status == true)
                                                        <span class="badge bg-blue"><h6><b>Confirmed</b></h6></span>
                                                        {{-- <span class="label label-info">Confirmed</span> --}}
                                                    @else
                                                        <span class="badge bg-blue"><b>Not confirmed yet</b></span>
                                                        {{-- <span class="label label-danger">Not confirmed yet</span> --}}
                                                    @endif
                                                </td>
                                                <td>{{ $reservation->created_at }}</td>
                                                <td>{{ $reservation->updated_at }}</td>
                                                <td>
                                                    @if ($reservation->status == false)
                                                    {{-- <a href="" class="btn btn-info btn-sm">
                                                    <i class="material-icons">edit</i> </a> --}}

                                                        <form id="status-form-{{ $reservation->id }}" method="POST" action="{{ route('reservation.status', $reservation->id) }}">
                                                            @csrf
                                                        </form>
                                                        <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you sure you want to confirm this?')) {
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                        }
                                                        else {
                                                            event.preventDefault();
                                                        }">
                                                        <i class="material-icons">done</i></button>
                                                    @endif
                                                    <form id="delete-form-{{ $reservation->id }}" method="POST" action="{{ route('reservation.destroy', $reservation->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this data?')) {
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $reservation->id }}').submit();
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
            {{ $reservations->links() }}
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
