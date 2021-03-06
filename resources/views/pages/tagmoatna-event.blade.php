@extends('pages.templet')
@section('content')
    <div class="row" id="rtagmoevent">
        @foreach($event_data as $data)

         <!-- Start the Event Name -->
            <div class=" col-xs-6 col-sm-8 col-md-9 col-lg-10 top pull-right" id="tagmo">
                <img src="/images/pictures/m1.jpg" class="imgstyle">
                <span id="ta">  تجمعاتنا >   </span>
                <span id="ta">{{$data->name}}</span>
            </div>
        <!-- End the Event Name -->

        <!-- Start the dropdown date of events -->
        <div class=" col-xs-6  col-sm-4 col-md-3  col-lg-2 pull-left" id="dtyr">
            <div class="row dropdown">
                <a id="dLabel" role="button" data-toggle="dropdown" class="btn drop" data-target="#" href="#" style="outline: 0!important;">
                    <span id='tarek'> تاريخ التجمع</span>
                    <button class="btn btn-success" id="btncaret"><span class="caret"></span></button>
                </a>
                <ul class="dropdown-menu multi-level" id="dxs" role="menu" aria-labelledby="dropdownMenu">
                    @foreach($years as $year)
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">{{$year}}</a>
                            <ul class="dropdown-menu" id="dds">
                                @foreach($eventnames_and_year as $eventname_and_year)
                                    @if($eventname_and_year['year'] == $year)
                                        <li><a tabindex="-1" id="lis"
                                               href="/Events/<?php echo implode("",explode("-",date('Y-m-d', strtotime($eventname_and_year['date'])))); ?>">{{$eventname_and_year['name']}}</a>
                                        </li>
                                        <li class="divider" style="width: 100%"></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- End the dropdown date of events -->
    </div>

    <div class="container-fluid" style=" padding: 0; background-color: #D5E4E8; color: #376773">
        <div class="container-fluid" id="marginmobile">
            <div class="row" id="picslider">
                <img class="img-responsive" style="height: 395px;width: 100%;"
                     src="/uploadfiles/events/{{$data->name}}/{{$data->image}}"/>
                <div>
                    <div id="captionevent1"> {{$data->name}}</div>
                    <div id="captionevent2">
                        {{--<p style=" text-align:center;margin:0;padding:0">القاهرة يوم السبت 20 فبراير </p>--}}
                        <?php

                        $months = array(
                                "Jan" => "يناير",
                                "Feb" => "فبراير",
                                "Mar" => "مارس",
                                "Apr" => "أبريل",
                                "May" => "مايو",
                                "Jun" => "يونيو",
                                "Jul" => "يوليو",
                                "Aug" => "أغسطس",
                                "Sep" => "سبتمبر",
                                "Oct" => "أكتوبر",
                                "Nov" => "نوفمبر",
                                "Dec" => "ديسمبر"
                        );

                        $your_date = $data->date; // for example

                        $en_month = date("M", strtotime($your_date));

                        $ar_month = $months[$en_month];
                        $day = date('N', strtotime($your_date));
                        ?>
                        <p style=" text-align:center;margin:0;padding:0">
                            <span>{{$data->place}}</span><span>يوم</span><span>{{$data->day}}</span><span>{{$day}}</span><span>{{$ar_month}}</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> عن الإيفينت</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt">
            </div>
            <div class="row" style=" direction: rtl;  padding:25px; background-color:white; margin-bottom: 20px!important;">
                <div id="txtaboutevent">{{$data->description}}</div>
                <div class="row"><hr/></div>
                <div class="row">
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right" id="socialmedia">
                        <a href="{{$data->facebook_link}}"><img src="/images/pictures/tagmoevent/facebook.png"
                                                                style="max-width: 45%;"></a>
                        <a href="{{$data->twitter_link}}"><img src="/images/pictures/tagmoevent/twitter.png"
                                                               style="max-width: 45%;"></a>
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-left" id="pdfpic">
                        <a href="#"><img src="/images/pictures/tagmoevent/pdf.png" style="max-width: 65%;"></a>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right">
                        <span class="pull-left" id="followevent">  لمتابعة الايفينت </span>
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right" id="pdftxt">
                        <span style="font-size: 15px; font-family:ebold;"> برنامج اليوم  </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="imgWrap img-responsive" style=" height:595px!important;width: 100%!important;">
                <img class="imgWrap img-responsive" src="/images/pictures/tagmoevent/2.jpg" alt="polaroid" id="picevent"/>
                <a href="/Speak">
                    <button id="sharewithus" class="btn btn-primary"> و شاركى معانا الان</button>
                </a>
            </div>
        </div>

        <!-- start the vedios of event -->
        <div class="container-fluid" id="marginmobile">
            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> فيديوهات</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt">
            </div>

            <div class="container-fluid" style="background-color: white; padding: 10px;">

                @if($number_of_vedios <= 3)
                    @foreach($vedioes as $vedio)
                        <div class=" video-thumb  pull-right">
                            <span class=" yt-thumb-simple">
                                <div class="imgWrape img-responsivee">
                                    <?php $vedio_name = substr($vedio->youtube_url, strrpos($vedio->youtube_url, '/') + 1);?>
                                    <img class="imgWrape img-responsivee"
                                         src="http://img.youtube.com/vi/{{$vedio_name}}/{{$vedio->image}} "
                                         alt="polaroid"/>
                                        @if(Auth::check())
                                            @if(count($seens) == "0")
                                                <form class="seen">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="speech_id" value="{{$vedio->id}}">
                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                    <button> <a href="/tagmoatna-videoplay/{{$vedio->id}}"><p class="imgDescriptione"><span id="txtimge1"> {{$vedio->title}}</span>
                                                                <span id="txtimge3"><img src="/images/pictures/tagmoevent/4.png"/> </span></p></a></button>
                                                </form>
                                                @else
                                                @foreach($seens as $seen)
                                                    @if(($seen->user_id == Auth::user()->id)&&($seen->speech_id == $vedio->id))
                                                       @if($seen->seen_status == "1")
                                                            <a href="/tagmoatna-videoplay/{{$vedio->id}}"><p class="imgDescriptione"><span id="txtimge1"> {{$vedio->title}}</span>
                                                                    <span id="txtimge3"><img src="/images/pictures/tagmoevent/4.png"/> </span></p></a>
                                                           @else
                                                            <form class="seen">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <input type="hidden" name="speech_id" value="{{$vedio->id}}">
                                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                <button> <a href="/tagmoatna-videoplay/{{$vedio->id}}"><p class="imgDescriptione"><span id="txtimge1"> {{$vedio->title}}</span>
                                                                            <span id="txtimge3"><img src="/images/pictures/tagmoevent/4.png"/> </span></p></a></button>
                                                            </form>
                                                        @endif
                                                        @endif
                                                    @endforeach
                                            @endif

                                          @else
                                        <a href="/tagmoatna-videoplay/{{$vedio->id}}"><p class="imgDescriptione"><span id="txtimge1"> {{$vedio->title}}</span>
                                                <span id="txtimge3"><img src="/images/pictures/tagmoevent/4.png"/> </span></p></a>
                                        @endif
                                </div>
                            </span>
                        </div>
                    @endforeach
                @else
                    @foreach($vedioes as $key=>$vedio)
                        @if($key < 3)
                            <div class=" video-thumb  pull-right">
                                <span class=" yt-thumb-simple">
                                    <div class="imgWrape img-responsivee">
                                        <?php $vedio_name = substr($vedio->youtube_url, strrpos($vedio->youtube_url, '/') + 1);?>
                                        <img class="imgWrape img-responsivee"
                                             src="http://img.youtube.com/vi/{{$vedio_name}}/{{$vedio->image}} "
                                             alt="polaroid"/>
                                            <a href="/tagmoatna-videoplay/{{$vedio->id}}"><p class="imgDescriptione"><span id="txtimge1"> {{$vedio->title}}</span>
                                                                    <span id="txtimge3"><img src="/images/pictures/tagmoevent/4.png"/> </span></p></a>

                                    </div>
                                </span>
                            </div>
                        @endif
                    @endforeach

                    <a href="/tagmoatna-videos/{{$data->id}}"> <img src="/images/pictures/tagmoevent/3.png" id="moreimg"/></a>

                @endif

            </div>

        </div>
        <!-- End the vedios of Event -->


        <div class="container-fluid" id="marginmobile">

            <!-- start the pics of event -->
            <div class="row" id="ronew">
                <div class="col-xs-4 col-sm-5 col-md-4 col-lg-3" id="tgm"> صور</div>
                <hr class="col-xs-8 col-sm-7 col-md-8 col-lg-9" id="hrt">
            </div>
            <div class="container-fluid" style="background-color: white; padding: 10px;">
                @if($number_of_pictures <= 3)
                    @foreach($pictures as $picture)
                        <img id="imgdiv" class="img-responsive pull-right" src="/uploadfiles/events/{{$data->name}}/{{$picture->pic}}"/>
                    @endforeach
                @else
                    @foreach($pictures as $key=>$picture)
                        @if($key < 3)
                            <img id="imgdiv" class="img-responsive pull-right" src="/uploadfiles/events/{{$data->name}}/{{$picture->pic}}"/>
                        @endif
                    @endforeach

                    <a href="/tagmoatna-pictures/{{$data->id}}"> <img src="/images/pictures/tagmoevent/3.png" id="moreimg"/></a>
                @endif
            </div>
            <!-- End the pics of event -->
            @endforeach


            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> لتسجيل الحضور</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt" style="margin-top:25px!important; ">
            </div>
            <div class="row">
            <!-- registration for members-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pull-right" id="rightdiv">
            <form  role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row" style=" background-color: white;text-align: center;padding: 38px 0!important;">
            <span style=" font-family: ebold; font-size: 35px;">لتسجيل الأعضاء </span>
            </div>
            <div class="row" id="rmember">
            <div class="form-group1 ">
            <label class="control-label col-sm-3 pull-right" for="email" style=" color: #376773; font-family: ebold; font-size: 23px;  text-align: right;">الإيميل </label>
            <div class="col-sm-9 pull-left" style=" height: 23px">
            <input type="email" class="form-control" id="email" style="background-color: #D5E4E8;">
            </div>
            </div>
            <div class="form-group1">
            <label class="control-label col-sm-3 pull-right" for="password" style=" color: #376773; font-family:ebold;  font-size: 23px;  text-align: right;">الباسورد </label>
            <div class="col-sm-9 pull-left" style=" height: 23px">
            <input type="password" class="form-control" id="password" style="background-color: #D5E4E8;">
            </div>
            </div>

            </div>
            <div class="row" style="padding-bottom: 124px;background-color: white; padding-left:95px;">
            <button type="button" class="btn btn-info" style=" font-family:Cent; font-size: 22px; height: 40px;
            background-color:#78c8ab;
            border-color:#78c8ab; border-radius:3px;" data-toggle="modal" data-target="#myModal" id="submit"> Submit</button>
            </div>
            </form>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"
            style="  padding:15px;background-color:#D5E4E8;margin-top: 150px;">
            <div style="background-color: white">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="font-family: ebold;font-size: 20px; text-align: center;"
            class="modal-title">اختر طريقة للدفع</h4>
            </div>
            <div class="modal-body" style="height: 110px;">
            <form  method="post" action="/pay" enctype="multipart/form-data" class="form_style">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="email2" id="email2" >
                <input type="hidden" name="event_name" id="event_name" value="{{$data->name}}" >
                <input type="hidden" name="price" id="price" value="{{$data->price}}" >
                <button type="submit" class="col-xs-6 col-lg-6 pull-right"><img class=" img-responsive pull-right"
                                                                  src="/images/pictures/donyana/paypal.png" /></button>
                <button type="submit" class="col-xs-6 col-lg-6 pull-left" id="buttoneven"><img class=" img-responsive pull-left"
                                                                                 src="/images/pictures/donyana/even.png"/></button>




            {{--<button type="submit" class="btn btn-default center-block" >pay--}}
            {{--<img class="  col-xs-6 col-lg-6 img-responsive pull-right" style="border-left: 1px solid;display:inline-block" src="/images/pictures/donyana/paypal.png">--}}
            {{--</button>--}}
            {{--<button type="submit" class="btn btn-default center-block" >--}}
            {{--<img class=" col-xs-6  col-lg-6 img-responsive pull-left" src="/images/pictures/donyana/even.png">--}}
            {{--</button>--}}
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>

            </div>
            </div>



            </div>
            <!-- registration for non members-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pull-left" id="leftdiv">
            <form  role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row" style="background-color: white;text-align: center;padding: 38px 0!important;"><span style=" font-family: ebold; font-size: 35px;">لغير الأعضاء </span></div>
            <div class="row" style=" background-color: white; padding-left:40px;">
            <div class="form-group1">
            <label class="control-label col-sm-5 pull-right" for="email" style=" color: #376773; font-family:ebold; font-size: 23px;  text-align: right;">الأسم </label>

            <div class="col-sm-7 pull-left" style=" height: 23px">
            <input type="text" class="form-control" style="background-color: #D5E4E8;">
            </div>
            </div>
            <div class="form-group1">
            <label class="control-label col-sm-5 pull-right" for="password" style=" color: #376773; font-family:ebold; font-size: 23px;  text-align: right;">البريدالإلكترونى </label>

            <div class="col-sm-7 pull-left" style=" height: 23px">
            <input type="email" class="form-control" id="password" id="email" style="background-color: #D5E4E8;">
            </div>
            </div>

            </div>
            <div class="row" style=" padding-bottom: 40px;background-color: white; padding-left:55px;">

                    <button type="button" class="btn btn-info" style=" font-family:Cent; font-size: 22px; height: 40px;
            background-color:#78c8ab;
            border-color:#78c8ab; border-radius:3px;" data-toggle="modal" data-target="#myModal" id="submit"> Submit</button>

            {{--<div class="hidden-xs hidden-sm hidden-md">--}}
            {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal" id="submit" style=" font-family:Cent; font-size: 22px; height: 40px; background-color:#78c8ab;border-color:#78c8ab; border-radius:3px;">Submit</button>--}}
            {{--</div>--}}
            {{--<div class="hidden-lg">--}}
            {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal" id="submit" style=" font-family:Cent; font-size: 22px; height: 40px; background-color:#78c8ab;border-color:#78c8ab; border-radius:3px;">Submit</button>--}}

            {{--<div id="light1" class="white_content1">--}}
            {{--<a href="javascript:void(0)"--}}
            {{--onclick="document.getElementById('light1').style.display='none';document.getElementById('fade1').style.display='none'">Close</a>--}}

            {{--<div class="row" style="text-align: center;"><span--}}
            {{--style="font-family: ebold;font-size: 20px;"> اختر طريقة للدفع </span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div id="fade1" class="black_overlay1"></div>--}}
            {{--</div>--}}
            </div>
            <div class="row" style=" padding-bottom:40px;background-color: white;">
            <div style=" text-align:right; padding-right:20px;font-size: 16px; font-family: ebold;">
            ملحوظة :
            يرجى العلم ان السابق هو تسجيل لحضور الايفنت أما اذا كنت تريد الحصول على عضوية مستديمة
            بالموقع و التسجيل برجاء الضغط <a style="text-decoration:underline!important;"
            href="#">هنا</a></div>
            </div>
            </form>
            </div>
            </div>



            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> التعليقات</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrte">
            </div>

            <div id="container" class="container-fluid comment-box" style=" overflow:auto;height:780px;background-color: white; padding: 10px;">
                @foreach($comments as $comment)
                    <div style="background-color:#EEF4F5; padding:20px; margin:25px; height: 200px;overflow: auto;">
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
                                    <input type="hidden" name="event_id" value="{{$data->id}}">
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


            {{--<div id="container" class="container-fluid commentbox" style="height:780px;background-color: white; padding: 10px;"></div>--}}

            @if(Auth::check())
                <form class="form-inline comment_form" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="event_id" value="{{$data->id}}">
                    <input type="hidden" name="user_name" class="user_name" value="{{Auth::user()->english_name}}">
                    <input type="hidden" name="user_image" class="user_pic" value="{{Auth::user()->profile_image}}">

                    <div class="form-group" style=" height:50px; width: 100%;">
                        <div class=" col-xs-4 col-sm-4 col-md-3 col-lg-2 pull-right"
                             style="padding-left:0;padding-right: 0;">
                            <input id="ersal" name="submit" type="submit" value="ارسال" class="btn btn-info">
                        </div>

                        <div class=" col-xs-8 col-sm-8 col-md-9 col-lg-10 pull-left"
                             style=" padding-left:0;padding-right: 0;">
                            <input type="text" class="form-control comment" id="email-term"
                                   style=" height:50px!important;background-color: white!important; border-radius: 0!important;"
                                   name="comment">
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    @if(Auth::check())
    <script>

        $(document).ready(function () {
            var email;
            $("#email").change(function(){
                email = $("#email").val();
                $('#email2').val(email);

            });

            $(".comment_form").submit(function (event) {
                event.preventDefault();

                var user_name ='<?php echo Auth::user()->english_name; ?>' ;
                var user_pic = '<?php echo Auth::user()->profile_image; ?>';
                var user_id = '<?php echo Auth::user()->id; ?>';
                var event_id = '<?php echo $data->id; ?>';
                var token = '<?php echo csrf_token();?>';

   $.ajax( {
                    url: '/event_comment',
                    type: 'POST',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function (data) {

                        $.get( "/get_event_comments/"+event_id)
                                .done(function( data ) {
                                    $('.comment-box').children().hide();
                                    for(var i=0;i<data.length;i++){
                                        if(data[i]["user_image"] == ""){
                                            $(".comment-box").append('<div style="background-color:#EEF4F5; padding:20px;height:200px; margin:25px;">' +
                                                    '<div class="row "><div class="col-lg-1 user_pic" style="padding-right: 85px;">' +
                                                    '<img src="/uploadfiles/user_photo/e.png" width="60px"></div>' +
                                                    '<div class="col-lg-10 user_name"><p style="font-family:Calibri;font-size: 23px; margin: 0;" class="">'+data[i]["user_name"]+'</p></div>' +
                                                    '</div><div class="row pull-right comments" style="font-family: ebold; font-size:18px; "><p>'+data[i]["text"]+'</p></div>' +
                                                    '<div class="row replay_box" style="margin-top: 15px!important;"> ' +
                                                    '<form class="form-inline replay_form" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">' +
                                                    '<input type="hidden" name="_token" value="'+token+'"><input type="hidden" name="article_id" value="'+data[i]["event_id"]+'">' +
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
                                            $(".comment-box").append('<div style="background-color:#EEF4F5; padding:20px;height:200px; margin:25px;">' +
                                                    '<div class="row "><div class="col-lg-1 user_pic" style="padding-right: 85px;">' +
                                                    '<img src=/uploadfiles/user_photo/'+data[i]["user_name"]+'/'+data[i]["user_image"]+'" width="60px"></div>' +
                                                    '<div class="col-lg-10 user_name"><p style="font-family:Calibri;font-size: 23px; margin: 0;" class="">'+data[i]["user_name"]+'</p></div>' +
                                                    '</div><div class="row pull-right comments" style="font-family: ebold; font-size:18px; "><p>'+data[i]["text"]+'</p></div>' +
                                                    '<div class="row replay_box" style="margin-top: 15px!important;"> ' +
                                                    '<form class="form-inline replay_form" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">' +
                                                    '<input type="hidden" name="_token" value="'+token+'"><input type="hidden" name="article_id" value="'+data[i]["event_id"]+'">' +
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
                    url: '/event_comment_replay',
                    type: 'POST',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        $.get( "/get_event_comment_replays/"+comment_id)
                                .done(function( data ) {
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

            $(".seen").submit(function (event) {
                event.preventDefault();
                $.ajax({
                    url: '/save_speech_seen',
                    type: 'POST',
                    data: new FormData(this),
                    processData: false,
                    contentType: false

                });
            });

            $(document).ajaxComplete(function () {
                $('.comment_form').each(function () {
                    this.reset();
                });
            });
        });

    </script>
    @endif


@stop