@extends('pages.templet')
@section('content')

    <div  class="top" id="marginmobile1"style=" margin-bottom: 20px!important;">
        <img src="/images/pictures/m1.jpg" class="imgstyle">
        <span id="topjoinus">     دنيانا </span>
    </div>

    <div class="container-fluid" style=" padding: 0; background-color: #D5E4E8; color: #376773">
        <div class="container-fluid" id="marginmobile">
            <iframe width="100%" height="400" src="{{$vedio->video_url}}" frameborder="0" allowfullscreen></iframe>
            <div  class="container-fluid" style=" padding: 0!important; margin-top:-5px;background-color: white">
                <div class="row" style="padding: 20px;">
                    <div style="float:right;">
                        <span style=" padding-left:10px;float:right;font-family: ebold;font-size: 25px"> مشاركة علي</span>

                        <span>
                            <?php  $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                            <a href="https://twitter.com/share?url={{$actual_link}}" target="_blank">
                                <img src="/images/pictures/video/twitter.png" style="max-width: 45%;">
                            </a>
                            <a href="http://www.facebook.com/sharer.php?u={{$actual_link}}" target="_blank">
                                <img src="/images/pictures/video/facebook.png" style="max-width: 45%;">
                            </a>
                            {{--<a href=""><img src="/images/pictures/tagmoevent/facebook.png" style="max-width: 45%;"></a>--}}
                            {{--<a href=""><img src="/images/pictures/tagmoevent/twitter.png" style="max-width: 45%;"></a>--}}
                        </span>
                    </div>
                    <div class="pull-left">
                        <span>
                        @if(Auth::check())
                                @if($likes_count == 0)
                                    <form class="like">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="article_id" value="{{$vedio->id}}">
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <button class="pull-left" type="submit"><img   src="/images/pictures/video/like.png"></button>
                                        <span class="db_like_count">{{$likes_count}}</span>
                                        <span class="jq_like_count"></span>
                                    </form>
                                @endif
                                @foreach($likes as $like)
                                    @if($like->user_id == Auth::user()->id)
                                        @if ($like->like_status == "1")
                                            <button class="pull-left" type="submit" disabled><img   src="/images/pictures/video/like.png"><></button>
                                            <span class="">{{$likes_count}}</span>
                                        @else
                                            <form class="like">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="hidden" name="article_id" value="{{$data->id}}">
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                <button class="pull-left" type="submit"><img   src="/images/pictures/video/like.png"><</button>
                                                <span class="db_like_count">{{$likes_count}}</span>
                                                <span class="jq_like_count"></span>
                                            </form>
                                        @endif
                                    @endif
                                @endforeach

                            @else
                                <button class="pull-left" type="submit" disabled><img   src="/images/pictures/video/like.png"></button><span class="">{{$likes_count}}</span>
                            @endif

                        </span>

                        <span class=""><button class="pull-left" type="submit" disabled><img   src="/images/pictures/video/seen.png">{{$seens_count}}</button> </span>
                    </div>
                </div>
                <hr style=" width: 100%!important;"/>
                <div class=" row pull-right" style="font-size: 25px; font-family: ebold; padding: 20px;">{{$vedio->title}}</div>
                <div class="row pull-right" style=" text-align:right;font-size: 15px; font-family: ebold;padding-bottom: 30px; padding-right: 20px;">{{$vedio->subject}}</div>
            </div>
            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> التعليقات</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrte">
            </div>

            <div id="container" class="container-fluid comments_box" style="background-color: white; padding: 10px;">
                @foreach($youtube_comments as $youtube_comment)
                    <div style="background-color:#EEF4F5; padding:20px; margin:25px;">
                        <div class="row ">
                            <div class="col-lg-1 " style="padding-right: 85px;">
                                <img src="{{$youtube_comment['user_iamge']}}" width="60px">
                            </div>
                            <div class="col-lg-10">
                                <p style="font-family:Calibri;font-size: 23px; margin: 0;"
                                   class=""> {{$youtube_comment['user_name']}}</p>
                                {{--<p style="font-family:Calibri;font-size: 16px;"> 20 mintues</p>--}}
                            </div>
                        </div>
                        <div class="row pull-right " style="font-family: ebold; font-size:18px; ">{{$youtube_comment['text']}}</div>
                        <div class="row" style="margin-top: 15px!important;">
                            <hr/>
                            {{--<div class="pull-right" style="font-family: ebold;font-size: 18px;color: #8A9596;"><button>إضافة رد</button></div>--}}
                        </div>
                    </div>
                @endforeach
                    <div class="general_comment">
                @foreach($comments as $comment)

                        <div class="" style="background-color:#EEF4F5; padding:20px; margin:25px; height: 200px;overflow: auto;">
                            <div class="row ">
                                <!-- Show the Image of the user -->
                                <div class="col-lg-1 user_pic" style="padding-right: 85px;">
                                    @if(empty($comment->user_image))
                                        <img src="/uploadfiles/user_photo/e.png" width="60px">
                                    @else
                                        <img src=/uploadfiles/user_photo/{{$comment->user_name}}/{{$comment->user_image}}"
                                             width="60px">
                                    @endif
                                </div>
                                <!-- ******************************** -->
                                <!-- Show the Name of the user -->
                                <div class="col-lg-10 user_name">
                                    <p style="font-family:Calibri;font-size: 23px; margin: 0;" class=""> {{$comment->user_name}}</p>
                                    {{--<p style="font-family:Calibri;font-size: 16px;"> 20 mintues</p>--}}
                                </div>
                                <!-- ******************************** -->
                            </div>
                            <!-- Show the comment with replays -->
                            <div class="row pull-right comments" style="margin-bottom: 20px!important;font-family: ebold; font-size:18px; ">
                                {{$comment->text}}
                            </div>
                            <!-- Start Show replay of comments -->
                            <div class="row" style="margin-top: 20px!important;">
                                @foreach($replays as $replay)
                                    @if($replay->comment_id == $comment->id )
                                        <div class="replay_data">
                                            <div>
                                                @if(empty($replay->user_image))
                                                    <img src="/uploadfiles/user_photo/e.png">
                                                @else
                                                    <img src="/uploadfiles/user_photo/{{$replay->user_image}}">
                                                @endif
                                                <span>{{$replay->user_name}}</span>
                                                <p>{{$replay->text}}</p>
                                            </div>
                                        </div>
                                        <!-- End Show replay of comments -->
                                    @endif
                                @endforeach
                            </div>
                            <div class="row replay_box" style="margin-top: 15px!important;">
                                @if(Auth::check())
                                    <form class="form-inline replay_form" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="article_id" value="{{$vedio->id}}">
                                        <input type="hidden" name="user_name" class="user_name" value="{{Auth::user()->english_name}}">
                                        <input type="hidden" name="comment_id" class="user_name" value="{{$comment->id}}">
                                        <input type="hidden" name="user_id" class="user_name" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="user_image" class="user_pic" value="{{Auth::user()->profile_image}}">
                                        <div class="form-group" style=" height:50px; width: 100%;">
                                            <div class=" col-xs-4 col-sm-4 col-md-3 col-lg-2 pull-right"
                                                 style="padding-left:0;padding-right: 0;">
                                                <button class="btn btn-info" id="ersal">
                                                    اضافة رد
                                                </button>
                                            </div>

                                            <div class=" col-xs-8 col-sm-8 col-md-9 col-lg-10 pull-left"
                                                 style=" padding-left:0;padding-right: 0;">
                                                <input type="text" class="form-control replay" id="email-term"
                                                       style=" height:50px!important;background-color: white!important; border-radius: 0!important;" name="replay">
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                @endforeach
                    </div>
            </div>
            @if(Auth::check())
                <form class="form-inline comment_form" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="event_id" value="{{$vedio->id}}">
                    <input type="hidden" name="user_name" class="user_name" value="{{Auth::user()->english_name}}">
                    <input type="hidden" name="user_image" class="user_pic" value="{{Auth::user()->profile_image}}">
                    <div class="form-group" style=" height:50px; width: 100%;">
                        <div class=" col-xs-4 col-sm-4 col-md-3 col-lg-2 pull-right"
                             style="padding-left:0;padding-right: 0;">
                            <button class="btn btn-info" id="ersal">
                                ارسال
                            </button>
                        </div>

                        <div class=" col-xs-8 col-sm-8 col-md-9 col-lg-10 pull-left"
                             style=" padding-left:0;padding-right: 0;">
                            <input type="text" class="form-control comment" id="email-term"
                                   style=" height:50px!important;background-color: white!important; border-radius: 0!important;" name="comment">
                        </div>
                    </div>
                </form>
            @endif
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".comment_form").submit(function (event) {
                event.preventDefault();

                var user_name ='<?php echo Auth::user()->english_name; ?>' ;
                var user_pic = '<?php echo Auth::user()->profile_image; ?>';
                var user_id = '<?php echo Auth::user()->id; ?>';
                var article_id = '<?php echo $vedio->id; ?>';
                var token = '<?php echo csrf_token();?>';

                $.ajax( {
                    url: '/article_comment',
                    type: 'POST',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        $.get( "/get_article_comments/"+article_id)
                                .done(function( data ) {
                                    $('.general_comment').children().hide();
                                    for(var i=0;i<data.length;i++){
                                        if(data[i]["user_image"] == ""){
                                            $(".general_comment").append('<div style="background-color:#EEF4F5; padding:20px;height:200px; margin:25px;">' +
                                                    '<div class="row "><div class="col-lg-1 user_pic" style="padding-right: 85px;">' +
                                                    '<img src="/uploadfiles/user_photo/e.png" width="60px"></div>' +
                                                    '<div class="col-lg-10 user_name"><p style="font-family:Calibri;font-size: 23px; margin: 0;" class="">'+data[i]["user_name"]+'</p></div>' +
                                                    '</div><div class="row pull-right comments" style="font-family: ebold; font-size:18px; "><p>'+data[i]["text"]+'</p></div>' +
                                                    '<div class="row replay_box" style="margin-top: 15px!important;"> ' +
                                                    '<form class="form-inline replay_form" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">' +
                                                    '<input type="hidden" name="_token" value="'+token+'"><input type="hidden" name="article_id" value="'+data[i]["article_id"]+'">' +
                                                    '<input type="hidden" name="user_name" class="user_name" value="'+user_name+'"> ' +
                                                    '<input type="hidden" name="comment_id" class="user_name" value="'+data[i]["id"]+'">' +
                                                    '<input type="hidden" name="user_id" class="user_name" value="'+user_id+'">' +
                                                    '<input type="hidden" name="user_image" class="user_pic" value="'+user_pic+'">' +
                                                    '<div class="form-group" style=" height:50px; width: 100%;">' +
                                                    '<div class=" col-xs-4 col-sm-4 col-md-3 col-lg-2 pull-right"style="padding-left:0;padding-right: 0;">' +
                                                    '<button class="btn btn-info" id="ersal">اضافة رد </button></div>' +
                                                    '<div class=" col-xs-8 col-sm-8 col-md-9 col-lg-10 pull-left"style=" padding-left:0;padding-right: 0;">' +
                                                    '<input type="text" class="form-control replay" id="email-term"style=" height:50px!important;background-color: white!important; border-radius: 0!important;" name="replay"> </div> </div> </form> </div></div>');
                                        }else{
                                            $(".general_comment").append('<div style="background-color:#EEF4F5; padding:20px;height:200px; margin:25px;">' +
                                                    '<div class="row "><div class="col-lg-1 user_pic" style="padding-right: 85px;">' +
                                                    '<img src=/uploadfiles/user_photo/'+data[i]["user_name"]+'/'+data[i]["user_image"]+'" width="60px"></div>' +
                                                    '<div class="col-lg-10 user_name"><p style="font-family:Calibri;font-size: 23px; margin: 0;" class="">'+data[i]["user_name"]+'</p></div>' +
                                                    '</div><div class="row pull-right comments" style="font-family: ebold; font-size:18px; "><p>'+data[i]["text"]+'</p></div>' +
                                                    '<div class="row replay_box" style="margin-top: 15px!important;"> ' +
                                                    '<form class="form-inline replay_form" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">' +
                                                    '<input type="hidden" name="_token" value="'+token+'"><input type="hidden" name="article_id" value="'+data[i]["article_id"]+'">' +
                                                    '<input type="hidden" name="user_name" class="user_name" value="'+user_name+'"> ' +
                                                    '<input type="hidden" name="comment_id" class="user_name" value="'+data[i]["id"]+'">' +
                                                    '<input type="hidden" name="user_id" class="user_name" value="'+user_id+'">' +
                                                    '<input type="hidden" name="user_image" class="user_pic" value="'+user_pic+'">' +
                                                    '<div class="form-group" style=" height:50px; width: 100%;">' +
                                                    '<div class=" col-xs-4 col-sm-4 col-md-3 col-lg-2 pull-right"style="padding-left:0;padding-right: 0;">' +
                                                    '<button class="btn btn-info" id="ersal">اضافة رد </button></div>' +
                                                    '<div class=" col-xs-8 col-sm-8 col-md-9 col-lg-10 pull-left"style=" padding-left:0;padding-right: 0;">' +
                                                    '<input type="text" class="form-control replay" id="email-term"style=" height:50px!important;background-color: white!important; border-radius: 0!important;" name="replay"> </div> </div> </form> </div></div>');

                                        }

                                    }
                                });

                    }
                });
            });
            $(".replay_form").submit(function (event) {
                event.preventDefault();
                var comment_id = $(this).parent().find('input[type="hidden"][name="comment_id"]').val();

                $.ajax({
                    url: '/article_comment_replay',
                    type: 'POST',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        $.get( "/get_article_comment_replays/"+comment_id)
                                .done(function( data ) {
                                    console.log(data);
                                    $(".replay_data").children().hide();
                                    for(var i=0;i<data.length;i++){
                                        if(data[i]['user_image'] == ""){
                                            $(".replay_data").append('<div><img src="/uploadfiles/user_photo/e.png"><span>'+data[i]["user_name"]+'</span><p>'+data[i]["text"]+'</p></div>');
                                        }else{
                                            $(".replay_data").append('<img src="/uploadfiles/user_photo/'+data[i]["user_image"]+'"><span>'+data[i]["user_name"]+'</span><p>'+data[i]["text"]+'</p>');
                                        }

                                    }
                                });

                    }
                });
            });

            $(document).ajaxComplete(function () {
                $('.comment_form').each(function () {
                    this.reset();
                });
            });

            $(".like").submit(function (event) {
                var like_num = parseInt($(".db_like_count").text());
                var num = 1;
                var count = like_num + num;
                event.preventDefault();
                $('button').prop('disabled', true);
                $.ajax({
                    url: '/article_like_save',
                    type: 'POST',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function (data) {

                    }
                });
                $(".db_like_count").css("display", "none");
                $(".jq_like_count").append(count);

            });
        });

    </script>



@stop