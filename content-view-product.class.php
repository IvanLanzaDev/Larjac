<div class="container">
    <div class="col-12 col-md-12 mt-5 mb-md-5 text-center">
        <div class="row">
            <div class="col-12 col-md-3 mb-3">
                <?php
                    echo "
                        <a href='#' data-toggle='modal' data-target='#exampleModalCenter1'>
                            <img src='$list_products_url[photo1_products]' class='img-fluid'>
                        </a>    
                    ";
                    
                ?>   
            </div>
            <div class="col-12 col-md-9 text-justify">
                <?php
                    echo "<h3>$list_products_url[name_products]</h3> $list_products_url[desc_products]";
                ?>
                <!-- <a href="#" class="btn btn-primary mb-5">Tenho Interesse</a>-->
            </div>
        </div>
        <div class="row">
                <?php
                    
                    if($list_products_url[photo4_products] != "imgs/products/"){
                      echo "
                        <div class='col-12 col-md-6'>
                            <a href='#' data-toggle='modal' data-target='#exampleModalCenter2'>
                                <img src='$list_products_url[photo2_products]' class='img-fluid'>
                            </a>
                        </div>
                        ";
                    }
                    if($list_products_url[photo4_products] != "imgs/products/"){
                      echo "
                        <div class='col-12 col-md-6'>
                            <a href='#' data-toggle='modal' data-target='#exampleModalCenter3'>
                                <img src='$list_products_url[photo3_products]' class='img-fluid'>
                            </a>
                        </div>
                      ";
                    }
                    if($list_products_url[photo4_products] != "imgs/products/"){
                      echo "
                        <div class='col-12 col-md-6'>
                            <a href='#' data-toggle='modal' data-target='#exampleModalCenter4'>
                                <img src='$list_products_url[photo4_products]' class='img-fluid'>
                            </a>
                        </div>
                        ";
                    }
                ?>
            
                
            </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo "$list_products_url[name_products]"; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo "<img src='$list_products_url[photo1_products]' class='img-fluid'>"; ?>
      </div>
    </div>
  </div>
</div>
        
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo "$list_products_url[name_products]"; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo "<img src='$list_products_url[photo2_products]' class='img-fluid'>"; ?>
      </div>
    </div>
  </div>
</div>
        
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo "$list_products_url[name_products]"; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo "<img src='$list_products_url[photo3_products]' class='img-fluid'>"; ?>
      </div>
    </div>
  </div>
</div>  

<div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo "$list_products_url[name_products]"; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo "<img src='$list_products_url[photo4_products]' class='img-fluid'>"; ?>
      </div>
    </div>
  </div>
</div>        
        
        
    </div>
</div>