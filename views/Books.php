<?php
    $categories = new CategoriesController();
    $categories = $categories->getAllCategories();
    if(isset($_POST["cat_id"])){
        $products = new ProductsController();
        $products = $products->getProductsByCategory($_POST['cat_id']);
    }else{
        $data = new ProductsController();
        $products = $data->getAllProducts();
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md">
            <ul>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" font-family: Josefin Sans, Regular Roman; color: #0086C7; font-size: 22px;">
                        Catégories Produits
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul class="list-group">
                            <?php foreach($categories as $category) :?>

                                <li class="list-group-item">
                                    <form id="catPro" method="post" action="<?php echo BASE_URL;?>Books">
                                        <input type="hidden" name="cat_id" id="cat_id">
                                    </form>
                                    <a onclick="getCatProducts(<?php echo $category['cat_id'];?>)" class="btn btn-link text-secondary" style="text-decoration:none;font-size:19px;cursor:pointer;font-family: Josefin Sans, Regular Roman; color :#464545">
                                        <?php
                                            echo $category['cat_title'];
                                        ?>
                                        (<?php
                                            $productsByCat = new ProductsController();
                                            $productsByCat = $productsByCat->getProductsByCategory($category['cat_id']);
                                            echo count($productsByCat);
                                        ?>)
                                    </a>
                                </li>
                                
                            <?php endforeach; ?>
            
                        </ul>
                       
                    </div>
            </li>
            </ul>
        </div>
    </div>
</div>












<div class="container">
    <div class="row my-5">
        <div class="col">
            <div class="row">
                <?php
                    if(count($products) > 0) :
                ?>
                <?php
                    foreach($products as $product) :
                ?>
                <div class="col-4">
                <div class="card" style="width: 18rem;">
                        <br>
                        
                        <center>
                        <center><img src="./public/uploads/<?php echo $product["product_image"];?>" alt="" class="img-fluid" style="width: 200px; height: 265px"></center>
                        </center>
                        <br>
                        <div class="card-body">
                        <div class="container">
                            <div class="row">
                            <div class="col-6 col-lg-6 col-md-6">
                                <h5 class="card-title-price" style="font-family: Josefin Sans, Regular Roman; color: #464545; font-size: 22px;" > <?php echo $product['product_price'];?>,00dh </h5>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6">
                                <h5 class="card-title-olde-price" style="font-family: Josefin Sans, Regular Roman; color: #CFCCCC; font-size: 20px;"> <strike><?php echo $product['old_price']; ?>,00dh</strike> </h5>
                            </div>
                            </div>
                            
                        </div>
                        <div class="card-text">
                        <div class="card-text-title">
                                        <form id="form" method="post" action="<?php echo BASE_URL;?>show">
                                            <input type="hidden" name="product_id" id="product_id">
                                        </form>
                                        <h3 style="font-family: Josefin Sans, Regular Roman; color: #173D7A; font-size: 22px;">
                                            <?php
                                                echo $product['product_title'];
                                            ?>
                                        </h3>


                        </div>
                        <p class="card-text-Author" style="font-family: Josefin Sans, Regular Roman; color: #CFCCCC; font-size: 17px;"> <?php echo $product['short_desc'];?></p>
                        </div>
                        
                        </div>
                        <center>
                        <button  style="font-size: 15px; background-color: #4D6A98; border-color: #4D6A98;border: 1px solid #4D6A98;width: 88%; height: 100%;border-radius: 50px;font-size: 14px;color : white " id="btn-details" onclick="submitForm(<?php echo $product["product_id"];?>)"class="card-title"> <i class="fas fa-plus"></i> PLus de Détails </button>
                        </center>
                        
                    </div>
                    

                    
                </div>
                <?php
                    endforeach;
                ?>
                <?php
                    else :
                ?>
                <div class="alert alert-info">
                    aucun produit trouvé
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
       
    </div>
</div>


