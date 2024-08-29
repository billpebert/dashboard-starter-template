@extends('layouts.dashboard')

@section('heading', 'Charts')
@section('caption', 'List of charts')

@section('content')
    <div class="flex flex-col gap-5">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 2xl:grid-cols-4">
            @include('partials.radial-chart-rounded')

            @include('partials.spline-area-chart')

            @include('partials.horizontal-bar-chart')

            @include('partials.radar-chart')
        </div>

        @include('partials.bar-chart-interactive')

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 2xl:grid-cols-4">
            @include('partials.multiple-radial-chart')

            @include('partials.radial-chart')

            @include('partials.spline-chart')

            @include('partials.gauge-chart')
        </div>
    </div>
@endsection

@push('css')
    <style>
        .apexcharts-tooltip {
            background: hsl(var(--background));
        }
    </style>
@endpush
