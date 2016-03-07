@extends('pages.templet')
@section('content')
<div class="row" id="rtagmo">
    <div  class=" col-xs-6 col-sm-8 col-md-9 col-lg-10 top pull-right" id="tagmo">
    <img src="/images/pictures/m1.jpg" class="imgstyle">
          تجمعاتنا
    
    </div>
<div class=" col-xs-6  col-sm-4 col-md-3  col-lg-2 pull-left" id="dtyr">
    <div class="row dropdown">
        <a id="dLabel" role="button" data-toggle="dropdown" class="btn drop" data-target="#" href="#">
            <span id='tarek'> التاريخ</span>

            <span class="caret"></span>
        </a>
        
        <ul class="dropdown-menu multi-level" id="dxs" role="menu" aria-labelledby="dropdownMenu">
            <li><a href="#">2015</a></li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">2016</a>
                <ul class="dropdown-menu" style="background-color: #C4E9F2; font-family: ebold; font-size: 16px; width: 195px; direction: rtl; text-align:right;">
                    <li><a tabindex="-1" href="#">تجمع اتكلمى الأول</a></li>
                    <li class="divider" style="width: 100%"></li>
                    <li><a href="#">تجمع اتكلمى الثانى</a></li>
                    <li class="divider" style=" width:100% "></li>
                    <li><a href="#">تجمع اتكلمى الشامل</a></li>
                </ul>
            </li>
            <li><a href="#">2017</a></li>
        </ul>
    </div>
</div>
</div>
    <div class="row" id="ro">
        <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm">تجمعات قادمة </div>
        <hr  class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt">
    </div>
    <div class="row"  id="sli">
        <div id="the-slider" class="carousel slide" data-ride="carousel" style="margin: 50px 0!important;">

            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/pictures/s1.jpg" class="img-responsive" alt="...">
                    <div class="carousel-caption2">
                        اعرفى اهم اللحظات فى أولى تجمعات اتكلمى فبراير 2016
                    </div>
                    </div>
                      <!--item 1-->
                <div class="item">
                    <img src="images/pictures/s1.jpg" class="img-responsive" alt="...">
                    <div class="carousel-caption2">
                        اعرفى اهم اللحظات فى أولى تجمعات اتكلمى فبراير 2016
                    </div>
                </div> <!--item 1-->
            </div> <!--carousel-inner-->

            <!--controls-->
            <a class="left carousel-control" href="#the-slider" role="button" data-slide="prev">
                <span ><img id="imgslil" src="/images/pictures/left.png" /></span>

            </a>
            <a class="right carousel-control" href="#the-slider" role="button" data-slide="next">
                <span><img id="imgslir" src="/images/pictures/right.png" /></span>
            </a>

        </div><!--the-slider-->
    </div>
<div class="row" id="ro">
    <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3" id="tgm">تجمعات سابقة </div>
    <hr  class="col-xs-5 col-sm-7 col-md-8 col-lg-9" id="hrt">
</div>
<div class="content row" id="cr">
    <div class="row" style="margin-bottom: 28px!important;">
    <div class="col-md-6"  id="pic">
        <div class="imgWrap img-responsive">
            <img  class="imgWrap img-responsive" src="images/pictures/pic/1.jpg" alt="polaroid" />
            <p class="imgDescription">
            <span  id ="txtimg">   تجمع اتكلمى الاول  </span>
            </p>
        </div>
    </div>
    <div class="col-md-6" id="pic" >
        <div class="imgWrap img-responsive">
            <img  class="imgWrap img-responsive" src="images/pictures/pic/2.jpg" alt="polaroid" />
            <p class="imgDescription">
                <span  id ="txtimg"> تجمع اتكلمى التانى </span>
            </p>
        </div>
    </div>
    </div>
    <div class="row" style="margin-bottom: 28px!important;">
    <div class="col-md-6" id="pic">
        <div class="imgWrap img-responsive">
            <img  class="imgWrap img-responsive" src="images/pictures/pic/3.jpg" alt="polaroid" />
            <p class="imgDescription">
                <span  id ="txtimg"> تجمع اتكلمى الثالث </span>
            </p>
        </div>
        </div>
    <div class="col-md-6" id="pic">
        <div class="imgWrap img-responsive">
            <img  class="imgWrap img-responsive" src="images/pictures/pic/4.jpg" alt="polaroid" />
            <p class="imgDescription">
                <span  id ="txtimg"> تجمع اتكلمى الرابع </span>
            </p>
        </div>
    </div>
</div>

@stop