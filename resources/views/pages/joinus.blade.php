@extends('pages.templet')
@section('content')
    <div  class="top">
        <img src="/images/pictures/m1.png" class="imgstyle">
        انضمى لنا 

    </div>
    <div class="row" style="background-color: #D5E4E8;">
 <form class="form-horizontal" role="form">
     <div class="form-group" style=" padding-left:88px;padding-top:22px; ">
         <label class="control-label col-sm-3" for="namee" style=" color: #376773; font-family:Calibri; font-weight: bold; font-size: 15px; text-align: left;"> Name in English </label>
         <div class="col-sm-9" style="padding-right: 280px; height: 23px">
             <input type="text" class="form-control" id="namee" style="background-color: #D5E4E8;">
         </div>
     </div>
     <div class="form-group" style="padding-left:88px">
         <label class="control-label col-sm-3" for="namea" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> Name in Arabic </label>
         <div class="col-sm-9" style="padding-right: 280px; height: 23px">
             <input type="text" class="form-control" id="namea" style="background-color: #D5E4E8;">
         </div>
     </div>
     <div class="form-group" style="padding-left:88px">
         <label class="control-label col-sm-3" for="email" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> E-mail </label>
         <div class="col-sm-9" style="padding-right: 280px; height: 23px">
             <input type="email" class="form-control" id="email" style="background-color: #D5E4E8;">
         </div>
     </div>
     <div class="form-group" style="padding-left:88px">
         <label class="control-label col-sm-3" for="pass" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> Pass word </label>
         <div class="col-sm-9" style="padding-right: 280px; height: 23px">
             <input type="password" class="form-control" id="pass" style="background-color: #D5E4E8;">
         </div>
     </div>
     <div class="form-group" style="padding-left:88px">
         <label class="control-label col-sm-3" for="repass" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> Re-enter password </label>
         <div class="col-sm-9" style="padding-right: 280px; height: 23px">
             <input type="password" class="form-control" id="repass" style="background-color: #D5E4E8;">
         </div>
     </div>
     <div class="form-group" style="padding-left:88px; padding-right: 280px; ">
         <label class="control-label col-sm-4" for="country" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> Country </label>
         <div row class=" col-sm-8" style="padding: 0;">
         <div class="col-sm-5" style=" padding-left: 26px; height: 23px">
             <input type="text" class="form-control" id="country" style="background-color: #D5E4E8;">
         </div>

         <label class="control-label  col-sm-1 col-sm-offset-2" for="city" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> city </label>
         <div class="col-sm-4" style="padding-right:0; padding-left:7px;height: 23px">
             <input type="text" class="form-control" id="city" style="background-color: #D5E4E8;">
             </div>

         </div>
     </div>
     <div class="form-group" style="padding-left:88px">
         <label class="control-label col-sm-3" for="work" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> Work </label>
         <div class="col-sm-9" style="padding-right: 280px; height: 23px">
             <input type="text" class="form-control" id="work" style="background-color: #D5E4E8;">
         </div>
     </div>
     <div class="form-group" style=" padding-bottom:22px;padding-left:88px">
         <label class="control-label col-sm-3" for="date" style=" color: #376773; font-family: Calibri;font-weight: bold; font-size: 15px;  text-align: left;"> Date of Birth </label>
         <div class="col-sm-9" style="padding-right: 280px; height: 23px">
             <input type="datetime" class="form-control" id="date" style="background-color: #D5E4E8;">
         </div>
     </div>
 </form>

    </div>

@stop