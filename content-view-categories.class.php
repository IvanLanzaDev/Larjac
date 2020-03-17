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
                <h3>Categorias</h3>
                <a href="new-categorie.php" class="btn btn-outline-primary ml-3">Nova Categoria</a>
            </div>
            
            <table class="table table-hover table-light border border-primary mt-4">
                      <thead>
                        <tr>
                          <th scope="col">Categoria</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                          
                        <?php
                            while($list_category = mysqli_fetch_array($get_category)){
                                echo "
                                <tr>
                                  <td>$list_category[name_category]</td>
                                  <td></td>
                                  <td><a href='edit-categorie.php?id_edit_category=$list_category[id_category]' class='btn btn-primary btn-sm'>Alterar Categoria</a></td>
                                </tr>
                                ";
                            }
                        ?>
                        
                      </tbody>
                    </table>
            
        </div>
    </div>
</div>