<html>
    <head>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    </head>
<body>
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
                <h3>Alterar Representada</h3>
                <a href="view-brands.php" class="btn btn-danger ml-3">Cancelar</a>
            </div>
            
            <form method="post" enctype="multipart/form-data" class="col-12 mt-3">
                
                <div class="row">
                    <div class="form-group col-12 col-md-4">
                        <label class="lead">Representada</label>
                        <input type="text" class="form-control" autofocus required name="name_fab" value="<?php echo $list_edit_brand['name_fab']; ?>">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-5">
                        <input type="submit" class="btn btn-success d-none d-md-block" name="btn_edit_brand" value="Alterar Representada">
                        <input type="submit" class="btn btn-success d-block d-md-none btn-block btn-lg" name="btn_edit_brand" value="Alterar Representada">
                    </div>
                </div>
                
            </form>
            
        </div>
    </div>
</div>
</body>
</html>