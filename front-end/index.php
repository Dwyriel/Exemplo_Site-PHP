<?php $pagtitle = 'Home'; include "../back-end/mainpag.php";
                $sql3 = mysqli_query($connect, "SELECT id FROM conteudo WHERE ativo = '1';");
                while($fetchid = mysqli_fetch_array($sql3, MYSQLI_NUM)){
                    $rid[]= $fetchid;
                }   
                if(!empty($rid)){
                    $ridt = count($rid);
                } else {
                    $ridt = 0;
                }
                mysqli_close($connect); 
                if($ridt > 5){
                ?>
                <div class="d-flex justify-content-center border-bottom border-gray pr-5 py-2 my-0 position-relative">
                <a href="Artigos.php" class="stretched-link">Carregar mais</a>
                </div>
                <?php } 
                if(!empty($_SESSION['alert'])){
                    $msg = $_SESSION['alert'];
                    echo "<script>alert('$msg');</script>";
                    $_SESSION['alert'] = NULL;
                } ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
