@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <h3>{{$thread->title}}</h3>
            
            <div class="panel panel-default">

                <div class="panel-body">
                    <article>
                        <div class="body">
                            {{$thread->body}}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-title">
            <h3>Comments</h3>
            </div> 
            @foreach($thread->replies as $reply)
            <div class="panel panel-default">
                <div class="panel-body">
                        {{$reply->body}}
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
