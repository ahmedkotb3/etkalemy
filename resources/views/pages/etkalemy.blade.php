@extends('pages.templet')
@section('content')
    <div class="container-fluid" id="row1170">
        <div  class="top" style="margin-bottom:34px;margin-top: 10px;">
            <img src="/images/pictures/m1.jpg" class="imgstyle">
            <span>اتكلمي</span>
        </div>
    </div>

    <div class="row" style="background-color: #D5E4E8">

        <div class="container-fluid" id="row1170" style="margin-top:30px !important;" >
            <div class="row img-thumbnail" style="direction: rtl;color: #376773;font-size: 20px;font-family: ebold;font-weight: bold;">
                <div class=" col-xs-10 col-xs-offset-1 " style="padding-right: 80px">
                    <p > ارسلي لنا بمشاركتك مكتوبه,مسجلة او مصورة .لكل المشاركات الهادفه مكان في "اتكلمي" طالما تلتزم بمبادئ الموقع اعرفيها من هنا </p>
                    </div>

            </div>
        </div>
        <div class="container-fluid" id="row1170" style="margin-bottom: 60px !important;margin-top: 30px !important;">
            <div style="color: #376773;font-size: 30px!important;font-family: ebold;" class="row">
                <div class="col-xs-12 img-thumbnail">

                    <form role="form" style="margin-top: 30px; margin-bottom: 150px;">
                        <div class="form-group row" style="margin-bottom: 12px !important;">
                            <label class="control-label col-xs-3" for="namee" style=" color: #376773; font-family:Calibri; font-weight: bold; font-size: 15px; text-align: left;"> Name</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" id="namee" style="background-color: #D5E4E8;">
                            </div>
                            <label class="control-label col-xs-3 pull-right" for="namee" style=" color: #376773; font-family:Calibri; font-weight: bold; font-size: 15px; text-align: right;"> الاسم</label>
                        </div>

                        <div class="form-group row" style="margin-bottom: 20px !important;">
                            <label class="control-label col-xs-3" for="email" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> E-mail </label>
                            <div class="col-xs-6" style=" height: 23px">
                                <input type="email" class="form-control" id="email" style="background-color: #D5E4E8;">
                            </div>
                            <label class="control-label col-xs-3" for="email" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: right;">البريد الالكتروني  </label>
                        </div>

                        <div class="form-group row" style="margin-bottom: 20px !important;">
                            <label class="control-label col-xs-3" for="namee" style=" color: #376773; font-family:Calibri; font-weight: bold; font-size: 15px; text-align: left;"> Subject</label>
                            <div class="col-xs-6" style=" height: 23px">
                                <input type="text" class="form-control" id="namee" style="background-color: #D5E4E8;">
                            </div>
                            <label class="control-label col-xs-3" for="namee" style=" color: #376773; font-family:Calibri; font-weight: bold; font-size: 15px; text-align: right;"> عنوان الموضوع </label>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-xs-3" for="namee" style=" color: #376773; font-family:Calibri; font-weight: bold; font-size: 15px; text-align: left;"> contribution</label>
                            <div class="col-xs-6">
                                <textarea name="" style="width: 100%;background: #D5E4E8;resize: vertical;"></textarea>
                            </div>
                            <label class="control-label col-xs-3" for="namee" style=" color: #376773; font-family:Calibri; font-weight: bold; font-size: 15px; text-align: right;"> الموضوع</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-offset-3 col-xs-6">
                                <input type="file" class="form-control" id="namee" style="background-color: #D5E4E8;">
                            </div>
                            <label class="control-label col-xs-3" for="namee" style=" color: #376773; font-family:Calibri; font-weight: bold; font-size: 15px; text-align: right;"> ملف</label>
                        </div>
                        <div class="form-group">
                            <div class=" col-xs-offset-3 col-xs-9">
                                <button  type="submit" class="btn btn-default" style="background-color: #78C8AB;color:#fff;border: 0px;border-radius: 5px;margin-top: 25px">send/ارسال</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @endsection