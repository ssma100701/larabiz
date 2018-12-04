@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Listings
                <span class="float-right">
                    <a href="/listings/create" class="btn btn-success btn-xs">Add Listing</a>
                </span>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h3>Your Listings</h3>
                @if (count($listings))
                    <ul class="list-group">
                        @foreach ($listings as $listing)
                            <li class="list-group-item">
                                <a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                @else
                    <p>No Listings Found</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
