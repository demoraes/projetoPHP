
        <?php include 'header.php'; ?>


           
        <div class="cardapio-list small-11 large-12 columns no-padding small-centered">
            
            <div class="global-page-container">
                <div class="cardapio-title small-12 columns no-padding">
                    <h3>Cardapio</h3>
                    <hr></hr>
                </div>

                     <?php
                        
                        $server = 'mysql';
                        $user = 'root';
                        $password = 'rootPASS';
                        $db_name = 'restaurante';

                        $db_connect = @new mysqli($server,$user,$password,$db_name);
                        mysqli_set_charset($db_connect,"utf8");

                        if ($db_connect->connect_error) {
                            echo 'Falha: ' . $db_connect->connect_error;
                            print_r($db_connect);
                        } else {
                            echo 'Conexão feita com sucesso' . '<br><br>';
                            $sql = "SELECT DISTINCT categoria FROM pratos";
                            $result = $db_connect->query($sql);
                            
                            if($result->num_rows >= 0) {

                                while($row = $result->fetch_assoc()) { 

                                    $categoria = $row['categoria']; ?>
                                   
                                   <div class="category-slider small-12 columns no-padding">
                                        <h4><?php echo $categoria; ?></h4>

                                        <div class="slider-cardapio">
                                            <div class="slider-002 small-12 small-centered columns">

                                              <?php

                                                $sql2 = "SELECT * FROM pratos WHERE categoria='$categoria'";
                                                $result2 = $db_connect->query($sql2);

                                                if($result2->num_rows > 0) {
                                                    while($row2 = $result2->fetch_assoc()) { ?>
                                                        
                                                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                                            <div class="cardapio-item">
                                                                <a href="prato.php?prato=<?php echo $row2['codigo']; ?>">
                                                                    
                                                                    <div class="item-image">
                                                                        <img src="img/cardapio/<?php echo $row2['codigo']; ?>.jpg" alt="cheesecake"/>   
                                                                    </div>

                                                                    <div class="item-info">
                                                                        <div class="title"><?php echo $row2['nome']; ?></div>
                                                                    </div>

                                                                    <div class="gradient-filter">
                                                                    </div>
                                                                    
                                                                </a>
                                                            </div>
                                                        </div>

                                                <?php }
                                                }

                                              ?>
                                            
                                            </div>
                                        </div>
                                    
                                    </div>
                                   

                            
                            
                            <?php }

                            } else {
                                'Não há destaques';
                            }
                        }    
                    
                    ?>    

                

            

                <div class="category-slider small-12 columns no-padding">
                    <h4>Sobremesas</h4>

                    <div class="slider-cardapio">
                        <div class="slider-002 small-12 small-centered columns">

                            <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                <div class="cardapio-item">
                                    <a href="cheesecake-cereja.html">
                                        
                                        <div class="item-image">
                                            <img src="img/cardapio/cheesecake-cereja.jpg" alt="cheesecake"/>   
                                        </div>

                                        <div class="item-info">
                                            
                                        
                                            <div class="title">Cheesecake de Cereja</div>
                                        </div>

                                        <div class="gradient-filter">
                                        </div>
                                        
                                    </a>
                                </div>
                            </div>

                            <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                <div class="cardapio-item">
                                    <a href="cheesecake-cereja.html">
                                        
                                        <div class="item-image">
                                            <img src="img/cardapio/flan-frutas-vermelhas.jpg" alt="flan"/>   
                                        </div>

                                        <div class="item-info">
                                            
                                        
                                            <div class="title">Flan de Frutas Vermelhas</div>
                                        </div>

                                        <div class="gradient-filter">
                                        </div>
                                        
                                    </a>
                                </div>
                            </div>

                            <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                <div class="cardapio-item">
                                    <a href="cheesecake-cereja.html">
                                        
                                        <div class="item-image">
                                            <img src="img/cardapio/petit-gateau.jpg" alt="petit-gateau"/>   
                                        </div>

                                        <div class="item-info">
                                            
                                        
                                            <div class="title">Petit Gateau</div>
                                        </div>

                                        <div class="gradient-filter">
                                        </div>
                                        
                                    </a>
                                </div>
                            </div>

                            <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                <div class="cardapio-item">
                                    <a href="cheesecake-cereja.html">
                                        
                                        <div class="item-image">
                                            <img src="img/cardapio/creme-papaya.jpg" alt="papaya"/>
                                        </div>

                                        <div class="item-info">
                                            
                                        
                                            <div class="title">Creme de Papaya com Cassis</div>
                                        </div>

                                        <div class="gradient-filter">
                                        </div>
                                        
                                    </a>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                   
                </div>




            </div>
        </div>

        
   
<?php include 'footer.php'; ?>


      