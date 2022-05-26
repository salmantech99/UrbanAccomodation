<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box effect1">
                        <h4 class="hotel-table">REVIEWS MANAGEMENT</h4>
                        <hr>
                        <div class="table-responsive">
                            <form action="" name="delete-form" method="post">
                                <div class="btn-hotel">
                                    <button type="button" class="btn btn-danger btn-md delete_all" data-url="/itemDelete" id="del_all">
                                    <i class="fas fa-times-circle"></i>&nbsp;DELETE SELECTED</button>
                                    <button type="button" class="btn btn-outline-secondary btn-md btn-add">
                                    <i class="fas fa-print"></i>&nbsp; PRINT</button>
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
                                            <th>Hotel</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($posts as $post){?>
                                        <tr style="text-align: center;">
                                            <td><label class="control control--checkbox">
                                                <input type="checkbox" data-id="<?php echo $post->id;?>" value="<?php echo $post->id;?>" class="checkbox id_check"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                            </td>
                                            <td><?php echo $post->id;?></td>
                                            <td class="hotel-add-alignment"><img style="width: 55px;" src="<?php echo base_url('uploads/'.$post->thumb); ?>" /> </td>
                                            <td><?php echo $post->name;?></td>
                                            <td><i class="fas fa-check tick"></i></td>
                                            <td class="hotel-add-alignment delete"><?php echo anchor('Hotels/delete3?id='.$post->id, '<i class="fas fa-times"></i>', 'id="$post->id"'); ?></td>
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
        var id = $(this).data('Hotels/delete_reviews');
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
                        url: '<?php echo base_url() ?>Hotels/delete_reviews',
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
</script>
<!-- END MAIN CONTENT-->