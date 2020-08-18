<!DOCTYPE html>
<html lang="en">
<head>

  <title>Add Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <link href="{{ asset('custome-style/addproductstyle.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
<!-- Button trigger modal -->

<div>
       Add Product
</div>


<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add</button>

<div>
    Product List
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Size</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product Price</th>
    </tr>
  </thead>
  <tbody id="productAppend">
    
  </tbody>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">Add Product Details</h4>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="Product-Name">Product-Name:</label>
                            <input type="text" class="form-control" id="Product-Name" placeholder="Enter Product Name" name="Product-Name">
                          </div>
                          <div class="form-group">
                          <label for="Product-Size">Product-Size:</label>

                          <div class="dropdown" class="form-control">
                          <input type="text" class="form-control" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" placeholder="Select Size">
                             
                              <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu1">
                                <li ><label><input type="checkbox" name="checkselector[]" id="ad_Checkbox1" value="XL"> XL</label></li>
                                <li ><label><input type="checkbox" name="checkselector[]" id="ad_Checkbox2" value="2XL"> 2XL</label> </li>
                                <li ><label><input type="checkbox" name="checkselector[]" id="ad_Checkbox3" value="3XL"> 3XL</label></li>
                              </ul>
                            </div>

                            </div>
                          <div class="form-group">
                          <label for="Product-Description">Product-Description:</label>
                            <input type="text" class="form-control" id="Product-Description" placeholder="Enter Product Description" name="Product-Description">
                          </div>
                          <div class="form-group">
                          <label for="Product-Price">Product-Price:</label>
                            <input type="text" class="form-control" id="Product-Price" placeholder="Enter Product Price" name="Product-Price">
                          </div>
                     </form>     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="addproduct" class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('custome-js/addproduct.js')}}"></script>

</body>
</html>
