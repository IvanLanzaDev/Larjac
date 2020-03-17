<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 d-none d-md-block bg-white">
            <a href="dashboard.php"><img src="imgs/logo.png" class="img-fluid my-3"></a>
            <ul class="list-group">
              <a href="dashboard.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Inicio</li></a>
              <a href="view-banners.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Banners</li></a>
              <a href="view-products.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Produtos</li></a>
              <a href="view-categories.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Categorias</li></a>
              <a href="view-brands.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Representadas</li></a>
            </ul>
            <a href="index.php" class="btn btn-primary btn-block mt-3" target="_blank">Ver Site</a>
        </div>
        <div class="col-12 col-md-10 border-left bg-light">
            
            <div class="row mt-3 col-12 ml-md-5 pr-4 ml-1">
                <div class="card border-primary mb-3 mr-md-4 ml-md-5 col-12 col-md-3">
                    <div class="row">
                        <div class="card-header text-primary col-12 mx-0">Produtos<a href="view-products.php" class="btn btn-primary btn-sm float-right my-0 py-0">Ver Todos</a></div>
                    </div>
                    <div class="row">
                        <div class="card-body text-black-50">
                            <h5 class="card-title"><?php echo $count_products; ?></h5>
                            <p class="card-text">Produtos.</p>
                        </div>
                    </div>
                </div>
                <div class="card border-primary mb-3 mr-md-4 col-12 col-md-3">
                    <div class="row">
                        <div class="card-header text-primary col-12 mx-0">Categorias<a href="view-categories.php" class="btn btn-primary btn-sm float-right my-0 py-0">Ver Todas</a></div>
                    </div>
                    <div class="row">
                        <div class="card-body text-black-50">
                            <h5 class="card-title"><?php echo $count_category; ?></h5>
                            <p class="card-text">Categorias.</p>
                        </div>
                    </div>
                </div>
                <div class="card border-primary mb-3 mr-md-4 col-12 col-md-3">
                    <div class="row">
                        <div class="card-header text-primary col-12 mx-0">Representadas<a href="view-brands.php" class="btn btn-primary btn-sm float-right my-0 py-0">Ver Todas</a></div>
                    </div>
                    <div class="row">
                        <div class="card-body text-black-50">
                            <h5 class="card-title"><?php echo $count_brand; ?></h5>
                            <p class="card-text">Representadas.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-md-6">
                    <table class="table table-hover table-light border border-primary">
                        <caption>Ultimos produtos cadastrados <a href="view-products.php" class="btn btn-primary btn-sm float-right">Ver Todos</a></caption>
                      <thead>
                        <tr>
                          <th scope="col">Produto</th>
                          <th scope="col">Representada</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            while($list_products = mysqli_fetch_array($get_dashboard_products)){
                                echo "
                                    <tr>
                                      <td>$list_products[name_products]</td>
                                      <td>$list_products[brand_products]</td>
                                      <td><a href='view-product.php?id_product=$list_products[id_products]' class='btn btn-outline-primary btn-sm' target='_blank'>Ver Produto</a></td>
                                    </tr>
                                ";    
                            }
                        ?>  
                        
                      </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-6">
                    <table class="table table-hover table-light border border-primary">
                        <caption>Ultimas representadas cadastradas <a href="view-messages.php" class="btn btn-primary btn-sm float-right">Ver Todas</a></caption>
                      <thead>
                        <tr>
                          <th scope="col">Representada</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            while($list_dashboard_represented = mysqli_fetch_array($get_dashboard_brand)){
                                echo "
                                    <tr>
                                      <td>$list_dashboard_represented[name_fab]</td>
                                      <td></td>
                                      <td><a href='brand-products.php?brand=$list_dashboard_represented[id_fab]' class='btn btn-outline-primary btn-sm'>Ver Produtos da Representada</a></td>
                                    </tr>
                                ";    
                            }
                        ?>
                      </tbody>
                    </table>
                </div>
                
            </div>
            
            
            
        </div>
    </div>
</div>