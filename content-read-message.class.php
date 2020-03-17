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
                <h3>Mensagem</h3>
                <a href="view-messages.php" class="btn btn-outline-primary ml-3">Voltar</a>
            </div>
            
            <div class="ml-2 mt-3">
                
                <?php
                    $list_read_message = mysqli_fetch_array($read_message);
                
                    echo "
                        <h3>Nome</h3>
                        <p>$list_read_message[name_msg]</p>

                        <h3>Email</h3>
                        <p>$list_read_message[email_msg]</p>

                        <h3>Mensagem</h3>
                        <p class='text-justify mr-2'>$list_read_message[msg_msg]</p>
                    ";
                ?>
                
                <a href="view-messages.php" class="btn btn-primary btn-lg btn-block mb-3 d-block d-md-none">Voltar</a>
                <a href="view-messages.php" class="btn btn-primary mb-3 d-none d-md-table">Voltar</a>
            </div>
        </div>
    </div>
</div>