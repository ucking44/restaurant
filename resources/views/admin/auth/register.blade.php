@extends('layouts.backend.app')

@section('title', 'Registered-Roles')

{{-- @section('title')
  Registered Roles
@endsection --}}

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('layouts.backend.partials.msg')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registered Roles</h4>
                    {{-- @if (session('status'))
                        <div class="alert alert-succes" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Usertype</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)

                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->phone }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->usertype }}</td>
                                    <td>
                                        <a href="/edit/{{ $member->id }}" class="btn btn-default">Edit</a>
                                    </td>
                                    <td>
                                        <form action="/delete/{{ $member->id }}" method="post">
                                            @csrf
                                            {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection


