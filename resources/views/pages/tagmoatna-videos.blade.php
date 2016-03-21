@extends('pages.templet')
@section('content')
    <div class="row" id="rtagmoevent">
        <div class=" col-xs-6 col-sm-8 col-md-9 col-lg-10 top pull-right" id="tagmo">
            <img src="/images/pictures/m1.jpg" class="imgstyle">
            <span id="ta">  تجمعاتنا     </span>
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="position: relative; top: 5px;"></span>
            <span id="ta">  تجمع اتكلمى الاول     </span>
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="position: relative; top: 5px;"></span>
            <span id="ta">  فيديوهات     </span>
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
                <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm"> فيديوهات</div>
                <hr class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt">
            </div>
                <div class="container-fluid" style="margin-bottom:60px;background-color: white; padding: 10px;">
                    <div class=" video-thumb  pull-right">
        <span class=" yt-thumb-simple">
            <div class="imgWrape img-responsivee">
                <img class="imgWrape img-responsivee" src="http://img.youtube.com/vi/sLwrG2bwBDI/0.jpg " alt="polaroid"/>
                <a href="/tagmoatna-videoplay"><p class="imgDescriptione">
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
                </div>
            </div>

</div>
    </div>



@stop