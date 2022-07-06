<?php 
session_start();
$servername="mysql-server";
$username="root";
$password="secret";
$database="Products";

$conn=mysqli_connect($servername , $username , $password , $database);
              
                $id = $_POST["product_id"]; 
                // echo $id;die;
                $product_name = $_POST['product_name'];
                $category = $_POST["product_category"]; 
                $sub_category_name = $_POST["product_sub_category"]; 
                $pcolor = $_POST['product_color'];
                $price = $_POST['product_price'];
                                                          
                //    $query="INSERT INTO `products`(`prod_id`, `prod_name`, `prod_category`, `prod_subcategory`, `prod_color`, `prod_price`) VALUES ($id,$product_name,'$category','$sub_category_name', $pcolor,'$price')";                   
                   $query= "INSERT INTO products (prod_id, prod_name, prod_category, prod_subcategory, prod_color, prod_price) VALUES ('$id','$product_name','$category','$sub_category_name','$pcolor','$price')";
                   $result= mysqli_query($conn,$query);
                   if($result !=0){
                     echo "Product Added!";
                   }
                   else{
                     echo "Product not added!";
                   }                        
?>