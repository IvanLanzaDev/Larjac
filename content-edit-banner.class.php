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
           
            <div class="row mx-0 mx-md-2 mt-3 border-bottom border-primary pb-3">
                <h3>Alterar Banner</h3>
                <a href="view-banners.php" class="btn btn-danger ml-3">Cancelar</a>
            </div>
            
            <form method="post" enctype="multipart/form-data">
                <p class="ml-0 ml-md-2 mt-3 text-danger">
                    Atenção as dimensões do arquivo.<br>
                    <small>Dimensões corretas:<br>
                    <strong>Largura: 1280px</strong> | 
                    <strong>Altura: 400px</strong></small>
                </p>
                <div class="row">
                    <div class="input-group mb-3 mt-1 ml-0 ml-md-2 col-12 col-md-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Banner</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img_slider" value="<?php echo $list_edit_banner[img_slider]; ?>">
                        <label class="custom-file-label d-none d-md-block" for="inputGroupFile01">Clique aqui para procurar o arquivo</label>
                        <label class="custom-file-label d-block d-md-none" for="inputGroupFile01">Clique aqui</label>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-4 ml-md-2">
                        <label>Link</label>
                        <input type="text" class="form-control" name="link_slider" value="<?php echo $list_edit_banner[link_slider]; ?>">
                    </div>
                </div>
                    <input type="submit" class="btn btn-success btn-lg btn-block d-block d-md-none" name="btn_edit_banner" value="Alterar Banner">
                    <input type="submit" class="btn btn-success ml-2 d-none d-md-block" name="btn_edit_banner" value="Alterar Banner">
                
            </form>
            
        </div>
    </div>
</div>