@extends('layouts.customer')

@section('title', 'Ретвитты в Twitter' . ' - ' . __('site.site'))

@section('content')
    <section id="portfolio" class="container add-order">
        <div class="row">
            <div class="service-content col-md-8">

                <form name="add_order" method="post" action="{{ route('add_order', ['service' => 'SERVICE_ADD_ORDER_TWITTER_RETWEETS_FAST']) }}">
                    <input type="hidden" name="type" value="twitter-retweets-fast">
                    <h1>Ретвитты в Twitter</h1>
                    <br>
                    <div class="row">
                        <div class="label-name col-md-4">{{ __("Price / 1:") }}</div>
                        <div class="col-md-8 priceOne"><span id="price_base"><strong>{{ socialboosterPrice('SERVICE_ADD_ORDER_TWITTER_RETWEETS_FAST_PRICE') }}</strong></span> {{ session()->has('lang') && session('lang') == 'ru' ? '₽' : '$' }}</div>
                    </div>
                    <div class="row">
                        <div class="label-name col-md-4">{{ __("Quantity") }}:</div>
                        <div class="col-md-8"><input name="count" class="form-control" type="text" value="1" size="3"></div>
                    </div>
                    <div class="row">
                        <div class="label-name col-md-4">{{ __("Link") }}:</div>
                        <div class="col-md-8"><input name="link" class="form-control" type="text" required></div>
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="label-name col-md-4">Примечание: <span>(доступно только вам)</span></div>--}}
                        {{--<div class="col-md-8"><input name="note" class="form-control" type="text"></div>--}}
                    {{--</div>--}}
                    @include('customer.order.charge')

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8"><input type="submit" class="btn-success" value="{{  __('Submit')  }}"></div>
                    </div>

                    <input type="hidden" name="count_min" value="50"/>
                    <div class="message"></div>
                {{ csrf_field() }}</form>

            </div>



            <div class="text-page col-md-12"></div>


        </div>
        <div class="border">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

@endsection
