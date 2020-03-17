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
                <h3>Novo Produto</h3>
                <a href="view-products.php" class="btn btn-danger ml-3">Cancelar</a>
            </div>
            
            <form method="post" enctype="multipart/form-data" class="col-12 mt-3" action="#">
                <p class="ml-0 ml-md-2 mt-3 text-danger">
                    Atenção as dimensões do arquivo.<br>
                    <small>Utilizar dimensões:</small><br>
                    <small><strong>Largura: 366px | </strong></small>
                    <small><strong>Altura: 470px</strong></small><br>
                    <small><strong>Não há restrição de tamanho para imagens horizontais.</strong></small>
                    
                    <a href="imgs/exemplo-imagem-larjarc.psd">Baixar arquivo modelo</a>
                </p>
                <div class="row">
                    <div class="form-group col-12 col-md-4">
                        <label class="lead">Produto</label>
                        <input type="text" class="form-control" autofocus required name="name_products">
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <label class="lead">Representada</label>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="brand_products">
                                <option selected>Escolha...</option>
                                <?php
                                    while($list_brand = mysqli_fetch_array($get_brand)){
                                        echo "
                                        <option>$list_brand[name_fab]</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <label class="lead">Categoria</label>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="category_products">
                                <option selected>Escolha...</option>
                                <?php
                                    while($list_category = mysqli_fetch_array($get_category)){
                                        echo "
                                        <option>$list_category[name_category]</option>
                                        ";
                                    }
                                ?>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-md-4">
                        <label class="lead">Foto do Produto</label>
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="photo1_products[]">
                            <label class="custom-file-label" for="inputGroupFile01">Escolha o arquivo</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <label class="lead">Foto do Produto</label><small class="text-danger"> Sem restrição de tamanho</small>
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02" name="photo2_products[]">
                            <label class="custom-file-label" for="inputGroupFile02">Escolha o arquivo</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <label class="lead">Foto do Produto</label><small class="text-danger"> Sem restrição de tamanho</small>
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" name="photo3_products[]">
                            <label class="custom-file-label" for="inputGroupFile03">Escolha o arquivo</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <label class="lead">Foto especificações tecnicas</label><small class="text-danger"> Sem restrição de tamanho</small>
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="photo4_products[]">
                            <label class="custom-file-label" for="inputGroupFile04">Escolha o arquivo</label>
                          </div>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 col-md-8">
                        <label class="lead">Descrição do Produto</label>
                        <textarea class="form-control" id="editor" name="desc_products"></textarea>       
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-5">
                        <input type="submit" class="btn btn-success d-none d-md-block" name="btn_new_product" value="Cadastrar Produto">
                        <input type="submit" class="btn btn-success d-block d-md-none btn-block btn-lg" name="btn_new_product" value="Cadastrar Produto">
                    </div>
                </div>
                
            </form>
            
        </div>
    </div>
</div>
</body>
</html>