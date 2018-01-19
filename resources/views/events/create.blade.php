@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Event</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('events.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-form-label col-md-3">Event Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" placeholder="Event Name">
                                @if ($errors->has('name'))
                                <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-form-label col-md-3">Location</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" id="location" name="location" value="{{ old('location') }}" placeholder="Location">
                                @if ($errors->has('location'))
                                <span class="invalid-feedback">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="details" class="col-form-label col-md-3">Details</label>
                            <div class="col-md-6">
                                <textarea class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}" id="details" name="details" value="{{ old('details') }}" placeholder=""></textarea>
                                @if ($errors->has('details'))
                                <span class="invalid-feedback">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-form-label col-md-3">Date</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" id="date" name="date" value="{{ old('date') }}" placeholder="Date">
                                @if ($errors->has('location'))
                                <span class="invalid-feedback">{{ $errors->first('date') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
