<form class="form-horizontal" action="<?php echo $add_product_url?>uploadImage" method="post">
<fieldset>

<!-- Form Name -->
<legend style="text-align:'center';">
    <h3 style="text-align: center;">Insert Item details</h3>
</legend>

<!-- Text input-->

</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">ITEM NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name"class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="category_Id" class="form-control">
    <option disabled selected>select category</option>
    <?php foreach($categories as $value){
              echo "<option value='".$value->id."'>".$value->name."</option>";
          } 
    ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">Sub-CATEGORY</label>
  <div class="col-md-4">
      <select id="product_sub_categorie" name="sub_category_Id" class="form-control">
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name"></label>  
  <div class="col-md-4" id="productdescriptions">
    
  </div>
</div>

</div>




<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="Info"></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">ITEM PRICE($)</label>  
  <div class="col-md-4">
  <input id="product_name" name="price"class="form-control input-md" required="" type="number">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="product_description"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Next</button>
  </div>
</div>

</fieldset>
</form>


<script>
            $(document).ready(function(){
            $('#product_categorie').change(function(){
                //Selected value
                var inputValue = $(this).val();


               

                $.ajax({
                        url: '<?php echo $add_product_url ?>getSubCategories?id='+inputValue+'',
                        type: 'get',
                        dataType: 'JSON',
                      success: function(response){
                     

                      
                      var subCategories = response[1];
                      var len = subCategories.length;
                      
                      $("#product_sub_categorie option").remove();
                      
                      for(var i=0; i<len; i++){


                        if(i == 0){
                          $("#product_sub_categorie").append('<option value="" disabled selected>select sub-category</option>');

                         
                        }

                        $("#product_sub_categorie").append(new Option(response[0][i],response[1][i]));
                       
                      }

                    }
                });


            });
            //for decription
            $('#product_sub_categorie').change(function(){
                //Selected value
                var inputValue = $(this).val();


               

                $.ajax({
                        url: '<?php echo $add_product_url ?>getDescriptions?id='+inputValue+'',
                        type: 'get',
                        dataType: 'JSON',
                      success: function(response){
                    
                      var len = response.length;

                     
                      $("#productdescriptions div").remove();
                      
                      for(var i=0; i<len; i++){
                        
                           $("#productdescriptions").append('<div><label style="margin-right:12px;,margin-left:12px;">'+response[i]+'</label><br><input type="text" name="'+response[i]+'" /><br></div>');
                           
                       
                      }

                    }
                });


            });

           
        });
</script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
