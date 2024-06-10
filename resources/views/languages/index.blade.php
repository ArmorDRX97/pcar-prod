@extends('layouts.app')
@section('title')
    {{ __('messages.languages') }}
@endsection

@section('content')
    <style>
.lnaguage-page .livewire-search-box{
    display: none!important;
}
    </style>
            <div class="container-fluid lnaguage-page">
                @include('flash::message')
                <div>
                    <div class="pt-0">
                    <livewire:language-table/>
                    </div>
                </div>
            </div>

    @include('languages.add_modal')
    @include('languages.edit_modal')
@endsection
{{--@section('scripts')--}}
{{--    <script src="{{ mix('assets/js/languages/languages.js')}}"></script>--}}
{{--@endsection--}}
