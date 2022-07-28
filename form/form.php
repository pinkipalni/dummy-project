<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  .card {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 765px;
  margin: auto;
  padding: 15px;
  margin-top: 5%;
}
  .card:hover {box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}
  .checkspace{margin-left: 10px !important;}
  .title{text-align: center;}
  .form-group{margin-left:0 !important;margin-right: 0 !important;}
  .myDiv{
  display:none;
    padding:10px;
    margin-top:20px;
} 
</style>
<div class="card">
<form class="form-horizontal" method="post" action="upload.php" enctype="multipart/form-data">

  <!-- Form Name -->
  <h3>Add Product</h3>
  <!-- Text input-->
  
  <div class="form-group">
    <label class="col-md-2 control-label" for="vendor">Vendor</label>  
    <div class="col-md-8">
      <input id="vendor" name="vendor" placeholder="Vendor" class="form-control input-md" required="" type="text">
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-2 control-label" for="category">Category</label>
    <div class="col-md-8">
      <select id="myselection" name="category" class="form-control">
        <option>Select Categories</option>
        <option value="Handbags">Handbags</option>
        <option value="Jewellery">Jewellery</option>
        <option value="Sunglasses">Sunglasses</option>
        <option value="Ethnic">Ethnic Wear</option>
        <option value="Hair">Hair Accessories</option>
        <option value="Belts">Belts</option>
        <option value="Footwear">Footwear</option>
        <option value="Apparels">Apparels</option>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="sku">SKU</label>  
    <div class="col-md-8">
      <input id="sku" name="sku" placeholder="SKU" class="form-control input-md" required="" type="text">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="color">Color</label>  
    <div class="col-md-8">
      <input id="color" name="color" placeholder="Color" class="form-control input-md" required="" type="text">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="inventory">Inventory</label>  
    <div class="col-md-8">
      <input id="inventory" name="inventory" placeholder="Inventory" class="form-control input-md" required="" type="text">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="tp">TP</label>  
    <div class="col-md-8">
      <input id="tp" name="tp" placeholder="TP" class="form-control input-md" required="" type="text">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="mrp">MRP</label>  
    <div class="col-md-8">
      <input id="mrp" name="mrp" placeholder="mrp" class="form-control input-md" required="" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label" for="approuved_by">Image</label>  
    <div class="col-md-8">
      <input id="file" name="image" class="input-file form-control" type="file">
    </div>
  </div>

  <!-- Select Basic -->
  <div id="showHandbags" class="myDiv">
    <div class="form-group">
      <label class="col-md-2 control-label" for="size">size</label>
      <div class="col-md-8" style="margin-top: 8px;">
       <input type="checkbox" name="size[]" value="35" class="input-md"> Free Size
      </div>
    </div>
  </div>
  <div id="showFootwear" class="myDiv">
    <div class="form-group">
      <label class="col-md-2 control-label" for="size">size</label>
      <div class="col-md-8" style="margin-top: 8px;">
       <input type="checkbox" name="size[]" value="35" class="input-md"> 35
       <input type="checkbox" name="size[]" value="36" class="input-md checkspace"> 36
       <input type="checkbox" name="size[]" value="37" class="input-md checkspace"> 37
       <input type="checkbox" name="size[]" value="38" class="input-md checkspace"> 38
       <input type="checkbox" name="size[]" value="39" class="input-md checkspace"> 39
       <input type="checkbox" name="size[]" value="40" class="input-md checkspace"> 40
       <input type="checkbox" name="size[]" value="41" class="input-md checkspace"> 41
      </div>
    </div>
  </div>
  <div id="showJewellery" class="myDiv">
    <div class="form-group">
      <label class="col-md-2 control-label" for="size">size</label>
      <div class="col-md-8" style="margin-top: 8px;">
       <input type="checkbox" name="size[]" value="35" class="input-md"> Free Size
      </div>
    </div>
  </div>
  <div id="showSunglasses" class="myDiv">
    <div class="form-group">
      <label class="col-md-2 control-label" for="size">size</label>
      <div class="col-md-8" style="margin-top: 8px;">
       <input type="checkbox" name="size[]" value="Free Size" class="input-md"> Free Size
      </div>
    </div>
  </div> 
  <div id="showEthnic" class="myDiv">
    <div class="form-group">
      <label class="col-md-2 control-label" for="size">size</label>
      <div class="col-md-8" style="margin-top: 8px;">
       <input type="checkbox" name="size[]" value="XS" classXS="input-md"> XS
       <input type="checkbox" name="size[]" value="S" class="input-md checkspace"> S
       <input type="checkbox" name="size[]" value="M" class="input-md checkspace"> M
       <input type="checkbox" name="size[]" value="L" class="input-md checkspace"> L
       <input type="checkbox" name="size[]" value="XL" class="input-md checkspace"> XL
       <input type="checkbox" name="size[]" value="XXL" class="input-md checkspace"> XXL
      </div>
    </div>
  </div>
  <div id="showHair" class="myDiv">
    <div class="form-group">
      <label class="col-md-2 control-label" for="size">size</label>
      <div class="col-md-8" style="margin-top: 8px;">
       <input type="checkbox" name="size[]" value="Free Size" class="input-md"> Free Size
      </div>
    </div>
  </div> 
  <div id="showBelts" class="myDiv">
    <div class="form-group">
      <label class="col-md-2 control-label" for="size">size</label>
      <div class="col-md-8" style="margin-top: 8px;">
       <input type="checkbox" name="size[]" value="Free Size" class="input-md"> Free Size
      </div>
    </div>
  </div>
  <div id="showApparels" class="myDiv">
   <div class="form-group">
      <label class="col-md-2 control-label" for="size">size</label>
      <div class="col-md-8" style="margin-top: 8px;">
       <input type="checkbox" name="size[]" value="XS" classXS="input-md"> XS
       <input type="checkbox" name="size[]" value="S" class="input-md checkspace"> S
       <input type="checkbox" name="size[]" value="M" class="input-md checkspace"> M
       <input type="checkbox" name="size[]" value="L" class="input-md checkspace"> L
       <input type="checkbox" name="size[]" value="XL" class="input-md checkspace"> XL
       <input type="checkbox" name="size[]" value="XXL" class="input-md checkspace"> XXL
      </div>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
     
    <!-- Button -->
      <div class="form-group" style="margin-top:10px;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <button id="singlebutton" class="btn btn-primary" type="submit" name="submit">Save</button>
        </div>
      </div>
    
  </div>
  
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>      

<script>
$(document).ready(function(){
   
    $('#myselection').on('change', function(){
      var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script> 
