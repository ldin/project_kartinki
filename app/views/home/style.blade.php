@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'PMI designe') }}
@stop

@section('header')
@stop

@section('content')

   <div id="content-style" class="container">

    <div class="row">

        @if(isset($posts)&&count($posts)>0)
            <!--
            <div class="col-xs-12 col-sm-2" id="menu-style">
                <ul class="menu-page nav nav-pills nav-stacked ">
                    @foreach($posts as $post)
                        <li {{ (Request::is( $type->type.'/'.$post->slug)) || (!empty($row)&&$row->parent==$post->id)? 'class="active"' : '' }} >
                        {{ HTML::link('/'.$type->type.'/'.$post->slug, $post->name) }}

                            @if(isset($posts_child)&&count($posts_child)>0)
                                <ul>
                                    @foreach($posts_child as $post_ch)
                                        @if(($post_ch->parent == $post->id) )
                                            <li {{ (Request::is( $type->type.'/'.$post_ch->slug)) ? 'class="active"' : '' }}>
                                                {{ HTML::link('/'.$type->type.'/'.$post_ch->slug, $post_ch->name) }}
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            -->
        @endif

        <div class="col-xs-12">



            @if(empty($row) && !empty($type->text) )
                {{ $type->text }}
            @elseif(empty($row))
                <?php if(!$row){$row = $posts[0];} ?>
            @endif

            @if(!empty($row))
                <h1>{{ $row->name  }} стиль</h1>
                {{ HTML::image($row->image, '') }}
                {{ $row->text }}
            @endif

        </div>

        <div class="col-xs-12" id="tegs">
            <ul class="">
                @foreach($posts as $post)
                    <li {{ (Request::is( $type->type.'/'.$post->slug)) || (!empty($row)&&$row->parent==$post->id)? 'class="active"' : '' }} >
                        {{ HTML::link('/'.$type->type.'/'.$post->slug, $post->name) }}

                        @if(isset($posts_child)&&count($posts_child)>0)
                            <ul>
                                @foreach($posts_child as $post_ch)
                                    @if(($post_ch->parent == $post->id) )
                                        <li {{ (Request::is( $type->type.'/'.$post_ch->slug)) ? 'class="active"' : '' }}>
                                            {{ HTML::link('/'.$type->type.'/'.$post_ch->slug, $post_ch->name) }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>



    </div>

    </div>

@stop


@section('scripts')

@stop
