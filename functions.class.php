<?php

include("connect.class.php");

$email_login = $_POST['email_user'];
$password_login = $_POST['pass_user'];
$btn_login = $_POST['btn_login'];

if(isset($btn_login)){
    $execute_login = mysqli_query($link, "SELECT * FROM user WHERE email_user = '$email_login' AND pass_user = '$password_login'");
    $count_execute_login = mysqli_num_rows($execute_login);
    
   
    
    if($count_execute_login == 1){
        session_start();
        $_SESSION['email_user'] = $_POST['email_user'];
        $_SESSION['pass_user'] = $_POST['pass_user'];
        header("location: dashboard.php");
        
        
    }else{
        header("location: login.php");
    }
}

// NEW BAMMER
    $link_slider = $_POST['link_slider'];
    $btn_new_slider = $_POST['btn_new_slider'];

    $nome = $_FILES['img_slider']['name'];
    $temporario = $_FILES['img_slider']['tmp_name'];
    $diretorio = "imgs/banners/".$nome;
    move_uploaded_file($temporario, $diretorio); 

    if(isset($btn_new_slider)){
        $new_slider = mysqli_query($link, "INSERT INTO slider(img_slider,link_slider)VALUES('$diretorio','$link_slider')");
        
        if($new_slider){
            header("location: ok-new-banner.php");
        }else{
            echo "erro";
        }
    }
// GET BANNERS
    $get_slider = mysqli_query($link, "SELECT * FROM slider ORDER BY id_slider DESC");
    $get_slider_indicator = mysqli_query($link, "SELECT * FROM slider");
    $count_slider = mysqli_num_rows($get_slider);  

// EDIT BANNERS
    $id_edit_banner_url = $_GET['id_edit_banner'];
    $get_edit_banner = mysqli_query($link, "SELECT * FROM slider WHERE id_slider = '$id_edit_banner_url'");
    $list_edit_banner = mysqli_fetch_array($get_edit_banner);

    $link_slider = $_POST['link_slider'];
    $btn_edit_banner = $_POST['btn_edit_banner'];

    $nome = $_FILES['img_slider']['name'];
    $temporario = $_FILES['img_slider']['tmp_name'];
    $diretorio = "imgs/banners/".$nome;
    move_uploaded_file($temporario, $diretorio);

    if(isset($btn_edit_banner)){
        $edit_banner = mysqli_query($link, "UPDATE slider SET img_slider = '$diretorio', link_slider = '$link_slider' WHERE id_slider = '$id_edit_banner_url'");
        if($edit_banner){
            header("location: ok-edit-banner.php");
        }
    }

// GET CATEGORY
    $get_category = mysqli_query($link, "SELECT * FROM category ORDER BY name_category ASC");
    $get_category_mobile = mysqli_query($link, "SELECT * FROM category ORDER BY name_category ASC");
    $count_category = mysqli_num_rows($get_category);

// NEW CATEGORY
    $name_category = $_POST['name_category'];
    $btn_new_category = $_POST['btn_new_category'];
    
    if(isset($btn_new_category)){
        $new_category = mysqli_query($link, "INSERT INTO category(name_category)VALUES('$name_category')");
        
        if($new_category){
            header("location: ok-new-categorie.php");
        }
    }

// EDIT CATEGORY
    $id_edit_category_url = $_GET['id_edit_category'];
    $get_edit_category = mysqli_query($link, "SELECT * FROM category WHERE id_category = '$id_edit_category_url'");
    $list_edit_category = mysqli_fetch_array($get_edit_category);

    $name_edit_category = $_POST['name_category'];
    $btn_edit_category = $_POST['btn_edit_category'];

    if(isset($btn_edit_category)){
        $edit_category = mysqli_query($link, "UPDATE category SET name_category = '$name_edit_category' WHERE id_category = '$id_edit_category_url'");
        if($edit_category){
            header("location: ok-edit-categorie.php");
        }
    }

// GET BRANDS
    $get_brand = mysqli_query($link, "SELECT * FROM represented ORDER BY name_fab ASC");
    $get_brand_mobile = mysqli_query($link, "SELECT * FROM represented ORDER BY name_fab ASC");
    $get_dashboard_brand = mysqli_query($link, "SELECT * FROM represented ORDER BY id_fab DESC LIMIT 6");
    

    $count_brand = mysqli_num_rows($get_brand);

// NEW BRAND
    $name_brand = $_POST['name_fab'];
    $btn_new_brand = $_POST['btn_new_brand'];
    
     if(isset($btn_new_brand)){
        $new_brand = mysqli_query($link, "INSERT INTO represented(name_fab)VALUES('$name_brand')");
        if($new_brand){
            header("location: ok-new-brand.php");
        }
    }

// EDIT BRAND
    $id_edit_brand_url = $_GET['id_edit_brand'];
    $get_edit_brand = mysqli_query($link, "SELECT * FROM represented WHERE id_fab = '$id_edit_brand_url'");
    $list_edit_brand = mysqli_fetch_array($get_edit_brand);

    $name_edit_brand = $_POST['name_fab'];
    $btn_edit_brand = $_POST['btn_edit_brand'];

    if(isset($btn_edit_brand)){
        $edit_brand = mysqli_query($link, "UPDATE represented SET name_fab = '$name_edit_brand' WHERE id_fab = '$id_edit_brand_url'");
        if($edit_brand){
            header("location: ok-edit-brand.php");
        }else{
            echo "Erro";
        }
    }

// GET MESSAGE
    $get_message = mysqli_query($link, "SELECT * FROM messages");
    $get_dashboard_message = mysqli_query($link, "SELECT * FROM messages ORDER BY id_msg DESC LIMIT 6");

// NEW MESSAGE
    $name_msg = $_POST['name_msg'];
    $email_msg = $_POST['email_msg'];
    $msg_msg = $_POST['msg_msg'];
    $btn_new_msg = $_POST['btn_new_msg'];
  
    if(isset($btn_new_msg)){
        $new_message = mysqli_query($link, "INSERT INTO messages(name_msg, email_msg, msg_msg)VALUES('$name_msg','$email_msg','$msg_msg')");
        
        if($new_message){
            header("location: ok-new-message.php");
        }
    }

// READ MESSAGE
    $id_message_url = $_GET['id_message'];
    $read_message = mysqli_query($link, "SELECT * FROM messages WHERE id_msg = '$id_message_url'");

// NEW PRODUCT
    $name_product = $_POST['name_products'];
    $brand_product = $_POST['brand_products'];
    $category_product = $_POST['category_products'];
    $desc_product = $_POST['desc_products'];
    $btn_new_product = $_POST['btn_new_product'];

    if(isset($btn_new_product)){
           foreach($_FILES['photo1_products']['tmp_name'] as $key1 => $tmp_name1 ){
            $file_name1 = $key.$_FILES['photo1_products']['name'][$key1];
            $file_size1 =$_FILES['photo1_products']['size'][$key1];
            $file_tmp1 =$_FILES['photo1_products']['tmp_name'][$key1];	

            $desired_dir1="imgs/products";
            $dir1 = "$desired_dir1/".$file_name1;
            if(is_dir("$desired_dir1/".$file_name1)==false){
                    move_uploaded_file($file_tmp1,$dir1);
            } // IF

            } // FOR EACH 1
            foreach($_FILES['photo2_products']['tmp_name'] as $key2 => $tmp_name2 ){
                $file_name2 = $key.$_FILES['photo2_products']['name'][$key2];
                $file_size2 =$_FILES['photo2_products']['size'][$key2];
                $file_tmp2 =$_FILES['photo2_products']['tmp_name'][$key2];	

                $desired_dir2="imgs/products";
                $dir2 = "$desired_dir2/".$file_name2;
                if(is_dir("$desired_dir2/".$file_name2)==false){
                        move_uploaded_file($file_tmp2,$dir2);
                } // IF
            } // FOR EACH
    
            foreach($_FILES['photo3_products']['tmp_name'] as $key3 => $tmp_name3 ){
                $file_name3 = $key.$_FILES['photo3_products']['name'][$key3];
                $file_size3 =$_FILES['photo3_products']['size'][$key3];
                $file_tmp3 =$_FILES['photo3_products']['tmp_name'][$key3];	

                $desired_dir3="imgs/products";
                $dir3 = "$desired_dir3/".$file_name3;
                if(is_dir("$desired_dir3/".$file_name3)==false){
                        move_uploaded_file($file_tmp3,$dir3);
                } // IF
            } // FOR EACH
        
            foreach($_FILES['photo4_products']['tmp_name'] as $key4 => $tmp_name4 ){
                $file_name4 = $key.$_FILES['photo4_products']['name'][$key4];
                $file_size4 =$_FILES['photo4_products']['size'][$key4];
                $file_tmp4 =$_FILES['photo4_products']['tmp_name'][$key4];	

                $desired_dir4="imgs/products";
                $dir4 = "$desired_dir4/".$file_name4;
                if(is_dir("$desired_dir4/".$file_name4)==false){
                        move_uploaded_file($file_tmp4,$dir4);
                } // IF
            } // FOR EACH
        
            $new_product = mysqli_query($link, "INSERT INTO products(name_products,brand_products,category_products,photo1_products,photo2_products,photo3_products,photo4_products,desc_products)VALUES('$name_product','$brand_product','$category_product','$dir1','$dir2','$dir3','$dir4','$desc_product')");
        
            if($new_product){
                header("location: ok-new-product.php");
            }
            else{echo "Erro";}
        }

// GET PRODUCTS
    $get_products = mysqli_query($link, "SELECT * FROM products ORDER BY id_products DESC");
    //$get_products = mysqli_query($link, "SELECT * FROM products WHERE brand_products = 'Trimos' OR brand_products = 'Baty' OR brand_products = 'Moore&Wright' OR brand_products = 'CV Instruments' OR brand_products = 'Steinmeyer' OR brand_products = 'Lasertex' OR brand_products = 'Vision Engineering' OR brand_products = 'Microtest' OR brand_products = 'Wyler' OR brand_products = 'Affri' OR brand_products = 'Ultra Prazision' ORDER BY name_products ASC");
    
    $get_dashboard_products = mysqli_query($link, "SELECT * FROM products ORDER BY id_products DESC LIMIT 6");
    $count_products = mysqli_num_rows($get_products);

    $id_product_url = $_GET['id_product'];
    $get_product_url = mysqli_query($link, "SELECT * FROM products WHERE id_products = '$id_product_url'");
    $list_products_url = mysqli_fetch_array($get_product_url);

    $id_product_category_url = $_GET['category'];
    $get_category_url = mysqli_query($link, "SELECT * FROM category WHERE id_category = '$id_product_category_url'");
    $list_get_category_url = mysqli_fetch_array($get_category_url);
    $category_url = $list_get_category_url['name_category'];
    $get_product_by_category = mysqli_query($link, "SELECT * FROM products WHERE category_products = '$category_url'");

    $id_product_brand_url = $_GET['brand'];
    $get_brand_url = mysqli_query($link, "SELECT * FROM represented WHERE id_fab = '$id_product_brand_url'");
    $list_get_brand_url = mysqli_fetch_array($get_brand_url);
    $brand_url = $list_get_brand_url['name_fab'];
    $get_product_by_brand = mysqli_query($link, "SELECT * FROM products WHERE brand_products = '$brand_url'");
    

// EDIT PRODUCTS
    $id_edit_products_url = $_GET['id_edit_product'];
    $get_edit_products = mysqli_query($link, "SELECT * FROM products WHERE id_products = '$id_edit_products_url'");
    $list_edit_products = mysqli_fetch_array($get_edit_products);

    $name_edit_product = $_POST['name_products'];
    $brand_edit_product = $_POST['brand_products'];
    $category_edit_product = $_POST['category_products'];
    $desc_edit_product = $_POST['desc_products'];
    $btn_edit_product = $_POST['btn_edit_product'];

    if(isset($btn_edit_product)){
           foreach($_FILES['photo1_products']['tmp_name'] as $key1 => $tmp_name1 ){
            $file_name1 = $key.$_FILES['photo1_products']['name'][$key1];
            $file_size1 =$_FILES['photo1_products']['size'][$key1];
            $file_tmp1 =$_FILES['photo1_products']['tmp_name'][$key1];	

            $desired_dir1="imgs/products";
            $dir1 = "$desired_dir1/".$file_name1;
            if(is_dir("$desired_dir1/".$file_name1)==false){
                    move_uploaded_file($file_tmp1,$dir1);
            } // IF

            } // FOR EACH 1
            foreach($_FILES['photo2_products']['tmp_name'] as $key2 => $tmp_name2 ){
                $file_name2 = $key.$_FILES['photo2_products']['name'][$key2];
                $file_size2 =$_FILES['photo2_products']['size'][$key2];
                $file_tmp2 =$_FILES['photo2_products']['tmp_name'][$key2];	

                $desired_dir2="imgs/products";
                $dir2 = "$desired_dir2/".$file_name2;
                if(is_dir("$desired_dir2/".$file_name2)==false){
                        move_uploaded_file($file_tmp2,$dir2);
                } // IF
            } // FOR EACH
    
            foreach($_FILES['photo3_products']['tmp_name'] as $key3 => $tmp_name3 ){
                $file_name3 = $key.$_FILES['photo3_products']['name'][$key3];
                $file_size3 =$_FILES['photo3_products']['size'][$key3];
                $file_tmp3 =$_FILES['photo3_products']['tmp_name'][$key3];	

                $desired_dir3="imgs/products";
                $dir3 = "$desired_dir3/".$file_name3;
                if(is_dir("$desired_dir3/".$file_name3)==false){
                        move_uploaded_file($file_tmp3,$dir3);
                } // IF
            } // FOR EACH
        
            foreach($_FILES['photo4_products']['tmp_name'] as $key4 => $tmp_name4 ){
                $file_name4 = $key.$_FILES['photo4_products']['name'][$key4];
                $file_size4 =$_FILES['photo4_products']['size'][$key4];
                $file_tmp4 =$_FILES['photo4_products']['tmp_name'][$key4];	

                $desired_dir4="imgs/products";
                $dir4 = "$desired_dir4/".$file_name4;
                if(is_dir("$desired_dir4/".$file_name4)==false){
                        move_uploaded_file($file_tmp4,$dir4);
                } // IF
            } // FOR EACH
     
        $edit_product = mysqli_query($link, "UPDATE products SET name_products = '$name_edit_product', brand_products = '$brand_edit_product', category_products = '$category_edit_product', photo1_products = '$dir1', photo2_products = '$dir2', photo3_products = '$dir3',photo4_products = '$dir4', desc_products = '$desc_edit_product' WHERE id_products = '$id_edit_products_url'");
        
        if($edit_product){
            header("location: ok-edit-product.php");
        }else{echo "erro";}
    }
    
// DELETE PRODUCT
    $id_delete_product_url = $_GET['id_delete_product'];
    $btn_delete_product = $_POST['btn_delete_product'];

    if(isset($btn_delete_product)){
        $delete_product = mysqli_query($link, "DELETE FROM products WHERE id_products = '$id_delete_product_url'");
        if($delete_product){
            header("location: ok-delete-product.php");
        }else{echo "Erro";}
    }

// SEARCH
    $search = $_POST['search'];
    $btn_search = $_POST['btn_search'];
    
    if(isset($btn_search)){
        $get_search = mysqli_query($link, "SELECT * FROM products WHERE name_products LIKE '%$search%'");
        $count_search = mysqli_num_rows($get_search);
    }

// FILTER
    $filter = $_POST['filter'];
    $btn_filter = $_POST['btn_filter'];
    
    if(isset($btn_filter)){
        $get_filter = mysqli_query($link, "SELECT * FROM products WHERE brand_products = '$filter'");
        $count_filter = mysqli_num_rows($get_filter);
    }
?>