@extends('layouts.app')

@section('content')

    {{-- <div class="col-sm-6 col-md-4"> --}}
    {{--     <div class="block block-rounded text-center"> --}}
    {{--         <div class="block-content block-content-full"> --}}
    {{--             <!-- Pie Chart Container --> --}}
    {{--             <div class="js-pie-chart pie-chart fw-bold" data-percent="75" data-line-width="4" data-size="100" data-bar-color="#82b54b" data-track-color="#e9e9e9"> --}}
    {{--                 <span> --}}
    {{--                   <img class="img-avatar" src="{{asset('assets/media/avatars/avatar11.jpg')}}" alt=""> --}}
    {{--                 </span> --}}
    {{--             </div> --}}
    {{--         </div> --}}
    {{--         <div class="block-content bg-success"> --}}
    {{--             <p class="text-white text-uppercase fs-sm fw-bold"> --}}
    {{--                 3 / 4 Completed --}}
    {{--             </p> --}}
    {{--         </div> --}}
    {{--     </div> --}}
    {{-- </div> --}}
    @include('app.blocks.tickets',['instances'=>[]])
    @include('app.blocks.registry_payment',['instances'=>[]])
    @include('app.blocks.registry_accrual_special',['instances'=>[]])
    @include('app.blocks.registry_accrual',['instances'=>[]])

@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
    <script>One.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);</script>
    <script>One.helpersOnLoad(['one-table-tools-sections']);</script>
@endpush