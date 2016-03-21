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
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/sLwrG2bwBDI" frameborder="0" allowfullscreen></iframe>
            <div  class="container-fluid" style=" padding: 0!important; margin-top:-5px;background-color: white">
                <div class="row" style="float:right;padding: 20px;">
                    <span style=" padding-left:10px;float:right;font-family: ebold;font-size: 25px"> مشاركة علي</span>
                    <span> <a href=""><img src="images/pictures/tagmoevent/facebook.png" style="max-width: 45%;"></a>
                        <a href=""><img src="images/pictures/tagmoevent/twitter.png" style="max-width: 45%;"></a></span>
                </div>
                <hr style=" width: 100%!important;"/>
                <div class=" row pull-right" style="font-size: 25px; font-family: ebold; padding: 20px;">سارة أحمد كيف تصبح ناجح فى خطوات</div>
                <div class="row pull-right" style=" text-align:right;font-size: 15px; font-family: ebold;padding-bottom: 30px; padding-right: 20px;">سارة أحمد طالبة جامعية استطاعت في ظروق ضيقة ان تجمع بين  الدراســـــــة والـعمل وتحقيق جزء من طموحتها كأخصائية نفسية مع انجاز عدد من الدبلومات والدراسات المـــــــختـلــــفـــة. سارة أحـــمد طالبة جامعية استطاعت في ظروق ضيقة ان تجمع بين  الدراسة والعمل وتحقيق جزء من طموحتها كأخصائية نفسية مع انجاز عدد من الدبلومات والدراسات المختلفة</div>
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