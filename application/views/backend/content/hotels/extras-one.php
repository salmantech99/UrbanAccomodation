<form method="post" action="<?php echo base_url(); ?>Hotels/insert_extra" enctype="multipart/form-data">
<div class="container-fluid" style="margin-top: 76px;">
    <div class="row">
        <div class="col-md-8">
            <div class="xcrud-top-actions btn-group">
                <button><a type="submit" class="btn btn-primary xcrud-action">Save &amp; Return</a></button>
                <a type="submit" data-task="save" data-after="create" class="btn btn-default xcrud-action">Save &amp; New</a>
                <a href="#" data-task="save" data-after="edit" class="btn btn-default xcrud-action">Save &amp; Edit</a>
                <a href="<?php echo site_url('Hotels/room_extra/'); ?>" data-task="list" class="btn btn-warning xcrud-action">Return</a>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="xcrud-view">
<div class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-3">Name*</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="text" value="" name="name" maxlength="250"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Thumb</label>
        <div class="col-sm-9">
            <div class="xcrud-upload-container">
                <div class="btn-group"><span class="xcrud-noimage btn btn-default disabled">no image</span>
                    <input name="cHRfZXh0cmFzLmV4dHJhc19pbWFnZQ--" value="" type="hidden" class="xcrud-input"><span class="xcrud-add-file btn btn-success"><i class="glyphicon glyphicon-upload"></i> Add image<input id="xfupl1693618204" value="" type="file" data-type="image" data-field="pt_extras.extras_image" class="xcrud-upload" name="thumb" capture="camera"></span> <?php if (isset($error_file)) {
                                        echo "$error_file";
                                    } ?></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Status*</label>
        <div class="col-sm-9">
            <select class="xcrud-input form-control" data-required="1" data-type="select" name="status" maxlength="0">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">Price*</label>
        <div class="col-sm-9">
            <input class="xcrud-input form-control" data-required="1" type="text" data-type="float" value="" name="price" data-pattern="numeric">
        </div>
    </div>
    </div>
</div>
        </div>
    </div>              
</div>

  </form>