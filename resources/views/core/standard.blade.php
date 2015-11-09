@extends('app')

@section('template')

        @yield('cover')

        <div class="small-12 large-8 columns">
            @yield('body')
        </div>
        <div class="small-12 large-4 columns">
            @yield('sidebar')
        </div>

@stop