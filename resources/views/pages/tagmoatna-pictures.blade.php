@extends('pages.templet')
@section('content')
    <div class="row" id="rtagmoevent">
        <div class=" col-xs-6 col-sm-8 col-md-9 col-lg-10 top pull-right" id="tagmo">
            <img src="/images/pictures/m1.jpg" class="imgstyle">
            <span id="ta">  تجمعاتنا     </span>
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="position: relative; top: 5px;"></span>
            <span id="ta">  تجمع اتكلمى الاول     </span>
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="position: relative; top: 5px;"></span>
            <span id="ta">  صور     </span>
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
                <div class="col-xs-4 col-sm-5 col-md-4 col-lg-3" id="tgm"> صور</div>
                <hr class="col-xs-8 col-sm-7 col-md-8 col-lg-9" id="hrt">
            </div>
            <div class="container-fluid" id="links"style="margin-bottom:50px;background-color: white; padding: 10px;">
                <a href="images/pictures/tagmoevent/5.jpg"><img id="" class=" imgdiv img-responsive pull-right" src="images/pictures/tagmoevent/5.jpg"/></a>
                <a href="images/pictures/tagmoevent/6.jpg"><img id="" class=" imgdiv img-responsive pull-right" src="images/pictures/tagmoevent/6.jpg"/></a>
                <a href="images/pictures/tagmoevent/5.jpg"><img id="" class=" imgdiv img-responsive pull-right" src="images/pictures/tagmoevent/5.jpg"/></a>
                <a href="images/pictures/tagmoevent/6.jpg"><img id="" class=" imgdiv img-responsive pull-right" src="images/pictures/tagmoevent/6.jpg"/></a>
                <a href="images/pictures/tagmoevent/5.jpg"><img id="" class=" imgdiv img-responsive pull-right" src="images/pictures/tagmoevent/5.jpg"/></a>
                <a href="images/pictures/tagmoevent/6.jpg"><img id="" class=" imgdiv img-responsive pull-right" src="images/pictures/tagmoevent/6.jpg"/></a>


            </div>
            </div>
        </div>





    @stop