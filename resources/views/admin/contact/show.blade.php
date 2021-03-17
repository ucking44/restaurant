@extends('layouts.backend.app')

@section('title', 'Contact')


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contact Message</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Master</li>
            <li class="breadcrumb-item active">View Contact Message</li>
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
                                <h4 class="card-title "><b>{{ $contact->subject }}</b></h4>
                            {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Name:</strong> {{ $contact->name }}<br>
                                            <b>Email:</b> {{ $contact->email }}<br><hr>
                                            <strong>Message: </strong>{{ $contact->message }}

                                            <hr>
                                        </div>
                                    </div>
                                    <a href="{{ route('contact.index') }}" class="btn btn-danger">Back</a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            {{-- {{ $sliders->links() }} --}}
                        </div>
                    </div>

            </div>
            {{-- {{ $contacts->links() }} --}}
        </div>
    </div>
    <!-- /.content -->

@endsection
