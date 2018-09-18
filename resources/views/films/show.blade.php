@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Film Details | <a href="{{url('/')}}"><< Back to List</a></div>

                <div class="panel-body">

                        <div>
                            <div> <img src="{{ asset('filmimg').'/'.$film->photo }}"> </div>
                            <br>
                            <h4> {{ $film->name }}</h4>
                            <div>Realease Date : {{ $film->realease_date }}</div>
                            <div>{{ $film->description }}</div>
                            <div>
                                <span>Price : <b>${{ number_format($film->ticket_Price) }}</b></span>
                                <span> | Country : {{ $film->country }}</span>
                            </div>


                            <div>
                                <hr>
                                <h3>Comments</h3>
                                <textarea></textarea>

                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>

                                @if (Auth::check())
                                    <button>Post Comment</button>
                                @else
                                    <br> <b> Login First to Post Comment</b>
                                @endif


                            </div>

                        </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
