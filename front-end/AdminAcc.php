<?php 
$pagtitle = 'Admin - Cadastros';
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
            <h6 class="border-bottom border-gray pb-2 mb-0">Cadastros:</h6>
                <?php
                $r = NULL;
                $sql = mysqli_query($connect, "SELECT * FROM usuario ORDER BY id ASC;");
                while($row = mysqli_fetch_assoc($sql)){
                    $r[]= $row;
                }
                if(is_null($r)){
                    echo "Nenhum cadastro encontrado.";
                } else {
                    foreach($r as $i){
                        if($i['admin'] == 1){
                            $ativo = "Usuario.";
                        } elseif($i['admin'] == 0){
                            $ativo = "Administrador.";
                        }
                        ?> 
                        <div class="media text-muted pt-3 position-relative">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <?php
                        $id = $i['id'];
                        $r2 = NULL;
                        $sql2 = mysqli_query($connect, "SELECT * FROM profile WHERE usuario_id = '$id';");
                        while($row2 = mysqli_fetch_assoc($sql2)){
                            $r2[]= $row2;
                        }
                        if(!empty($r2)){
                            foreach($r2 as $i2){
                                if(!is_null($i2['arquivo'])){
                                ?> 
                                    <img src="../userimg/<?php echo $i2['arquivo'];?>" style="float: left; margin: 0 5px 11px 0;" width="55px" height="55px">
                                <?php 
                                }
                            }
                        }
                    ?>
                    <strong class="d-block text-gray-dark"> <?php echo $i['nome']; ?></strong> 
                    Login: <?php echo $i['login']; ?> - Email: <?php echo $i['email'];
                    echo "<br>Privilegio: " . $ativo;; ?>
                </p>
                <div class="">
                    <p class="small" style="float: right;"><a href="AdminEditAcc.php?acc=<?php echo $i['id'];?>" class="stretched-link">Editar</a></p>
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
