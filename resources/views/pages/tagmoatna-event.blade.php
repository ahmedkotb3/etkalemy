@extends('pages.templet')
@section('content')
    <div class="row" id="rtagmoevent">
        <div class=" col-xs-6 col-sm-8 col-md-9 col-lg-10 top pull-right" id="tagmo">
            <img src="/images/pictures/m1.jpg" class="imgstyle">
            <span id="ta">  تجمعاتنا     </span>
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="position: relative; top: 5px;"></span>
            <span id="ta">  تجمع اتكلمى الاول     </span>
        </div>
        <div class=" col-xs-6  col-sm-4 col-md-3  col-lg-2 pull-left" id="dtyr">
            <div class="row dropdown">
                <a id="dLabel" role="button" data-toggle="dropdown" class="btn drop" data-target="#" href="#" style="outline: 0!important;">
                    <span id='tarek'> تاريخ التجمع</span>

                    <button class="btn btn-success" id="btncaret"> <span class="caret"></span></button>
                </a>

                <ul class="dropdown-menu multi-level" id="dxs" role="menu" aria-labelledby="dropdownMenu">
                    <li><a href="#">2015</a></li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">2016</a>
                        <ul class="dropdown-menu" id="dds">
                            <li><a tabindex="-1"  id="lis" href="#">تجمع إتكلمى الأول</a></li>
                            <li class="divider" style="width: 100%"></li>
                            <li><a id="lis"href="#">تجمع إتكلمى الثانى</a></li>
                            <li class="divider" style=" width:100% "></li>
                            <li><a id="lis"href="#">تجمع إتكلمى الشامل</a></li>
                        </ul>
                    </li>
                    <li><a href="#">2017</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid" style=" padding: 0; background-color: #D5E4E8; color: #376773">
        <div class="container-fluid" id="marginmobile">
            <div class="row" id="picslider"><img class="img-responsive" src="images/pictures/tagmoevent/1.jpg"/></div>
            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> عن الإيفينت</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt">
            </div>
            <div class="row"
                 style=" direction: rtl;  padding:25px; background-color:white; margin-bottom: 20px!important;">
                <div id="txtaboutevent">
                    لاقى الملتقى الأول لاتكلمى نجاحا عظيما و مجموعة كبيرة من المتكلمات اللاتى قمن بحكى قصص نجاحهن
                    و ما قمن بمواجهته من مشاكل و صعاب كما حضر الايفنت مجموعه من ضيوف الشرف فى مجالات مختلفة
                </div>
                <div class="row">
                    <hr/>
                </div>
                <div class="row">
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right"
                         id="socialmedia">
                        <a href=""><img src="images/pictures/tagmoevent/facebook.png" style="max-width: 45%;"></a>
                        <a href=""><img src="images/pictures/tagmoevent/twitter.png" style="max-width: 45%;"></a></div>
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-left" id="pdfpic" >
                        <a href="#"><img  src="images/pictures/tagmoevent/pdf.png"style="max-width: 65%;"></a></div>

                </div>
                <div class="row">
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right">
                        <span class="pull-left" id="followevent" >  لمتابعة الايفينت </span>
                    </div>
                    <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right" id="pdftxt">
                        <span style="font-size: 15px; font-family:ebold;"> برنامج اليوم  </span></div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="imgWrap img-responsive" style=" height:595px!important;width: 100%!important;">
                <img class="imgWrap img-responsive" src="images/pictures/tagmoevent/2.jpg" alt="polaroid"
                     style=" height:595px!important;width: 100%!important;"/>
                <a href="#">
                    <button id="sharewithus" class="btn btn-primary"> و شاركى معانا الان
                    </button>
                </a>
            </div>
        </div>
        <div class="container-fluid" id="marginmobile">
            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> فيديوهات</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt">
            </div>

            <div class="container-fluid" style="background-color: white; padding: 10px;">
                <div class=" video-thumb  pull-right">
        <span class=" yt-thumb-simple">
            <div class="imgWrape img-responsivee">
                <img class="imgWrape img-responsivee" src="http://img.youtube.com/vi/sLwrG2bwBDI/0.jpg " alt="polaroid"/>
                <a href="#"><p class="imgDescriptione">
                        <span id="txtimge1"> سارة احمد </span>
                        <span id="txtimge2"> كيف تصل الى هدفك بالطريقة الصحيحة </span>
                        <span id="txtimge3"><img src="images/pictures/tagmoevent/4.png"/> </span>
                    </p></a>
            </div>
        </span></div>
                <div class=" video-thumb pull-right">
        <span class="yt-thumb-simple">
         <div class="imgWrape img-responsivee">
             <img class="imgWrape img-responsivee" src="http://img.youtube.com/vi/sLwrG2bwBDI/0.jpg " alt="polaroid"/>
             <a href="#"><p class="imgDescriptione">
                     <span id="txtimge"> تجمع اتكلمى الرابع </span>
                 </p></a>
         </div>
        </span></div>
                <div class=" video-thumb pull-right">
        <span class="yt-thumb-simple">
            <div class="imgWrape img-responsivee">
                <img class="imgWrape img-responsivee" src="http://img.youtube.com/vi/sLwrG2bwBDI/0.jpg " alt="polaroid"/>
                <a href="#"><p class="imgDescriptione">
                        <span id="txtimge"> تجمع اتكلمى الرابع </span>
                    </p></a>
            </div>
        </span></div>
                <a href="/tagmoatna-videos"> <img src="images/pictures/tagmoevent/3.png" id="moreimg"/></a>
            </div>
        </div>
        <div class="container-fluid" id="marginmobile">
            <div class="row" id="ronew">
                <div class="col-xs-4 col-sm-5 col-md-4 col-lg-3" id="tgm"> صور</div>
                <hr class="col-xs-8 col-sm-7 col-md-8 col-lg-9" id="hrt">
            </div>
            <div class="container-fluid" style="background-color: white; padding: 10px;">
                <img id="imgdiv" class="img-responsive pull-right" src="images/pictures/tagmoevent/5.jpg"/>
                <img id="imgdiv" class="img-responsive pull-right" src="images/pictures/tagmoevent/6.jpg"/>
                <img id="imgdiv" class="img-responsive pull-right" src="images/pictures/tagmoevent/5.jpg"/>
                <a href="/tagmoatna-pictures"> <img src="images/pictures/tagmoevent/3.png" id="moreimg"/></a>
            </div>
            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> لتسجيل الحضور</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt" style="margin-top:25px!important; ">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pull-right" id="rightdiv">
                    <div class="row" style=" background-color: white;text-align: center;padding: 38px 0!important;">
                        <span style=" font-family: ebold; font-size: 35px;">لتسجيل الأعضاء </span></div>
                    <div class="row" id="rmember">
                        <div class="form-group1 ">
                            <label class="control-label col-sm-3 pull-right" for="email"
                                   style=" color: #376773; font-family: ebold; font-size: 23px;  text-align: right;">الإيميل </label>

                            <div class="col-sm-9 pull-left" style=" height: 23px">
                                <input type="email" class="form-control" id="email" style="background-color: #D5E4E8;">
                            </div>
                        </div>
                        <div class="form-group1" >
                            <label class="control-label col-sm-3 pull-right" for="password"
                                   style=" color: #376773; font-family:ebold;  font-size: 23px;  text-align: right;">الباسورد </label>

                            <div class="col-sm-9 pull-left" style=" height: 23px">
                                <input type="password" class="form-control" id="password"
                                       style="background-color: #D5E4E8;">
                            </div>
                        </div>

                    </div>
                    <div class="row" style="padding-bottom: 124px;background-color: white; padding-left:95px;">
                        <button class="btn btn-info"
                                style=" font-family:Cent; font-size: 22px; height: 40px; background-color:#78c8ab;border-color:#78c8ab; border-radius:3px;" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
                            Submit
                        </button>
                        <div id="light" class="white_content">
                            <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
                            <div class="row" style="text-align: center;"> <span style="font-family: ebold;font-size: 20px;"> اختر طريقة للدفع </span></div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pull-left" id="leftdiv">
                    <div class="row" style="background-color: white;text-align: center;padding: 38px 0!important;"><span
                                style=" font-family: ebold; font-size: 35px;">لغير الأعضاء </span></div>
                    <div class="row" style=" background-color: white; padding-left:40px;">
                        <div class="form-group1" >
                            <label class="control-label col-sm-5 pull-right" for="email"
                                   style=" color: #376773; font-family:ebold; font-size: 23px;  text-align: right;">الأسم </label>

                            <div class="col-sm-7 pull-left" style=" height: 23px">
                                <input type="text" class="form-control" id="email" style="background-color: #D5E4E8;">
                            </div>
                        </div>
                        <div class="form-group1">
                            <label class="control-label col-sm-5 pull-right" for="password"
                                   style=" color: #376773; font-family:ebold; font-size: 23px;  text-align: right;">البريد
                                الإلكترونى </label>

                            <div class="col-sm-7 pull-left" style=" height: 23px">
                                <input type="email" class="form-control" id="password"
                                       style="background-color: #D5E4E8;">
                            </div>
                        </div>

                    </div>
                    <div class="row" style=" padding-bottom: 40px;background-color: white; padding-left:55px;">
                        <div class="hidden-xs hidden-sm hidden-md">
                            <button class="btn btn-info" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"
                                    style=" font-family:Cent; font-size: 22px; height: 40px; background-color:#78c8ab;border-color:#78c8ab; border-radius:3px;">
                                Submit
                            </button>
                        </div>
                        <div class="hidden-lg">
                        <button class="btn btn-info" onclick="document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'"
                                style=" font-family:Cent; font-size: 22px; height: 40px; background-color:#78c8ab;border-color:#78c8ab; border-radius:3px;">
                            Submit
                        </button>
                        
                        <div id="light1" class="white_content1">
                            <a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='none';document.getElementById('fade1').style.display='none'">Close</a>
                            <div class="row" style="text-align: center;"> <span style="font-family: ebold;font-size: 20px;"> اختر طريقة للدفع </span></div>
                        </div>
                        <div id="fade1" class="black_overlay1"></div></div>
                    </div>
                    <div class="row" style=" padding-bottom:40px;background-color: white;">
                        <div style=" text-align:right; padding-right:20px;font-size: 16px; font-family: ebold;">ملحوظة :
                            يرجى العلم ان السابق هو تسجيل لحضور الايفنت أما اذا كنت تريد الحصول على عضوية مستديمة
                            بالموقع و التسجيل برجاء الضغط <a style="text-decoration:underline!important;"
                                                             href="#">هنا</a></div>
                    </div>
                </div>
            </div>
            <div class="row" id="ronew">
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> التعليقات</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrte">
            </div>
            <div id="container" class="container-fluid" style="height:780px;background-color: white; padding: 10px;"></div>

            <form class="form-inline" role="form" style="text-align:right; padding-top: 2%; padding-bottom: 2%;">
                <div class="form-group" style=" height:50px; width: 100%;">
                    <div class=" col-xs-4 col-sm-4 col-md-3 col-lg-2 pull-right"
                         style="padding-left:0;padding-right: 0;">
                        <button class="btn btn-info" id="ersal">
                            ارسال
                        </button>
                    </div>

                    <div class=" col-xs-8 col-sm-8 col-md-9 col-lg-10 pull-left"
                         style=" padding-left:0;padding-right: 0;">
                        <input type="text" class="form-control" id="email-term"
                               style=" height:50px!important;background-color: white!important; border-radius: 0!important;">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop