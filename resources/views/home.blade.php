@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Film List</div>

                <div class="panel-body">
                    @foreach($films as $film)
                        <div>
                            <div> <img src="{{ asset('filmimg').'/'.$film->photo }}" width="100px"> </div>
                            <h4> {{ $film->name }}</h4>
                            <div>Realease Date : {{ $film->realease_date }}</div>
                            <div>
                                <span>Price : <b>${{ number_format($film->ticket_Price) }}</b></span>
                                <span> | Country : {{ $film->country }}</span>
                            </div>
<div>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
</div>
                            <div>
                                <a href="{{url('films').'/'. $film->slug }}">
                                <button type="button" class="btn btn-sm btn-primary">Show Details</button></a> </div>

<hr>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
