<?php
 session_start();

  $servername= "mysql-server";
  $username= "root";
  $password= "secret";
  $database= "Products";

  $conn=mysqli_connect($servername , $username , $password , $database);

  $query = "SELECT * FROM products";
  $result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <form action="upload.php" method="POST">
        <label for="id">Enter product id</label> <br><br>
        <input type="text" name="product_id" id="product_id" placeholder="Enter product id"> <br><br>
        <label for="name">Enter product name</label> <br><br>
        <input type="text" name="product_name" id="product_name" placeholder="Enter product name"> <br><br>
        <label for="category">Enter product category</label> <br><br>
        <input type="text" name="product_category" id="product_category" placeholder="Enter product category"> <br><br>
        <label for="sub_category">Enter product subcategory</label> <br><br>
        <input type="text" name="product_sub_category" id="product_sub_category" placeholder="Enter product sub_category"> <br><br>
        <label for="color">Enter product color</label> <br><br>
        <input type="text" name="product_color" id="product_color" placeholder="Enter product Color"> <br><br>
        <label for="color">Enter product price</label> <br><br>
        <input type="text" name="product_price" id="product_price" placeholder="Enter product Price"> <br><br>

       <input type="submit" onclick="addproduct()" id="btnsubmit" value="Add Product">
                <div class="error"></div>
                <div class="success"></div>
    </form>

    <script>
         function addproduct(){
            //  console.log('hello');
                                    var id=document.getElementById("product_id").value;
                                    // console.log(id);
                                    var pname=document.getElementById("product_name").value;
                                    var category=document.getElementById("product_category").value;
                                    var subcategory=document.getElementById("product_sub_category").value;
                                    var pcolor=document.getElementById("product_color").value;
                                    var pprice=document.getElementById("product_price").value;
                              
                                    event.preventDefault();
                                    // $('.hide').show();
                                    $.ajax({
                                        type: "POST",
                                        url: "upload.php",
                                        datatype: 'JSON',
                                        data : {
                                        id:id, 
                                        pname : pname,
                                        category : category,
                                        subcategory : subcategory,
                                        pcolor : pcolor,
                                        pprice : pprice,
                                        
                                        "action": "add",
                                    }
                                }).done(function(data) {
                                    console.log(data);
                                            

                                });
                            }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>