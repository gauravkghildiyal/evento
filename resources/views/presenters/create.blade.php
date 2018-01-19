@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Presenter</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($event->presenters as $presenter)
                        <li class="list-group-item clearfix">
                            {{ $presenter->name }}
                            <span class="pull-right">
                                <form action="{{ route('presenters.destroy',['event_id'=>$event->id,'presenter'=>$presenter->id]) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger">Delete</button>
                                </form>

                            </span>
                        </li>
                        @endforeach
                    </ul>
                    <form class="form-horizontal" method="POST" action="{{ route('presenters.store',['id' => $event->id]) }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="presenter" class="col-form-label col-md-3">Select Presenter</label>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('presenters') ? ' is-invalid' : '' }}" name="presenter">
                                    <option value="">Select Option</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('presenters'))
                                <span class="invalid-feedback">{{ $errors->first('presenters') }}</span>
                                @endif
                            </div>
                            <div class="col-md=3">
                                <button type="submit" class="btn btn-primary">ADD</submit>
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <a class="btn btn-success"href="{{ route('events.show',['id'=>$event->id]) }}" style="margin-top:20px;">DONE</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
<script type="text/javascript">
$(document).ready(function(){

});
</script>
@endsection
