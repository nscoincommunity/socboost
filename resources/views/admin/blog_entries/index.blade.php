@extends('admin/layouts.app')

@section('title')
    {{ __('Blog Entries') }}
@endsection

@section('breadcrumbs')
    <li> {{ __('Blog Entries') }}</li>
@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-md-12">
            <!-- tile -->
            <section class="tile">
                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font">{{ __('Blog Entries') }}</h1>
                    <ul class="controls">
                        <li>
                            <a role="button" href="{!! route('admin.blogEntries.create') !!}">
                                {{ __('Create') }}
                            </a>
                        </li>
                        <li>
                            <a role="button" class="tile-fullscreen">
                                <i class="fa fa-expand"></i> {{ __('Fullscreen') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body">

                    @include('flash::message')

                    <div class="clearfix"></div>
                    <div class="box box-primary">
                        <div class="box-body">
                            @include('admin.blog_entries.table')
                        </div>
                    </div>
                    <div class="text-center">

                    </div>

                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
@endsection


