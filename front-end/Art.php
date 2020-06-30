<?php 
    if(!isset($_GET["art"])){
        header("location:index.php");
    }
     $pagtitle = $_GET["art"]; 
     include "../navbar.php"; ?>
    <div class="container bg-white rounded shadow-sm" style="text-align: justify;">
        <?php
            $titulo = $_GET["art"];
            $r = NULL;
            $sql = mysqli_query($connect, "SELECT * FROM conteudo WHERE titulo = '$titulo';");
            while($row = mysqli_fetch_assoc($sql)){
                $r[]= $row;
            }    
            ?>
        <br>
        <?php 
            if(is_null($r)){
                echo "<script>alert('Ops, algo deu errado.');</script>";
                header("location:index.php");
            } else {
                foreach($r as $i){
            ?>
            <div class="d-flex justify-content-center row m-3 col-xl-12">
                <h2><?php echo $i['titulo']; ?></h2>
            </div>
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
                <p>
                    <img class="float-left rounded" src="../uploads/<?php echo $i2['arquivo'];?>" style="margin: 10px 10px 0 5px; padding: 2px;" width="25%">
                </p>
                <?php }
                    }
                }
            $text = explode("\n", $i["texto"]);
            $num = count($text);
            for ($t = 0; $t<$num; $t++){
            ?>
            <p>
                <?php echo $text[$t]; ?>
            </p>
            <?php }
                }
            }
            mysqli_close($connect);
            ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>