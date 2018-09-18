@extends('mainlayout')
@section('pagename')
    Tarn - Details
@stop


@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Add new Films</div>
        <div class="card-body">
            <form class="table-responsive" method="POST" action="{{ url('films') }}" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="POST">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <input type="hidden" name="rating" id="Rating" value="0" />

                <label for="inputEmail">Film Name</label>
                <input id="Film Name" class="form-control"  name="name" required placeholder="Film Name" required="required" type="text">

                <label for="input" style="margin-top: 10px">Description</label> <br>
                <textarea name="description" class="form-control" required></textarea>

                <label for="realease_date" style="margin-top: 10px"  >Realease Date</label>
                <input class="form-control" type="date" name="realease_date" required>

                <label for="ticket_price" style="margin-top: 10px">Ticket Price</label>
                <input class="form-control" type="number" name="ticket_price" required>

                <label for="country" style="margin-top: 10px">Country</label>
                <input class="form-control" type="text" name="country" required>

                <label for="genre" style="margin-top: 10px">Genre</label>
                <input class="form-control" type="text" name="genre" required>

                <label for="genre" style="margin-top: 10px">Photo</label>
                <input class="form-control" type="file" name="photo" required>
<br>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
        @stop