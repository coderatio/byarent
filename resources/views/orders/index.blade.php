@extends('layouts.master')

@section('title', 'Order Received')

@section('content')
    <section class="padding-bottom-50 padding-top-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-success">
                        <i uk-icon="icon: check"></i>
                        {!! session('order-placed') !!}
                        <a href="#" class="close" data-dismiss="alert"><i uk-icon="icon:close"></i></a>
                    </div>
                    <br/>
                    <a href="{{ route('houses.index') }}" class="btn btn-danger"><i uk-icon="icon: plus"></i> Order more</a>
                </div>
            </div>
        </div>
    </section>
@stop
