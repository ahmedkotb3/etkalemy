@extends('pages.templet')
@section('content')
    <style> *, *:before, *:after {box-sizing:  border-box !important;}

        .row1 {
            -moz-column-width: 18em;
            -webkit-column-width: 18em;
            -moz-column-gap: 1em;
            -webkit-column-gap: 1em;

        }

        .list-group {
            display: inline-block;
            margin:  0.25rem;
            padding:  1rem;
            width:  100%;
        }
        .hidden_div{
            display: none;
        }
    </style>

    <div  class="top" id="marginmobile1"style=" margin-bottom: 20px!important;">
        <img src="/images/pictures/m1.jpg" class="imgstyle">
        <span id="topjoinus">     دنيانا </span>
    </div>

    <div class="container-fluid" style=" padding: 0; background-color: #D5E4E8; color: #376773">
        <div class="container-fluid" id="marginmobile">
            <div class="row"
                 style=" width: 100%; margin-top:50px!important; margin-bottom:30px!important;padding:15px 20px;float:right;background-color: white;">
                <span style=" padding-left:10px;float:right;padding-right:20px; font-family: ebold; ">العرض حسب </span>

                <img class="img-responsive all"  title="Show All" style=" cursor: pointer;  padding-right:10px;padding-left:10px;border-left:1px solid #9DA8AB ;float: right;" src="/images/pictures/donyana/button1.png"/>
                <img class="img-responsive vedio" title="Videos Only" style=" cursor: pointer;  padding-right:10px;padding-left:10px;border-left:1px solid #9DA8AB;float: right;" src="/images/pictures/donyana/button2.png"/>
                <img class="img-responsive article" title=" Articles Only"style=" cursor: pointer; padding-right:10px;padding-left:10px;border-left:1px solid #9DA8AB ;float: right;" src="/images/pictures/donyana/button3.png"/>
                <img class="img-responsive newest" title="Sort From Newest To Oldest" style=" cursor: pointer; padding-right:10px;padding-left:10px;border-left:1px solid #9DA8AB;float: right;" src="/images/pictures/donyana/button4.png"/>
                <img class="img-responsive oldest" title="Sort From Oldest To Newest" style=" cursor: pointer; padding-right:10px;padding-left:10px;border-left:1px solid #9DA8AB;float: right;" src="/images/pictures/donyana/button5.png"/>
                <img class="img-responsive more_seen" title="Top View" style=" cursor: pointer; padding-right:10px;padding-left:10px;float: right;" src="/images/pictures/donyana/button6.png"/>
                <input type="text"  style="background-color: #D5E4E8; font-family: elight;text-align: right; border: none;"
                       placeholder="إبحث هنا  "/>
                <img  style=" cursor: pointer;" src="/images/pictures/donyana/search.png">
            </div>
        </div>
    </div>

    <div class="container-fluid" style=" padding: 0; background-color: #D5E4E8; color: #376773">
        <div class="container-fluid" id="marginmobile">
            <!-- Start the All Articles -->
            <div class="row1 world" style=" direction:rtl;width: 100%;" id>
                @foreach($world as $data)
                    @if($data->type == "2")
                        <div class="menu-category list-group ">
                            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;">
                                <div style="padding: 20px;  border-radius:5px;background-color:white;margin-left: 15px!important; min-height: 155px">
                                    <div class="imgWrapedonaya img-responsiveedonyana">
                                        <img class="imgWrapedonaya img-responsiveedonyana" src="/uploadfiles/articles/{{$data->title}}/{{$data->picture_url}}" alt="polaroid"/>
                                        <a href="/OurWorld-Article/{{$data->id}}">
                                            <div class="imgDescriptione">
                                                <span id="articleimg"><img src="/images/pictures//donyana/txt.png"/></span>
                                                <!-- Start check the seen users -->
                                                @if(Auth::check())
                                                    @if(count($seens) == "0")
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$data->id}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                                        </form>
                                                        @else
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
                                                                @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$data->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                                                </form>
                                                            @endif
                                                        @endforeach
                                                    @endif

                                                @else
                                                    <button disabled><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                                @endif
                                              <!-- End check the seen users -->
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
                                                        <input type="hidden" name="article_id" value="{{$data->id}}" id="article_id">
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
                                            <span class="pull-right jq_count_{{$data->id}}" style=" padding-top:5px;padding-left: 7px;"></span>
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
                                </div><img style="position: relative;top: -14px;right: 150px;" src="/images/pictures/donyana/1.png "></div>
                        </div>
                        @else
                        <div class="menu-category list-group ">
                            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;min-height: 300px">
                                <div style="padding: 10px;  border-radius:5px;background-color:white;margin-left: 15px!important;">
                                    <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                                    <div class="imgWrapedonaya img-responsiveedonyana">
                                        <img class="imgWrapedonaya img-responsiveedonyana" src="http://img.youtube.com/vi/sLwrG2bwBDI/{{$data->picture_url}}" alt="polaroid"/>
                                        <a href="/OurWorld-video/{{$data->id}}">  <div class="imgDescriptione">
                                                <span id="articleimg"><img src="/images/pictures//donyana/video.png"/></span>
                                                @if(Auth::check())
                                                    @if(count($seens) == "0")
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$data->id}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                                        </form>
                                                    @else
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

                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$data->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                                                </form>
                                                        @endif
                                                    @endforeach
                                                    @endif
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
                                                <span class="pull-right jq_count_{{$data->id}}" style=" padding-top:5px;padding-left: 7px;"></span>
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
            <!-- End the All Articles -->

            <!-- Start the  Articles -->
            <div class="row1 articles hidden_div" style=" direction:rtl;width: 100%;">
                @foreach($articles as $article)
                    <div class="menu-category list-group ">
                        <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;">
                            <div style="padding: 20px;  border-radius:5px;background-color:white;margin-left: 15px!important; min-height: 155px">
                                <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                                <div class="imgWrapedonaya img-responsiveedonyana">
                                    <img class="imgWrapedonaya img-responsiveedonyana" src="/uploadfiles/articles/{{$article->title}}/{{$article->picture_url}}" alt="polaroid"/>
                                    <a href="/OurWorld-Article/{{$article->id}}">
                                        <div class="imgDescriptione">
                                            <span id="articleimg"><img src="/images/pictures//donyana/txt.png"/></span>
                                            @if(Auth::check())
                                                @if(count($seens) == "0")
                                                    <form class="seen">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <input type="hidden" name="article_id" value="{{$article->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button><span id="txtdonyanaarticle">{{$article->title}}</span></button>
                                                    </form>
                                                @else
                                                @foreach($seens as $seen)
                                                    @if($seen->article_id == $article->id)
                                                        @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                            <button disabled><span id="txtdonyanaarticle">{{$article->title}}</span></button>
                                                        @else
                                                            <form class="seen">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <input type="hidden" name="article_id" value="{{$article->id}}">
                                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                <button><span id="txtdonyanaarticle">{{$article->title}}</span></button>
                                                            </form>
                                                        @endif
                                                        @else
                                                            <form class="seen">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <input type="hidden" name="article_id" value="{{$article->id}}">
                                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                <button><span id="txtdonyanaarticle">{{$article->title}}</span></button>
                                                            </form>
                                                    @endif
                                                @endforeach
                                                @endif
                                            @else
                                                <button disabled><span id="txtdonyanaarticle">{{$article->title}}</span></button>
                                            @endif

                                        </div>
                                    </a>
                                </div>
                                <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                                    <?php echo substr($article->subject,0,150); ?>
                                </div>
                                <!-- this code show like and seen with count -->
                                <div style="height:30px;">
                                        <span class="pull-left">
                                            <!-- Start calculate count of like to the article -->
                                            <?php
                                            $like_count = 0;
                                            foreach($likes_count as $like){
                                                if(($like->article_id == $article->id)&& ($like->like_status == "1")){
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
                                                        <input type="hidden" name="article_id" value="{{$article->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $article->id)
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$article->id}}">
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
                                                    <span class="pull-right jq_count_{{$article->id}}" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $article->id)&& ($seen->seen_status == "1")){
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
                @endforeach
            </div>
            <!-- End the  Articles -->

            <!-- Start the  Vedios -->
            <div class="row1 vedios hidden_div" style=" direction:rtl;width: 100%;">
                @foreach($vedios as $vedio)
                <div class="menu-category list-group ">
                    <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;min-height: 300px">
                        <div style="padding: 10px;  border-radius:5px;background-color:white;margin-left: 15px!important;">
                            <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                            <div class="imgWrapedonaya img-responsiveedonyana">
                                <img class="imgWrapedonaya img-responsiveedonyana" src="http://img.youtube.com/vi/sLwrG2bwBDI/{{$vedio->picture_url}}" alt="polaroid"/>
                                <a href="/OurWorld-video/{{$vedio->id}}">  <div class="imgDescriptione">
                                        <span id="articleimg"><img src="/images/pictures//donyana/video.png"/></span>
                                        @if(Auth::check())
                                            @if(count($seens) == "0")
                                                <form class="seen">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="article_id" value="{{$vedio->id}}">
                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                    <button><span id="txtdonyanaarticle">{{$vedio->title}}</span></button>
                                                </form>
                                            @else
                                            @foreach($seens as $seen)
                                                @if($seen->article_id == $vedio->id)
                                                    @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                        <button disabled><span id="txtdonyanaarticle">{{$vedio->title}}</span></button>
                                                    @else
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$vedio->id}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$data->title}}</span></button>
                                                        </form>
                                                    @endif
                                                    @else
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$vedio->id}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$vedio->title}}</span></button>
                                                        </form>
                                                @endif
                                            @endforeach
                                            @endif
                                        @else
                                            <button disabled><span id="txtdonyanaarticle">{{$vedio->title}}</span></button>
                                        @endif

                                    </div>
                                </a>
                            </div>
                            <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                                <?php echo substr($vedio->subject,0,150); ?>
                            </div>
                            <!-- this code show like and seen with count -->
                            <div style="height:30px;">
                                        <span class="pull-left">
                                            <!-- Start calculate count of like to the article -->
                                            <?php
                                            $like_count = 0;
                                            foreach($likes_count as $like){
                                                if(($like->article_id == $vedio->id)&& ($like->like_status == "1")){
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
                                                        <input type="hidden" name="article_id" value="{{$vedio->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $vedio->id)
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$vedio->id}}">
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
                                                    <span class="pull-right jq_count_{{$vedio->id}}" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $vedio->id)&& ($seen->seen_status == "1")){
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
                    @endforeach
            </div>
            <!-- End the  Vedios -->

            <div class="row1 oldtonew hidden_div" style=" direction:rtl;width: 100%;">
                @foreach($oldest_to_newwst as $oldest)
                    @if($oldest->type == "2")

                        <div class="menu-category list-group ">
                            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;">
                                <div style="padding: 20px;  border-radius:5px;background-color:white;margin-left: 15px!important; min-height: 155px">
                                    <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                                    <div class="imgWrapedonaya img-responsiveedonyana">
                                        <img class="imgWrapedonaya img-responsiveedonyana" src="/uploadfiles/articles/{{$oldest->title}}/{{$oldest->picture_url}}" alt="polaroid"/>
                                        <a href="/OurWorld-Article/{{$oldest->id}}">
                                            <div class="imgDescriptione">
                                                <span id="articleimg"><img src="/images/pictures//donyana/txt.png"/></span>
                                                @if(Auth::check())
                                                    @if(count($seens) == "0")
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$oldest->id}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                        </form>
                                                    @else
                                                    @foreach($seens as $seen)
                                                        @if($seen->article_id == $oldest->id)
                                                            @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                                <button disabled><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$oldest->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                                </form>
                                                            @endif
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$oldest->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                                </form>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                @else
                                                    <button disabled><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                @endif

                                            </div>
                                        </a>
                                    </div>
                                    <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                                        <?php echo substr($oldest->subject,0,150); ?>
                                    </div>
                                    <!-- this code show like and seen with count -->
                                    <div style="height:30px;">
                                        <span class="pull-left">
                                            <!-- Start calculate count of like to the article -->
                                            <?php
                                            $like_count = 0;
                                            foreach($likes_count as $like){
                                                if(($like->article_id == $oldest->id)&& ($like->like_status == "1")){
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
                                                        <input type="hidden" name="article_id" value="{{$oldest->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $oldest->id)
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$oldest->id}}">
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
                                                    <span class="pull-right jq_count_{{$oldest->id}}" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $oldest->id)&& ($seen->seen_status == "1")){
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


                    @else
                        <div class="menu-category list-group ">
                            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;min-height: 300px">
                                <div style="padding: 10px;  border-radius:5px;background-color:white;margin-left: 15px!important;">
                                    <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                                    <div class="imgWrapedonaya img-responsiveedonyana">
                                        <img class="imgWrapedonaya img-responsiveedonyana" src="http://img.youtube.com/vi/sLwrG2bwBDI/{{$oldest->picture_url}}" alt="polaroid"/>
                                        <a href="/OurWorld-video/{{$oldest->id}}">  <div class="imgDescriptione">
                                                <span id="articleimg"><img src="/images/pictures//donyana/video.png"/></span>
                                                @if(Auth::check())
                                                    @if(count($seens) == "0")
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$oldest->id}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                        </form>
                                                    @else
                                                    @foreach($seens as $seen)
                                                        @if($seen->article_id == $oldest->id)
                                                            @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                                <button disabled><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$oldest->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                                </form>
                                                            @endif
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$oldest->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
                                                                </form>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                @else
                                                    <button disabled><span id="txtdonyanaarticle">{{$oldest->title}}</span></button>
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
                                                if(($like->article_id == $oldest->id)&& ($like->like_status == "1")){
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
                                                        <input type="hidden" name="article_id" value="{{$oldest->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $oldest->id)
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$oldest->id}}">
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
                                                    <span class="pull-right jq_count_{{$oldest->id}}" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $oldest->id)&& ($seen->seen_status == "1")){
                                                    $seen_count++;
                                                }
                                            }
                                            ?>
                                            <img class="pull-left" src="/images/pictures/donyana/seen.png"/>
                                            <span class="pull-right db_seen_count" style="margin-top: -3px;padding-left: 7px;"><a id="clicks3">{{$seen_count}}</a></span>
                                            <span class="pull-right jq_seen_count_{{$data->id}}" style="margin-top: -3px;padding-left: 7px;"></span>
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
            <div class="row1 newtoold hidden_div" style=" direction:rtl;width: 100%;">
                @foreach($newest_to_oldest as $newest)
                    @if($newest->type == "2")

                        <div class="menu-category list-group ">
                            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;">
                                <div style="padding: 20px;  border-radius:5px;background-color:white;margin-left: 15px!important; min-height: 155px">
                                    <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                                    <div class="imgWrapedonaya img-responsiveedonyana">
                                        <img class="imgWrapedonaya img-responsiveedonyana" src="/uploadfiles/articles/{{$newest->title}}/{{$newest->picture_url}}" alt="polaroid"/>
                                        <a href="/OurWorld-Article/{{$newest->id}}">
                                            <div class="imgDescriptione">
                                                <span id="articleimg"><img src="/images/pictures//donyana/txt.png"/></span>
                                                @if(Auth::check())
                                                    @if(count($seens) == "0")
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$newest->id}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                        </form>
                                                    @else
                                                    @foreach($seens as $seen)
                                                        @if($seen->article_id == $newest->id)
                                                            @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                                <button disabled><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$newest->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                                </form>
                                                            @endif
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$newest->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                                </form>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                @else
                                                    <button disabled><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                @endif

                                            </div>
                                        </a>
                                    </div>
                                    <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                                        <?php echo substr($newest->subject,0,150); ?>
                                    </div>
                                    <!-- this code show like and seen with count -->
                                    <div style="height:30px;">
                                        <span class="pull-left">
                                            <!-- Start calculate count of like to the article -->
                                            <?php
                                            $like_count = 0;
                                            foreach($likes_count as $like){
                                                if(($like->article_id == $newest->id)&& ($like->like_status == "1")){
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
                                                        <input type="hidden" name="article_id" value="{{$newest->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $newest->id)
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$newest->id}}">
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
                                                    <span class="pull-right jq_count_{{$newest->id}}" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $newest->id)&& ($seen->seen_status == "1")){
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


                    @else
                        <div class="menu-category list-group ">
                            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;min-height: 300px">
                                <div style="padding: 10px;  border-radius:5px;background-color:white;margin-left: 15px!important;">
                                    <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                                    <div class="imgWrapedonaya img-responsiveedonyana">
                                        <img class="imgWrapedonaya img-responsiveedonyana" src="http://img.youtube.com/vi/sLwrG2bwBDI/{{$newest->picture_url}}" alt="polaroid"/>
                                        <a href="/OurWorld-video/{{$newest->id}}">  <div class="imgDescriptione">
                                                <span id="articleimg"><img src="/images/pictures//donyana/video.png"/></span>
                                                @if(Auth::check())
                                                    @if(count($seens) == "0")
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$newest->id}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                        </form>
                                                    @else
                                                    @foreach($seens as $seen)
                                                        @if($seen->article_id == $newest->id)
                                                            @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                                <button disabled><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$newest->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                                </form>
                                                            @endif
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$newest->id}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                                </form>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                @else
                                                    <button disabled><span id="txtdonyanaarticle">{{$newest->title}}</span></button>
                                                @endif

                                            </div>
                                        </a>
                                    </div>
                                    <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                                        <?php echo substr($newest->subject,0,150); ?>
                                    </div>
                                    <!-- this code show like and seen with count -->
                                    <div style="height:30px;">
                                        <span class="pull-left">
                                            <!-- Start calculate count of like to the article -->
                                            <?php
                                            $like_count = 0;
                                            foreach($likes_count as $like){
                                                if(($like->article_id == $newest->id)&& ($like->like_status == "1")){
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
                                                        <input type="hidden" name="article_id" value="{{$newest->id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $newest->id)
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$newest->id}}">
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
                                                    <span class="pull-right jq_count_{{$newest->id}}" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $newest->id)&& ($seen->seen_status == "1")){
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



            <div class="row1 seens hidden_div" style=" direction:rtl;width: 100%;">
                @foreach($last as $more_seen)

                    @if($more_seen['type'] == "2")
                    <div class="menu-category list-group ">
                        <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;">
                            <div style="padding: 20px;  border-radius:5px;background-color:white;margin-left: 15px!important; min-height: 155px">
                                <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                                <div class="imgWrapedonaya img-responsiveedonyana">
                                    <img class="imgWrapedonaya img-responsiveedonyana" src="/uploadfiles/articles/{{$more_seen['title']}}/{{$more_seen['picture_url']}}" alt="polaroid"/>
                                    <a href="/OurWorld-Article/{{$more_seen['id']}}">
                                        <div class="imgDescriptione">
                                            <span id="articleimg"><img src="/images/pictures//donyana/txt.png"/></span>
                                            @if(Auth::check())
                                                @if(count($seens) == "0")
                                                    <form class="seen">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                    </form>
                                                @else
                                                @foreach($seens as $seen)
                                                    @if($seen->article_id == $more_seen['id'])
                                                        @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                            <button disabled><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                        @else
                                                            <form class="seen">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
                                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                <button><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                            </form>
                                                        @endif
                                                        @else
                                                            <form class="seen">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
                                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                <button><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                            </form>
                                                    @endif
                                                @endforeach
                                                @endif
                                            @else
                                                <button disabled><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                            @endif

                                        </div>
                                    </a>
                                </div>
                                <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                                    <?php echo substr($article->subject,0,150); ?>
                                </div>
                                <!-- this code show like and seen with count -->
                                <div style="height:30px;">
                                        <span class="pull-left">
                                            <!-- Start calculate count of like to the article -->
                                            <?php
                                            $like_count = 0;
                                            foreach($likes_count as $like){
                                                if(($like->article_id == $more_seen['id'])&& ($like->like_status == "1")){
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
                                                        <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $more_seen['id'])
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
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
                                                    <span class="pull-right jq_count_{{$more_seen['id']}}" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $more_seen['id'])&& ($seen->seen_status == "1")){
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
                    @else
                        <div class="menu-category list-group ">
                            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;min-height: 300px">
                                <div style="padding: 10px;  border-radius:5px;background-color:white;margin-left: 15px!important;">
                                    <!--img style="margin-left: auto; margin-right: auto; display: block; vertical-align: middle;" class="img-responsive" src="/images/pictures/e.png"/-->
                                    <div class="imgWrapedonaya img-responsiveedonyana">
                                        <img class="imgWrapedonaya img-responsiveedonyana" src="http://img.youtube.com/vi/sLwrG2bwBDI/{{$more_seen['picture_url']}}" alt="polaroid"/>
                                        <a href="/OurWorld-video/{{$more_seen['id']}}">  <div class="imgDescriptione">
                                                <span id="articleimg"><img src="/images/pictures//donyana/video.png"/></span>
                                                @if(Auth::check())
                                                    @if(count($seens) == "0")
                                                        <form class="seen">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <button><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                        </form>
                                                    @else
                                                    @foreach($seens as $seen)
                                                        @if($seen->article_id == $more_seen['id'])
                                                            @if($seen->user_id == Auth::user()->id && $seen->seen_status =="1")
                                                                <button disabled><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                                </form>
                                                            @endif
                                                            @else
                                                                <form class="seen">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
                                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                                    <button><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                                </form>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                @else
                                                    <button disabled><span id="txtdonyanaarticle">{{$more_seen['title']}}</span></button>
                                                @endif

                                            </div>
                                        </a>
                                    </div>
                                    <div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">
                                        <?php echo substr($vedio->subject,0,150); ?>
                                    </div>
                                    <!-- this code show like and seen with count -->
                                    <div style="height:30px;">
                                        <span class="pull-left">
                                            <!-- Start calculate count of like to the article -->
                                            <?php
                                            $like_count = 0;
                                            foreach($likes_count as $like){
                                                if(($like->article_id == $more_seen['id'])&& ($like->like_status == "1")){
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
                                                        <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        <button class="pull-left like_click" type="submit" ><img src="/images/pictures/donyana/like1.png"/></button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                            <!-- End if --------------------->
                                                    <!--  if text have  likes -->
                                                    @if(Auth::check())
                                                        @foreach($likes_count as $like)
                                                            @if($like->article_id == $more_seen['id'])
                                                                @if($like->user_id == Auth::user()->id)
                                                                    @if ($like->like_status == "1")
                                                                        <button class="pull-left" type="submit" disabled><img src="/images/pictures/donyana/like1.png"/></button>
                                                                    @else
                                                                        <form class="like" style="display: inline-block;">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" name="article_id" value="{{$more_seen['id']}}">
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
                                                    <span class="pull-right jq_count_{{$more_seen['id']}}" style=" padding-top:5px;padding-left: 7px;"></span>
                                        </span>

                                        <span class="pull-right" style="padding-top: 7px;">
                                            <?php
                                            $seen_count = 0;
                                            foreach($seens as $seen){
                                                if(($seen->article_id == $more_seen['id'])&& ($seen->seen_status == "1")){
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

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".all").click(function () {
                $(".world").removeClass("hidden_div");
                $(".vedios,.articles,.oldtonew,.newtoold,.seens").addClass("hidden_div");
            });
            $(".vedio").click(function () {
                $(".vedios").removeClass("hidden_div");
                $(".world,.articles,.oldtonew,.newtoold,.seens").addClass("hidden_div");
            });
            $(".article").click(function () {
                $(".articles").removeClass("hidden_div");
                $(".world,.vedios,.oldtonew,.newtoold,.seens").addClass("hidden_div");
            });
            $(".oldest").click(function () {
                $(".oldtonew").removeClass("hidden_div");
                $(".world,.articles,.vedios,.newtoold,.seens").addClass("hidden_div");
            });
            $(".newest").click(function () {
                $(".newtoold").removeClass("hidden_div");
                $(".world,.articles,.oldtonew,.vedios,.seens").addClass("hidden_div");
            });
            $(".more_seen").click(function () {
                $(".seens").removeClass("hidden_div");
                $(".world,.articles,.oldtonew,.vedios,.newtoold").addClass("hidden_div");
            });
        });

        $(".like").submit(function (event) {
            var like_num = parseInt($("#clicks2").text());
            var num = 1;
            var count = like_num+num;
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
            var article_id = $('#article_id').val();
            $(".db_count").css("display","none");
            $(".jq_count_"+article_id+"").append('<a id="clicks2">'+count+'</a>');

        });
        $(".seen").submit(function (event) {
            var like_num = parseInt($("#clicks3").text());
            var num = 1;
            var count = like_num+num;
            event.preventDefault();
            $('button').prop('disabled', true);
            $.ajax({
                url: '/test_save_seeen',
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false

            });
            $(".db_seen_count").css("display","none");
            $(".jq_seen_count").append('<a id="clicks3">'+count+'</a>');
        });
    </script>
<script>
    $( document ).ready(function() {
        $("#search").keyup(function() {
            var keyword = $("#search").val();
                $.get( "/article_search/"+keyword)
                        .done(function( data ) {

                            for(var i=0;i<data.length;i++){
                                if(data[0]["type"] == "1"){
                                    $(".world,.articles,.oldtonew,.vedios,.seens,.newtoold").children().hide() ;
                                    $(".row1").append('<div class="menu-category list-group "><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3"' +
                                            ' style="width:100%;padding: 0!important;min-height: 300px"><div style="padding: 10px;  border-radius:5px;background-color:white;' +
                                            'margin-left: 15px!important;"><div class="imgWrapedonaya img-responsiveedonyana">' +
                                            '<img class="imgWrapedonaya img-responsiveedonyana" src="http://img.youtube.com/vi/sLwrG2bwBDI/'+data[i]["picture_url"]+'" alt="polaroid"/>' +
                                            '<a href="/OurWorld-video/'+data[i]["id"]+'"><div class="imgDescriptione"><span id="articleimg"><img src="/images/pictures//donyana/video.png"/>' +
                                            '</span><span id="txtdonyanaarticle">'+data[i]["title"]+'</span></div></a></div><div style=" padding-top:5px;text-align:right;font-family: ebold;' +
                                            'font-size: 14px;">'+data[i]["subject"].substr(0, 150)+'</div><hr style="margin-top: 10px!important;"/></div><img style="position: relative;' +
                                            'top: -14px;right: 150px;" src="/images/pictures/donyana/1.png "></div></div>');
                                }else{
                                    $(".world,.articles,.oldtonew,.vedios,.seens,.newtoold").children().hide() ;
                                    $(".row1").append('<div class="menu-category list-group "><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-3" style="width:100%;padding: 0!important;"> <div style="padding: 20px;  border-radius:5px;background-color:white;margin-left: 15px!important; min-height: 155px"> <div class="imgWrapedonaya img-responsiveedonyana"> <img class="imgWrapedonaya img-responsiveedonyana" src="/uploadfiles/articles/'+data[i]["title"]+'/'+data[i]["picture_url"]+'" alt="polaroid"/> <a href="/OurWorld-Article/'+data[i]["id"]+'"><div class="imgDescriptione"><span id="articleimg"><img src="/images/pictures//donyana/txt.png"/></span></div></a></div><div style=" padding-top:5px;text-align:right;font-family: ebold;font-size: 14px;">'+data[i]["subject"].substr(0, 150)+'</div></div><hr style="margin-top: 10px!important;"/></div><img style="position: relative;top: -14px;right: 150px;" src="/images/pictures/donyana/1.png "></div>');
                                }
                            }
                        });

        });

    });
</script>






@stop