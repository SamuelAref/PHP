@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="pt-10 bg-gray-500 justify-cener">
                        <a href="/users"
                             class="border-b-2 pb-2 border-dotted  font-italic ">approve users  &rarr;
                        </a>     
                           <p>Unapproved users:{{ $count  }}</p>
                           
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection