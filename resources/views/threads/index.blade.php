@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">


                        @foreach($threads as $thread)
                            <article>
                                <h4>{{$thread->title}}</h4>
                                <p> {{$thread->body}}</p>
                            </article>

                        @endforeach

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
