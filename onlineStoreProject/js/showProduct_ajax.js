function showProduct() {
  $.ajax({
      url:"index.php", //the page containing php script
      type: "POST", //request type
      success:function(result){
       alert(result);
     }
   });
}
