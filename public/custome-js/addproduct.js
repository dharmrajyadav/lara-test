


$(".checkbox-menu").on("change", "input[type='checkbox']", function() {
   $(this).closest("li").toggleClass("active", this.checked);
});

$(document).on('click', '.allow-focus', function (e) {
  e.stopPropagation();
});


$("input:file").change(function () {
    var filenames = $.map(this.files, function (file) {
        return file.name;
    });
    $(this).siblings(".custom-file-label").addClass("selected").html(filenames.join(', '));
    $(".filename").html(filenames.join(', '));
});


$("#addproduct").click(function(e){

  e.preventDefault();
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  var productName = $("#Product-Name").val();
  var productSize = [];
  $(':checkbox:checked').each(function(i){
    productSize[i] = $(this).val();
  });
        
  var ProductDescription = $("#Product-Description").val();
  var ProductPrice = $("#Product-Price").val();

  
  // file-upload
     
      // let image_upload = new FormData();
      // let TotalImages = $('#files')[0].files.length; //Total Images
      // let images = $('#files')[0];
      // for (let i = 0; i < TotalImages; i++) {
      //     image_upload.append('images' + i, images.files[i]);
      //   }
      //   image_upload.append('TotalImages', TotalImages);
      //   image_upload.append('productName', productName);
      //   image_upload.append('productSize', productSize);
      //   image_upload.append('ProductDescription', ProductDescription);


        $.ajax({
          type:'post',
          url: '/productData',  
          data:{productName:productName,productSize:productSize,ProductDescription:ProductDescription,ProductPrice:ProductPrice},
          success: function(result){
            var jsonData = JSON.parse(result);
            var length = jsonData.length;
            var dataAppend = '';
                for(var i = 0;i < length; i++)
                {
                  dataAppend+='<tr><td>'+jsonData[i].id+'</td><td>'+jsonData[i].productName+'</td><td>'+jsonData[i].productSize+'</td><td>'+jsonData[i].productDescription+'</td><td>'+jsonData[i].productPrice+'</td></tr>';
                }
                $('#productAppend').html(dataAppend);
               
        }});

       
              
});

$(document).ready(function(){
   $.ajax({
    type:'get',
    url: '/ProductDetails',  
    success: function(result){
      var jsonData = JSON.parse(result);
      var length = jsonData.length;
      var dataAppend = '';
          for(var i = 0;i < length; i++)
          {
            dataAppend+='<tr><td>'+jsonData[i].id+'</td><td>'+jsonData[i].productName+'</td><td>'+jsonData[i].productSize+'</td><td>'+jsonData[i].productDescription+'</td><td>'+jsonData[i].productPrice+'</td></tr>';
          }
          $('#productAppend').html(dataAppend);
         
  }});

});