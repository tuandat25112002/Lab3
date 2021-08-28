<?php
require_once('config.php');




                    if(isset($_GET['submitadd'])){
                       if(isset($_GET['g-recaptcha-response'])){
                        $secretkey = "6LdxQSwcAAAAANL1cAqhBDdKas2bWuACXh33kbyZ";
                        $ip = $_SERVER['REMOTE_ADDR'];
                        $response = $_GET['g-recaptcha-response'];
                        $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                        $fire = file_get_contents($url);
                        $data = json_decode($fire);
                        if($data->success==true){
                        if($_GET['code']!=null && $_GET['productName']!=null && $_GET['price']!=null && $_GET['inputimg']!=null){
                            $category= $_GET['category_id'];
                            $code= $_GET['code'];
                            $productName= $_GET['productName'];
                            $price= $_GET['price'];
                            $image= $_GET['inputimg'];
                            $sqladd="INSERT INTO products (categoryID, code, nameproduct,image,gia) VALUES ('$category', '$code', '$productName','$image','$price') ";   
                            $stmadd = $conn->prepare($sqladd);
                            $stmadd->execute();
                            echo '<script language="javascript">';
                            echo 'alert("Add Success")'; 
                            echo '</script>';  
                            $category_id=$category;

                            $sqltotal = "SELECT * from products where categoryID= $category";
                        $rs = $conn->query($sqltotal);
                        $rows = $rs->rowCount();    
                        $totalpages= ceil($rows/3);


                            $_GET['nopage'] = $totalpages;  
                            
                            include "index.php";                             

                        }
                        else{
                            echo '<script language="javascript">';
                            echo 'alert("You must compelete this Form if you want add this product !")'; 
                            echo '</script>';  
                            include "add_product.php";  
                            }
                        }
                        else{
                            echo '<script language="javascript">';
                            echo 'alert("Let Fill The Captcha if you are not a Robot!!")'; 
                            echo '</script>';
                            include "add_product.php";  
   
                        }
                    } 

                    }
                    
                    
                    
                    ?>