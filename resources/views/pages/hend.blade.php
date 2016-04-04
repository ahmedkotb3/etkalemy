
    <div class="row" style="margin-top: 20px!important;">
        <!-- Start Show replay of comments -->
        @foreach($replays as $replay)
            @if($replay->comment_id == $comment->id )
                <div>
                    @if(empty($replay->user_image))
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding-right: 85px;">
                            <img style="width: 60px;" src="/uploadfiles/user_photo/e.jpg"></div>
                    @else
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding-right: 85px;">
                            <img style="width: 60px;"src="/uploadfiles/user_photo/{{$replay->user_image}}"></div>
                    @endif
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="padding-right: 85px;"><span>{{$replay->user_name}}</span></div>
                    <div class="row pull-right" > <p>{{$replay->text}}</p></div>
                </div>
                <!-- End Show replay of comments -->
                @endif
                @endforeach

    </div>

    <!-- Start insert replays of comment -->
    <div class="row" style="margin-top: 15px!important;">
        @if (Auth::check())
            <form class="form-inline replay_form" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="article_id" value="{{$article->id}}">
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
        {{--<hr/>--}}
        {{--<div class="pull-right" style="font-family: ebold;font-size: 18px;color: #8A9596;">--}}
        {{----}}
        {{--</div>--}}
    </div>
    <!-- End replays of comment -->
</div>






























<div class="row1 world" style=" direction:rtl;width: 100%;">
    <div class="menu-category list-group ">
        <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;">

            <div style="padding: 20px;  border-radius:5px;background-color:white;margin-left: 15px!important; min-height: 155px">

                <div class="imgWrapedonaya img-responsiveedonyana">

                    <img class="imgWrapedonaya img-responsiveedonyana" src="/uploadfiles/articles/'data[i][title]->}}/{{$data->picture_url}}" alt="polaroid"/>
                    <a href="/OurWorld-Article/{{$data->id}}">
                        <div class="imgDescriptione">
                            <span id="articleimg"><img src="/images/pictures//donyana/txt.png"/></span>
                        </div>
                    </a>

                </div>

                <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                    <?php echo substr($data->subject,0,150); ?>
                </div>

            </div>
            <hr style="margin-top: 10px!important;"/>
        </div>
        <img style="position: relative;top: -14px;right: 150px;" src="/images/pictures/donyana/1.png ">
    </div>
    </div>



document.getElementById("txtHint2").innerHTML = text;



< class="row1 world" style=" direction:rtl;width: 100%;">
            <div class="menu-category list-group ">
                <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;">
                    <div style="padding: 20px;  border-radius:5px;background-color:white;margin-left: 15px!important; min-height: 155px">
                        <div class="imgWrapedonaya img-responsiveedonyana">
                            <img class="imgWrapedonaya img-responsiveedonyana" src="/uploadfiles/articles/{{$data->title}}/{{$data->picture_url}}" alt="polaroid"/>
                            <a href="/OurWorld-Article/{{$data->id}}">
                                <div class="imgDescriptione">
                                    <span id="articleimg"><img src="/images/pictures//donyana/txt.png"/></span>
                                </div>
                            </a>
                        </div>

                        <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                            <?php echo substr($data->subject,0,150); ?>
                        </div>

                        </div>
                        <hr style="margin-top: 10px!important;"/>
                    </div><img style="position: relative;top: -14px;right: 150px;" src="/images/pictures/donyana/1.png ">
            </div>

            <div class="menu-category list-group ">
                <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;min-height: 300px">
                    <div style="padding: 10px;  border-radius:5px;background-color:white;margin-left: 15px!important;">
                        <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                        <div class="imgWrapedonaya img-responsiveedonyana">
                            <img class="imgWrapedonaya img-responsiveedonyana" src="http://img.youtube.com/vi/sLwrG2bwBDI/{{$data->picture_url}}" alt="polaroid"/>
                            <a href="/OurWorld-video/{{$data->id}}">  <div class="imgDescriptione">
                                    <span id="articleimg"><img src="/images/pictures//donyana/video.png"/></span>
                                    @if(Auth::check())
                                        @foreach($seens as $seen)
                                            @if($seen->article_id == $data->id)
                                                @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                    <button disabled><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                                @else
                                                    <form class="seen">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <input type="hidden" name="article_id" value="{{$data->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                                    </form>
                                                @endif
                                            @endif
                                        @endforeach
                                    @else
                                        <button disabled><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                    @endif
                                </div>
                            </a>
                        </div>

                        <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                            <?php echo substr($data->subject,0,150); ?>
                        </div>

                        <!-- this code show like and seen with count -->
                        <div style="height:30px;">
                                        <span class="pull-left">
                                            <!-- Start calculate count of like to the article -->
                                            <?php
                                            $like_count = 0;
                                            foreach($likes_count as $like){
                                                if(($like->article_id == $data->id)&& ($like->like_status == "1")){
                                                    $like_count++;
                                                }
                                            }
                                            ?>
                                                    <!-- End calculate count of like to the article -->
                                            <!--  if text have no likes -->
                                            @if($like_count == "0")
                                                @if(Auth::check())
                                                    <form class="like" style="display: inline-block;">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <input type="hidden" name="article_id" value="{{$data->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $data->id)
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$data->id}}">
                                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                            <button class="pull-left like_click" type="submit"><img src="/images/pictures/donyana/like1.png"/></button>
                                                                        </form>
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                    @endif
                                                    <span class="pull-right db_count" style=" padding-top:5px;padding-left: 7px;"><a id="clicks2">{{$like_count}}</a></span>
                                                    <span class="pull-right jq_count" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $data->id)&& ($seen->seen_status == "1")){
                                                    $seen_count++;
                                                }
                                            }
                                            ?>
                                            <img class="pull-left" src="/images/pictures/donyana/seen.png"/>
                                            <span class="pull-right db_seen_count" style="margin-top: -3px;padding-left: 7px;"><a id="clicks3">{{$seen_count}}</a></span>
                                            <span class="pull-right jq_seen_count" style="margin-top: -3px;padding-left: 7px;"></span>
                                        </span>
                        </div>
                        <hr style="margin-top: 10px!important;"/>
                    </div>
                    <img style="position: relative;top: -14px;right: 150px;" src="/images/pictures/donyana/1.png ">
                </div>
            </div>
        @endif
    @endforeach
</div>











{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<title>Bootstrap Example</title>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>--}}
    {{--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
{{--</head>--}}
{{--<body>--}}

{{--<div class="container">--}}

    {{--<form role="form">--}}
        {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            {{--<input type="email" class="form-control" id="email">--}}
            {{--<input type="password" class="form-control" id="pwd">--}}
        {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="submit" data-target="#myModal">submit</button>--}}
    {{--</form>--}}



    {{--<!-- Modal -->--}}
    {{--<div class="modal fade" id="myModal" role="dialog">--}}
        {{--<div class="modal-dialog">--}}

            {{--<!-- Modal content-->--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-body">--}}
                    {{--<form  method="post" action="/pay" enctype="multipart/form-data" class="form_style">--}}
                        {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                        {{--<input type="hidden" name="email2" id="email2" >--}}
                        {{--<input type="hidden" name="event_name" id="event_name" value="talk" >--}}
                        {{--<input type="hidden" name="price" id="price" value="1000" >--}}
                        {{--<button type="submit" class="btn btn-default center-block" >paypal</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>--}}
    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--var email;--}}
            {{--$("#email").change(function(){--}}
                {{--email = $("#email").val();--}}
               {{--$('#email2').val(email);--}}

            {{--});--}}




        {{--});--}}
    {{--</script>--}}

{{--</div>--}}

{{--</body>--}}
{{--</html>--}}

<html>
<body>
<a href="https://twitter.com/share?url=https%3A%2F%2Fwww.youtub" target="_blank">
    <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
</a>
<a href="http://www.facebook.com/sharer.php…" target="_blank">
    <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
</a>
<form>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="article_id" value="2">
    <input type="hidden" name="user_id" value="5">
    <button class="pull-left" type="submit" id="like">
        <img src="/images/pictures/donyana/like1.png"></button>
    {{--<input type="submit" name="like" value="like" id="submit">--}}
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("form").submit(function (event) {
            event.preventDefault();
//            $("#like", this)
//                    .val("unlike")
//                    .attr('disabled', 'disabled');
            $('button').prop('disabled', true);
            $.ajax({
                url: '/test_save',
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false

            });
        });
    });
</script>

</body>
</html>