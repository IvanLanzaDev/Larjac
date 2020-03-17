<div class="container">
    
    
    <!-- CATEGORY MOBILE -->
    <div class="row mx-auto mt-3 d-block d-md-none">
        <a class="btn btn-primary btn-block btn-lg dropdown-toggle" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Representadas
        </a>
        <div class="collapse col-12 border border-primary rounded-bottom" id="collapseExample">
            <div class="row mx-0 px-0 my-3">
                
                <div>
                    <?php 
                        while($list_brands_mobile = mysqli_fetch_array($get_brand_mobile)){
                            echo "
                                <a href='brand-products.php?brand=$list_brands_mobile[id_fab]' class='list-group-item'>$list_brands[name_fab]</a>
                            ";
                        }
                    ?>   
                </div>
            </div> 
        </div>
    </div>
    <!-- END CATEGORY MOBILE -->
  
    <!-- CATEGORY DESKTOP -->
    <div class="row">
        <div class="list-group col-md-3 d-none d-md-block mt-5">
            <a href="#" class="list-group-item active active-item">Representadas</a>
            <?php 
                while($list_brands = mysqli_fetch_array($get_brand)){
                    echo "
                        <a href='brand-products.php?brand=$list_brands[id_fab]' class='list-group-item'>$list_brands[name_fab]</a>
                    ";
                }
            ?>
            
             
        </div>
    <!-- END CATEGORY DESKTOP -->    
        <div class="container-products col-12 col-md-9 mt-5">
            <div class="row col-12 mx-auto text-center">
                <?php 
                   
                
                    while($list_products_by_brand = mysqli_fetch_array($get_product_by_brand)){
                        echo "
                            <div class='products col-12 col-md-3 border rounded pt-4 pb-4 mb-4 mr-2'>
                                <div>
                                    <a href='#'>
                                        <img src='$list_products_by_brand[photo1_products]' class='img-fluid col-6 col-md-12'>
                                    </a>
                                </div>
                                <div class='text-left'>
                                    <a href='#'>
                                        <h4>$list_products_by_brand[name_products]</h4>
                                    </a>    
                                    <p class='text-left'>";
                                    $desc = $list_products_by_brand[desc_products];
                                    $text = substr($desc, 0, 90);
                                    echo $text;
                                    echo "
                                        
                                    </p>
                                    <a href='view-product.php?id_product=$list_products_by_brand[id_products]' class='btn btn-primary btn-block'>Mais Detalhes</a>    
                                </div>    
                            </div>  
                        ";       
                    }
                ?>
                
                
            </div>
        </div>
        </div>
    
</div>