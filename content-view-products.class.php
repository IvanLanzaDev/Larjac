<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 d-none d-md-block bg-white">
            <img src="imgs/logo.png" class="img-fluid my-3">
            <ul class="list-group">
              <a href="dashboard.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Inicio</li></a>
              <a href="view-banners.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Banners</li></a>
              <a href="view-products.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Produtos</li></a>
              <a href="view-categories.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Categorias</li></a>
              <a href="view-brands.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Representadas</li></a>
              <a href="view-messages.php"><li class="list-group-item item-menu-dashboard text-muted py-0 my-1 border-0">Mensagens</li></a>
            </ul>
            <a href="index.php" class="btn btn-primary btn-block mt-3" target="_blank">Ver Site</a>
        </div>
        <div class="col-12 col-md-10 border-left bg-light">
           
            <div class="row mx-2 mt-3 border-bottom border-primary pb-3">
                <h3>Produtos</h3>
                <a href="new-product.php" class="btn btn-outline-primary ml-3">Novo Produto</a>
            </div>
            
            <table class="table table-hover table-light border border-top-0 border-primary mt-4">
              <thead>
                <tr>
                  <th scope="col" class="border-bottom-0">Produto</th>
                  <th scope="col" class="d-none d-md-block border-bottom-0">Representada</th>
                  <th scope="col" class="border-bottom-0"></th>
                  <th scope="col" class="border-bottom-0"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while($list_products = mysqli_fetch_array($get_products)){
                    echo "
                        <tr>
                        <td><a href='#' target='_blank'>$list_products[name_products]</a></td>
                        <td class='d-none d-md-block'>$list_products[brand_products]</td>
                        <td><a href='edit-product.php?id_edit_product=$list_products[id_products]' class='btn btn-warning btn-sm'>Alterar Produto</a></td>
                        <td><a href='delete-product.php?id_delete_product=$list_products[id_products]' class='btn btn-danger btn-sm'>Excluir Produto</a></td>
                    </tr>
                    "; 
                  }
                ?>
              </tbody>
            </table>
            
        </div>
    </div>
</div>