@extends('layouts.app');

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Create Listing
                    <a href="/dashboard" class="float-right btn btn-primary btn-xs">Go Back</a>
                </div>

                <div class="card-body">
                    {!! Form::open(['action' => 'ListingsController@store','method' => 'POST']) !!}
                        {{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
                        {{ Form::bsText('website','',['placeholder' => 'Company Website']) }}
                        {{ Form::bsText('email','',['placeholder' => 'Contact Email']) }}
                        {{ Form::bsText('phone','',['placeholder' => 'Contact Phone']) }}
                        {{ Form::bsText('address','',['placeholder' => 'Business Address']) }}
                        {{ Form::bsTextArea('bio','',['placeholder' => 'About This Business']) }}
                        {{ Form::bsSubmit('submit') }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
