@extends('mainlayout')
@section('pagename')
    Tarn - Details
@stop


@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Films |  <a href="{{ url('films/create') }}"><button type="button" class="btn btn-primary">Add New</button></a></div>
        <div class="card-body">
            <div class="table-responsive">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        {!! \Session::get('success') !!}

                    </div>
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Realease Date</th>
                        <th>Rating</th>
                        <th>Ticket Price</th>
                        <th>Country</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($films as $film)
                    <tr>
                        <td>{{ $film->name }}</td>
                        <td>{{ $film->realease_date }}</td>
                        <td>{{ $film->rating }}</td>
                        <td>{{ $film->ticket_Price }}</td>
                        <td>{{ $film->country }}</td>
                        <td><button type="button" class="btn btn-primary btn-sm ">Edit</button> <button type="button" class="btn btn-sm btn-danger">Delete</button></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    @stop