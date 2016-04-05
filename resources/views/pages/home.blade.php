@extends('pages.templet')
@section('content')
    <div class="row"  id="middle">
        <div class=" col-md-9 col-lg-9 pull-right" id="slider" >
            <div class="row  slider-main-navigator " style=" margin-top: 0!important; margin-left:15px!important; margin-right: 15px!important;margin-bottom: 16px!important;">
                <div class=" hidden-xs col-sm-3 col-md-3 col-lg-3 " style="padding-right: 0px; padding-left: 0px; ">
                    <div class="col-sm-3 col-md-3 col-lg-3" style=" height:450px;background-color:#E8FCFF; padding-right: 0px; padding-left: 0px; float: right;" >
                        <a href="/Events" > <img class="img-responsive" style="height: 450px" id="slide1" src="/images/pictures/slide/60.png" ></a>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3" style=" height:450px;background-color:#D4F4FA; padding-right: 0px; padding-left: 0px; float: right;  ">
                        <a href="/OurWorld"><img class="img-responsive" style="height: 450px"id="slide2" src="/images/pictures/slide/70.png"/></a>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3" style=" height:450px;background-color:#C0E6ED; padding-right: 0px; padding-left: 0px; float:right;">
                        <a href="/JoinUs"><img class="img-responsive"style="height: 450px"id="slide3" src="/images/pictures/slide/80.png"/></a>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3" style=" height:450px;background-color:#B0D2D9; padding-right: 0px; float: right; padding-left: 0px; border-radius:5px 0px 0px 5px ;">
                        <a href="/Speak"><img class="img-responsive" style="height: 450px" id="slide4"src="/images/pictures/slide/90.png"/></a>
                    </div>
                </div>
                <!-- Start the Slider -->
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9"  id="smallslider"style=" padding-right:0px; padding-left:0; ">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators ">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                             <div class="item active">
                                   <a href="/Events"> <img src="/images/pictures/fa/1.jpg"  alt="..."></a>
                                    {{--<div class="carousel-caption"></div>--}}
                             </div>
                            <div class="item">
                                <a href="/OurWorld"> <img src="/images/pictures/fa/2.jpg"  alt="..."></a>
                                {{--<div class="carousel-caption"></div>--}}
                            </div>
                            <div class="item">
                                <a href="/JoinUs"> <img src="/images/pictures/fa/3.jpg"  alt="..."></a>
                                {{--<div class="carousel-caption"></div>--}}
                            </div>
                            <div class="item">
                                <a href="/Speak"> <img src="/images/pictures/fa/4.jpg"  alt="..."></a>
                                {{--<div class="carousel-caption"></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End the Slider -->
            </div>

            <!-- Start the downboxes -->

            <div class="row">

                <!-- Start the etkalemy box -->
                <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                    <div class="thumbnail" style="height:323px; ">
                        <div class="down">
                            <div class="pad">      إتكلمي</div>
                            <hr  size="2" style="border-color:#011A55!important; margin-top:0px!important;"/>
                            <img src="/images/pictures/e.png" class="img-thumbnail img-responsive " style="margin-left: auto; margin-right: auto;display: block;vertical-align: middle ">
                        </div>
                        <div class="caption">
                            <p style="text-align:right;font-size: 19px;font-family:elight;color: #001652;">مشاركتك بالقلم و الصوت و الصورة</p>
                        </div>
                    </div>
                </div>
                <!-- End the etkalemy box -->

                <!-- Start the doniana box -->
                <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs ">
                    <div class="thumbnail" style="height:323px; ">
                        <div class="down">
                            <div class="pad"> دنيانا</div>
                            <hr size="2" style="border-color:#011A55!important; margin-top:0px!important;"/>
                            <img src="/images/pictures/d.png" class="img-thumbnail img-responsive" style="margin-left: auto;margin-right: auto;display: block;vertical-align: middle">
                        </div>
                        <div class="caption">
                            <p style="text-align:right;font-size: 19px;font-family:elight;color: #001652;">تابع معانا أهم اللحظات اللى حصلت فى أول تجمعات ,,إتكلمى,, فبراير 2016</p>
                        </div>
                    </div>
                </div>
                <!-- End the doniana box -->

                <!-- Start the tagmo3tna box -->
                <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                    <div class="thumbnail" style="height:323px; ">
                        <div class="down">
                            <div class="pad">   تجمعاتنا</div>
                            <hr size="2" style="border-color:#011A55!important; margin-top:0px!important;"/>
                        </div>
                        <div class="caption">
                            <p style="text-align:right;font-size: 19px;font-family:elight; color: #001652; ">تجمعنا الاول فى القاهرة السبت 20 فبراير 2016 . هنتقابل و نسمع بعضهنتقابل ونسمع بعض ، يمكن نبكييمكن نبتسم ، يمكن نضحكلما نحكى تجاربنا</p>
                        </div>
                    </div>
                </div>
                <!-- End the tagmo3tna box -->

                <!-- Start the tagmo3tna box for xs screen-->
                <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                    <div class="thumbnail" style="height:323px; ">
                        <div class="down"> تجمعاتنا
                            <hr style="border-color:#011A55!important; margin-top:0px!important;"/>
                        </div>
                        <div class="caption">
                            <p style="text-align:right;font-size: 19px;font-family:elight; color: #001652; ">تجمعنا الاول فى القاهرة السبت 20 فبراير 2016 . هنتقابل و نسمع بعضهنتقابل ونسمع بعض ، يمكن نبكييمكن نبتسم ، يمكن نضحكلما نحكى تجاربنا</p>
                        </div>
                    </div>
                </div>
                <!-- End the tagmo3tna box for xs screen-->

                <!-- Start the donyana box for xs screen-->
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 ">
                    <div class="thumbnail" style="height:323px; ">
                        <div class="down"> دنيانا
                            <hr style="border-color:#011A55!important; margin-top:0px!important;"/>
                            <img src="/images/pictures/d.png" class="img-thumbnail img-responsive" style="margin-left: auto;margin-right: auto;display:block;vertical-align: middle">
                        </div>
                        <div class="caption">
                            <p style="text-align:center;font-size: 19px;font-family:elight;color: #001652;">
                                تابع معانا أهم اللحظات اللى حصلت فى أول تجمعات ,,إتكلمى,, فبراير 2016
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End the donyana box for xs screen-->

                <!-- Start the etkalemy box for xs screen-->
                <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                    <div class="thumbnail" style="height:323px; ">
                        <div class="down"> إتكلمي
                            <hr style="border-color:#011A55!important; margin-top:0px!important;"/>
                            <img src="/images/pictures/e.png" class="img-thumbnail img-responsive " style="margin-left: auto;margin-right: auto;display: block;vertical-align: middle ">
                        </div>
                        <div class="caption">
                            <p style="text-align:center;font-size: 19px;font-family:elight;color: #001652;">مشاركتك بالقلم و الصوت و الصورة ...</p>
                        </div>
                    </div>
                </div>
                <!-- End the etkalemy box for xs screen-->
            </div>
            <!-- End the downboxes -->
        </div>

        <!-- Start the rightboxes -->

        <!-- Start the right box for lg&md&xs screen -->
        <div class="col-xs-12 hidden-sm col-md-3 col-lg-3    pull-left" id="rightbox">
            <div class="row">

                <!-- Start the opinion box -->
                <div class="col-md-12 col-sm-4 col-xs-12" id="middleleft">
                    <div class="thumbnail" id="left">
                        <p class="header-name">رأيك ايه؟<img src="/images/pictures/p.png" ></p>
                        <p class="text">برأيك من تستحق لقب الاكثر شجاعة من القصص الاتية</p>
                        <label class="Form-label--tick">
                            <input type="radio" value="1" name="SomeRadio" class="Form-label-radio" >
                            <span style=" text-decoration:none;color: #376773; font-size:19px; font-family: elight;" class="Form-label-text">أميرة أحمد</span>
                        </label>
                        <label  class="Form-label--tick">
                            <input type="radio" value="2" name="SomeRadio" class="Form-label-radio " >
                            <span style="color: #376773; font-size:19px; font-family: elight;" class="Form-label-text">لبنى أحمد </span>
                        </label>
                        <label  class="Form-label--tick">
                            <input type="radio" value="2" name="SomeRadio" class="Form-label-radio " >
                            <span style="color: #376773; font-size:19px; font-family: elight;" class="Form-label-text">أية حسن  </span>
                        </label>
                    </div>
                </div>
                <!-- End the opinion box -->

                <!-- Start the sharky_m3na box -->
                <div class="col-md-12 col-sm-4 col-xs-12" id="middleleft">
                    <div class="thumbnail" id="left">
                        <p class="header-name">شاركى معانا<img src="/images/pictures/p.png" ></p>
                        <p class="text">كونى انتى صاحبة القصة القادمة وشاركينا تجربتك و اشتركى الان</p>
                    </div>
                </div>
                <!-- End the sharky_m3na box -->

                <!-- Start the tags box -->
                <div class="col-md-12 col-sm-4 col-xs-12" id="middleleft">
                    <div class="thumbnail" id="left" style="height: 323px;">
                        <p style=" padding-right:10px;!important; background-color: #376773;color: white;font-size:26px; font-family:cent; ">Tags<img src="/images/pictures/p.png" ></p>
                        <p class="text" style="max-height:239px;">اتكلمى دنيانا افينتات</p>
                    </div>
                </div>
                <!-- End the tags box -->
            </div>
        </div>
        <!-- Start the right box for small screen -->
        <div class=" hidden-xs col-sm-12 hidden-md hidden-lg">
            <div class="row" >
                <div class="col-md-12 col-sm-4 col-xs-12">
                    <!-- Start the tags box -->
                    <div class="thumbnail" id="left">
                        <p style="padding-right:10px; !important;background-color: #376773;color: white;font-size:26px; font-family:cent;">Tags<img src="/images/pictures/p.png" ></p>
                        <div class="tagcloud">
                            <a href='' class='tag-link-1386' title='' style='font-size: 8.175pt;'>Hijab الحجاب</a>
                            <a href='' class='tag-link-245' title='' style='font-size: 12.2pt; display: inline-block'>أقباط مصر</a>
                            <a href='' class='tag-link-259' title='' style='font-size: 9.75pt;'>أمريكا</a>
                            <a href='' class='tag-link-229' title='' style='font-size: 22pt;'>اسلام سياسي</a>
                            <a href='' class='tag-link-572' title='' style='font-size: 10.625pt;'>الأزهر</a>
                        </div>
                    </div>
                    <!-- End the tags box -->
                </div>
                <!-- Start the sharky_m3na box -->
                <div class="col-md-12 col-sm-4 col-xs-12">
                    <div class="thumbnail" id="left">
                        <p class="header-name">شاركى معانا<img src="/images/pictures/p.png" ></p>
                        <p class="text">كونى انتى صاحبة القصة القادمة وشاركينا تجربتك و اشتركى الان</p>
                    </div>
                </div>
                <!-- End the sharky_m3na box -->

                <!-- Start the opinion box -->
                <div class="col-md-12 col-sm-4 col-xs-12">
                    <div class="thumbnail" id="left">
                        <p class="header-name">رأيك ايه؟<img src="/images/pictures/p.png" ></p>
                        <p class="text">برأيك من تستحق لقب الاكثر شجاعة من القصص الاتية</p>
                        <label class="Form-label--tick">
                            <input type="radio" value="1" name="SomeRadio" class="Form-label-radio" >
                            <span style=" text-decoration:none;color: #376773;font-size:19px;" class="Form-label-text">أميرة أحمد</span>
                        </label>
                        <label  class="Form-label--tick">
                            <input type="radio" value="2" name="SomeRadio" class="Form-label-radio " >
                            <span style="color: #376773; font-size:19px;" class="Form-label-text">لبنى أحمد </span>
                        </label>
                        <label  class="Form-label--tick">
                            <input type="radio" value="2" name="SomeRadio" class="Form-label-radio " >
                            <span style="color: #376773; font-size:19px;" class="Form-label-text">أية حسن  </span>
                        </label>
                    </div>
                </div>
                <!-- End the opinion box -->
            </div>
        </div>
        <!-- End the right boxes -->
    </div>


    


@stop





