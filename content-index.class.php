<div class="container">
    <div class="bt-1 mt-3 d-none d-md-block">
        <h3>Parcerias</h3>
    </div>
    <div class="row text-center d-none d-md-block mt-3">
        <a href="http://trimos.com.br" target="_blank"> <img src="imgs/trimos-logo.jpg" class="col-md-2 h-100"> </a>
        <a href="http://www.bowersgroup.co.uk/row/" target="_blank"> <img src="imgs/bowers.jpg" class="col-md-2 h-100"> </a>
        <a href="https://lasertex.eu/language/en/" target="_blank"> <img src="imgs/lasertex-logo.png" class="col-md-2 h-100"> </a>
        <a href="http://www.feinmess-suhl.com" target="_blank"> <img src="imgs/logo-feinmess-suhl.png" class="col-md-2 h-100"> </a>
        <a href="http://microtest.ch/" target="_blank"> <img src="imgs/microtest-logo.jpg" class="col-md-2 h-100"> </a>
        <a href="https://www.lw-gmbh.com/061/index.html" target="_blank"> <img src="imgs/lw-logo.jpg" class="col-md-2 h-100"> </a>
        <a href="http://www.toshostivar.cz" target="_blank"> <img src="imgs/TOS-HOSTIVAR-logo.png" class="col-md-2 h-100"> </a>
        <a href="http://www.visioneng.com.br/" target="_blank"> <img src="imgs/visioneng-logo.jpg" class="col-md-2 h-100"> </a>
        <a href="http://www.wylerag.com/" target="_blank"> <img src="imgs/wyler-logo.png" class="col-md-2 h-100"> </a>
        <a href="http://www.affri.com/" target="_blank"> <img src="imgs/affri-logo.png" class="col-md-2 h-100"> </a>
        <a href="https://www.ultra-germany.de/index.php" target="_blank"> <img src="imgs/ultra-logo.png" class="col-md-2 h-100"> </a>
    </div>
    
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
            <h3 class="py-0 my-0 ml-3">Filtro</h3><hr class="ml-3">
             <div class="row mb-4 ml-3">

                    <form action="filter.php" method="post" class="form-inline">
                    <select class="form-control" name="filter">
                        <option selected>Escolha a representada</option>
                        <?php 
                            while($list_brands = mysqli_fetch_array($get_brand)){
                                echo "
                                    <option>$list_brands[name_fab]</option>
                                ";
                            }
                         ?>
                        
                    </select>
                    <button type="submit" class="btn btn-primary ml-3" name="btn_filter"> Filtrar </button>
                </form>
                </div>
            <div class="row col-12 mx-auto text-center">

                <?php 
                    while($list_products = mysqli_fetch_array($get_products)){
                        echo "
                            <div class='products col-12 col-md-3 border rounded pt-4 pb-4 mb-4 mr-2'>
                                <div>
                                    <a href='view-product.php?id_product=$list_products[id_products]'>
                                        <img src='$list_products[photo1_products]' class='img-fluid col-12 col-md-12' style='max-width: 366px; max-height: 470px;'>
                                    </a>
                                </div>
                                <div class='text-left'>
                                    <a href='view-product.php?id_product=$list_products[id_products]'>
                                        <h4>$list_products[name_products]</h4>
                                    </a>    
                                    <p class='text-left'>";
                                    $desc = $list_products[desc_products];
                                    $text = substr($desc, 0, 115);
                                    echo $text." ....";
                        
                                    echo "
                                    </p>
                                    <a href='view-product.php?id_product=$list_products[id_products]'class='btn btn-primary btn-block'>Mais Detalhes</a>    
                                </div>    
                            </div>
                        ";    
                    }
                ?>
                
            </div>
        </div>
        </div>
    
</div>