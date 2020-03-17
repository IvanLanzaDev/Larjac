<div class="container">
    
    <!-- CATEGORY MOBILE -->
    <div class="row mx-auto mt-3 d-block d-md-none">
        <a class="btn btn-primary btn-block btn-lg dropdown-toggle" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Categorias
        </a>
        <div class="collapse col-12 border border-primary rounded-bottom" id="collapseExample">
            <div class="row mx-0 px-0 my-3">
                
                <div>
                    <?php 
                while($list_category_mobile = mysqli_fetch_array($get_category_mobile)){
                    echo "
                        <a href='category-products.php?category=$list_category_mobile[id_category]' class='list-group-item'>$list_category_mobile[name_category]</a>  
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
            <a href="#" class="list-group-item active active-item">Categorias</a>
            <?php 
                while($list_category = mysqli_fetch_array($get_category)){
                    echo "
                        <a href='category-products.php?category=$list_category[id_category]' class='list-group-item'>$list_category[name_category]</a>  
                    ";   
                }
            ?>
            
             
        </div>
    <!-- END CATEGORY DESKTOP -->    
        <div class="container-products col-12 col-md-9 mt-5">
            <div class="row col-12 col-md-12 mx-auto text-center">
                <?php

                    if($count_filter >= 1){
                       echo "
                    <div class='alert alert-success col-12' role='alert'>
                      Exibindo somente produtos da representada <strong>$filter</strong>.
                    </div>
                   ";
                   
                   }
                ?>
            </div>
            <div class="row col-12 mx-auto text-center">
                <?php 
                if($count_filter >= 1){
                   while($list_products_filter = mysqli_fetch_array($get_filter)){
                        echo "
                            <div class='products col-12 col-md-3 border rounded pt-4 pb-4 mb-4 mr-2'>
                                <div>
                                    <a href='#'>
                                        <img src='$list_products_filter[photo1_products]' class='img-fluid col-6 col-md-12'>
                                    </a>
                                </div>
                                <div class='text-left'>
                                    <a href='#'>
                                        <h4>$list_products_filter[name_products]</h4>
                                    </a>    
                                    <p class='text-left'>";
                                    $desc = $list_products_filter[desc_products];
                                    $text = substr($desc, 0, 115);
                                    echo $text." ....";
                                    echo "
                                        
                                    </p>
                                    <a href='view-product.php?id_product=$list_products_filter[id_products]' class='btn btn-primary btn-block'>Mais Detalhes</a>    
                                </div>    
                            </div>  
                        ";       
                    }
                }
                 
                ?>
                
                
            </div>
        </div>
        </div>
    
</div>