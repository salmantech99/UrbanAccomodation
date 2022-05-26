<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table">HOTEL MANAGEMENT</h4>
                        <hr>
                        <div class="table-responsive" id="printableArea">
                            <form action="" name="delete-form" method="post">
                                <a href="<?php echo site_url('Hotels/hotel_one/'); ?>"><button type="button" class="btn btn-success btn-md btn-margin">
                                <i class="fas fa-plus-circle"></i>&nbsp; ADD</button></a>
                                <div class="btn-hotel">
                                    <button type="button" class="btn btn-danger btn-md delete_all" data-url="/itemDelete" id="del_all">
                                    <i class="fas fa-times-circle"></i>&nbsp;DELETE SELECTED</button>
                                    <button type="button" class="btn btn-outline-secondary btn-md btn-add">
                                    <i class="fas fa-print"></i><input type="button" onclick="printDiv('printableArea')" value="PRINT" /></button>
                                    <button type="button" class="btn btn-outline-secondary btn-md btn-add btn-marginn">
                                    <i class="fas fa-file"></i>&nbsp; EXPORT INTO CSV</button>  
                                </div>
                                <table class="table table-hover table-earning">
                                    <thead>
                                        <tr>
                                            <th>   
                                             <label class="control control--checkbox check-margin">
                                                <input type="checkbox" id="select_all" />
                                                <div class="control__indicator hotel-add-indicator"></div>
                                            </label>
                                            </th>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Stars</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($posts as $post){?>
                                        <tr>
                                            <td><label class="control control--checkbox">
                                                <input type="checkbox" data-id="<?php echo $post->id;?>" value="<?php echo $post->id;?>" class="checkbox id_check"/>
                                                <div class="control__indicator"></div>
                                            </label></td>
                                            <td class="hotel-add-alignment"><?php echo $post->id;?></td>
                                            <td class="hotel-add-alignment"><img style="width: 55px;" src="<?php echo base_url('uploads/'.$post->hotel_image); ?>" /> </td>
                                            <td class="hotel-add-alignment"><?php echo $post->hotel_name;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->stars;?></td>
                                            <td class="hotel-add-alignment"><?php echo $post->location;?></td>
                                            <td class="hotel-add-alignment"><i class="fas fa-check tick hotel-add-alignment"></i></td>
                                            <td class="hotel-add-alignment"><a href="<?php echo site_url('Hotels/update_hotel_one/'); ?>"><?php echo anchor('Hotels/update_hotel_one?id='.$post->id, '<i class="fas fa-edit "></i>', 'id="$post->id"'); ?></a></td>
                                            <td class="hotel-add-alignment delete"><?php echo anchor('Hotels/delete?id='.$post->id, '<i class="fas fa-times"></i>', 'id="$post->id"'); ?></td>
                                        </tr>
                                         <?php } ?>
                                    </tbody>
                                </table>
                            </form>
                            <br><div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-8">
                                             <div class="search-container">
                                                <form action="/action_page.php">
                                                    <button type="submit" style="background-color: lightgrey; height: 42px; width: 44px; margin-left: 10px;"><i class="fa fa-search"></i></button>
                                                  <input type="text" placeholder="Search Hotels" name="search">
                                                </form>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="execution">Execution Time 0.00030 <span class="memory"> Memory Usage 30MB</span></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
 
        $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    }); 
 
    $('.delete_all').on('click', function(e) {
        var id = $(this).data('Hotels/delete_selected_hotels');
        var allVals = [];

       var matches = document.getElementsByClassName('id_check');

       

        $(".checkbox:checked").each(function() {  
            allVals.push($(this).attr('data-id'));
        });

        for(var i=0; i<allVals.length; i++)
        {
            console.log(allVals[i]);
        }
        

        if(allVals.length <= 0)
        {  
            alert("Please select row.");  
        }
        else 
        {  
            var check = confirm("Are you sure you want to delete this row?");  
            if(check == true)
            {  
                var join_selected_values = allVals.join(",");

                console.log(join_selected_values);

                for(var i=0; i<allVals.length; i++)
                {
                    $.ajax({
                        url: '<?php echo base_url() ?>Hotels/delete_selected_hotels',
                        type: 'POST',
                        data: 'ids='+allVals[i],
                        success: function (data) {
                          console.log(data);
                          $(".checkbox:checked").each(function() {  
                              $(this).parents("tr").remove();
                          });
                          // alert("Item Deleted successfully.");
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });    
                }
                

              // $.each(allVals, function( index, value ) {
              //     $('table tr').filter("[id='" + value + "']").remove();
              // });
            }
        }
    });
});
    function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
<!-- END MAIN CONTENT-->