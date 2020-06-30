<?php include "../navbar.php"; ?>
    <div class="container">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Artigos Recentes:</h6>
            
                <?php
                    $r = NULL;
                    if ($pagtitle == 'Home'){
                    $sql = mysqli_query($connect, "SELECT * FROM conteudo WHERE ativo = '1' ORDER BY id DESC LIMIT 5;");
                    } else {
                    $sql = mysqli_query($connect, "SELECT * FROM conteudo WHERE ativo = '1' ORDER BY id DESC;");
                    }
                    while($row = mysqli_fetch_assoc($sql)){
                        $r[]= $row;
                    }    
                    if(is_null($r)){
                        echo "Nenhum artigo encontrado.";
                    } else {
                        foreach($r as $i){
                            if($i['ativo'] == 1){
                            ?> 
                            <div class="media text-muted pt-3 position-relative">
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <?php
                            $id = $i['id'];
                            $r2 = NULL;
                            $sql2 = mysqli_query($connect, "SELECT * FROM galeria WHERE conteudo_id = '$id';");
                            while($row2 = mysqli_fetch_assoc($sql2)){
                                $r2[]= $row2;
                            }
                            if(!empty($r2)){
                                foreach($r2 as $i2){
                                    if(!is_null($i2['arquivo'])){
                                ?> 
                                
                                    <img src="../uploads/<?php echo $i2['arquivo'];?>" style="float: left; padding: 0 5px 11px 0;" height="60px">
                                
                                <?php }
                                }
                            }
                        ?>
                    
                        <strong class="d-block text-gray-dark"> <?php echo $i['titulo']; ?> </strong>
                        <?php echo $i['descricao'] ?>
                        <a href="Art.php?art=<?php echo $i['titulo'];?>" class="stretched-link">Continuar lendo.</a>
                    </p>
                    <?php 
                    $d_array = explode(" ", $i["data_publi"]);  
                    $ymd = explode("-", $d_array[0]);
                    $data = $ymd[2].'/'.$ymd[1].'/'.$ymd[0] ."<br>". $d_array[1];
                    ?>
                    <p class="small" style="float: right;"><?php echo $data; ?></p>
                    </div>
                    <?php
                        }
                    }
                }