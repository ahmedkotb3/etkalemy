

    <div class="container">
        <div class="row row_style">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
                <form class="form-horizontal" role="form" method="post" action="/event" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="email">Image:</label>
                        <div class="col-lg-6 col-md-5 col-sm-4 col-xs-5">
                            <input type="file" class="form-control" id="" placeholder="" name="image" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="email">Title:</label>
                        <div class="col-lg-6 col-md-5 col-sm-4 col-xs-5">
                            <input type="text" class="form-control" id="" placeholder="" name="title" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="email">Date:</label>
                        <div class="col-lg-6 col-md-5 col-sm-4 col-xs-5">
                            <input type="date" class="form-control" id="" placeholder="" name="date" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="email">place:</label>
                        <div class="col-lg-6 col-md-5 col-sm-4 col-xs-5">
                            <input type="text" class="form-control" id="" placeholder="" name="place" >
                        </div>
                    </div>
                    <!--  Description for English-->
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="email"> Description:</label>
                        <div class="col-lg-8 col-md-7 col-sm-6 col-xs-9">
                            <textarea rows="5" style="width:100%;resize:vertical" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="email"> Link Facebook:</label>
                        <div class="col-lg-8 col-md-7 col-sm-6 col-xs-9">
                            <textarea rows="5" style="width:100%;resize:vertical" name="link1"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="email"> Link tweter:</label>
                        <div class="col-lg-8 col-md-7 col-sm-6 col-xs-9">
                            <textarea rows="5" style="width:100%;resize:vertical" name="link2"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="email">  PDF:</label>
                        <div class="col-lg-8 col-md-7 col-sm-6 col-xs-9">
                            <textarea rows="5" style="width:100%;resize:vertical" name="pdf"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-5 col-xs-5">
                            <button type="submit" name="submit" class="btn btn-default">Add</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

