<?php 
$pagtitle = 'Admin - Artigos';
include "../navbar.php";
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0){
    ?>
    <div class="container">
        <div class=" d-flex justify-content-center" style="flex-direction: column;">
            <div class=" d-flex justify-content-center">    
                <div class="row"><a href="Admin.php"><h1><span class="badge badge-pill badge-dark">Voltar</span></h1></a></div>
            </div>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Artigos:</h6>
                <?php
                $r = NULL;
                $sql = mysqli_query($connect, "SELECT * FROM conteudo ORDER BY id DESC;");
                while($row = mysqli_fetch_assoc($sql)){
                    $r[]= $row;
                }
                if(is_null($r)){
                    echo "Nenhum artigo encontrado.";
                } else {
                    foreach($r as $i){
                        if($i['ativo'] == 1){
                            $ativo = " - Ativo.";
                        } elseif($i['ativo'] == 0){
                            $ativo = " - Desativo.";
                        }
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
                    <strong class="d-block text-gray-dark"> <?php echo $i['titulo']; ?></strong> 
                    <?php echo $i['descricao'];
                    $d_array = explode(" ", $i["data_publi"]);  
                    $ymd = explode("-", $d_array[0]);
                    $data ="<br>" . $d_array[1] ." - ". $ymd[2].'/'.$ymd[1].'/'.$ymd[0]  ;
                    echo $data . $ativo;; ?>
                </p>
                <div class="">
                    <p class="small" style="float: right;"><a href="AdminEditArt.php?art=<?php echo $i['titulo'];?>" class="stretched-link">Editar</a></p>
                </div>
            </div>
            <?php
            }
        }
        mysqli_close($connect); ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<?php } else {
    header("location:../Front-end/index.php");
} ?>
