<form method="post" action="<?php echo base_url(); ?>Flights/insert_airport">
<div class="container-fluid extra_car_main">
    <div class="row routes-one">
        <div class="col-md-12">
            <div class="box1 effect1">
                <h4 class="flight-table">AIRPORT MANAGEMENT</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="xcrud-top-actions btn-group extra_car_mainbar">
                <button><a type="submit" class="btn btn-primary xcrud-action">Save &amp; Return</a></button>
                <a href="#" data-task="save" data-after="create" class="btn btn-default xcrud-action">Save &amp; New</a>
                <a href="#" data-task="save" data-after="edit" class="btn btn-default xcrud-action">Save &amp; Edit</a>
                <a href="#" data-task="list" class="btn btn-warning xcrud-action">Return</a>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="xcrud-view">
<div class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-3">Code</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="number" data-type="text" value="" name="code" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Name</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="text" value="" name="name" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Citycode</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="number" data-type="text" value="" name="citycode" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Cityname</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="float" value="" name="cityname" data-pattern="numeric">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Countryname</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="text" value="" name="countryname" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Countrycode</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="number" data-type="text" value="" name="countrycode" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Timezone</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="text" value="" name="timezone" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Lat</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="text" value="" name="lat" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Lon</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="text" value="" name="lon" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">City</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="text" value="" name="city" maxlength="250"></div>
    </div>
    </div>
</div>
        </div>
    </div>              
</div>
</form>