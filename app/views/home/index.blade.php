@extends('home.layout')

@section('title')
{{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'') }}
@stop

@section('header')

@stop

@section('content')

    <div id="content-gallery" class="">

        @if(!empty($row->text))
            {{ $row->text }}
        @endif


        <div class="gallery-flex">

            @foreach($galleries as $image)
                <div class="item left">
                    <a class="" rel="gallery" href="{{ $image->image }}" title="{{ $image->text }}">
                        {{ HTML::image($image->small_image, $image->alt) }}
                    </a>
                </div>
            @endforeach
        </div>

    </div>

@stop


@section('scripts')

@stop
