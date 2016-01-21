@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'PMI designe') }}
@stop

@section('header')
@stop

@section('content')

    <div id="content-news" class="container">

    <div class="row row-content">

        <div class="col-xs-12 col-md-6 col-md-offset-3 ">


            @if(!empty($type->text) && empty($row))
                {{ $type->text }}
            @endif

            @if(!empty($row->text))
                <p class="date">{{ date( 'd.m.Y', strtotime($row->created_at)) }}</p>
                <h1>{{$row->name}}</h1>
                {{$row->text}}
                <br><a href="javascript:history.back(1)" >назад</a>
                <br><br>
                <div class="col-xs-12 text-right share-block">
                <script type="text/javascript">(function() {
                  if (window.pluso)if (typeof window.pluso.start == "function") return;
                  if (window.ifpluso==undefined) { window.ifpluso = 1;
                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                    var h=d[g]('body')[0];
                    h.appendChild(s);
                  }})();</script>
                <span>Поделиться:</span> <div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=02" data-services="vkontakte,odnoklassniki,facebook,twitter,google" data-user="1132713077"></div>
                </div>                
            @endif

            @if(isset($posts)&&count($posts)>0)
               <?php $k=0; ?>

                @foreach($posts as $post)
                <div class="news-item">
                    <p class="date">{{ date( 'd.m.Y', strtotime($post->created_at)) }}</p>
                    <div class=" title-block">
                        <div class="col-xs-12 col-sm-6 part part-img">
                            {{ HTML::image($post->image, $post->name) }}
                        </div>
                        <div class="col-xs-12 col-sm-6 part part-title">
                            <a href="{{$type->type.'/'.$post->slug}}"><h2>{{ $post->name }}</h2></a>
                        </div>
                    </div>

                    <div id="parts-{{$post->id}}" class="hidden-parts">{{ $post->preview }}</div>
                    <div class="text-right">
                        <p>{{ HTML::link( $type->type.'/'.$post->slug, 'далее' ) }} </p>
                    </div>
                </div>    
                <hr>
                <?php $k++; if(($k%3)==0 && $k!=(count($posts))){echo('<div class="text-center"><a href="#top-site" class="totop"></a></div>'); }  ?>

                @endforeach

                {{ $posts->links() }}       

            @endif
        </div>

    </div>


    </div>

@stop


@section('scripts')

@stop
