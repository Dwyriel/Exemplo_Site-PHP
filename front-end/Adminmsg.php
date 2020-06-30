<?php 
$pagtitle = 'Admin - Contatos';
include "../navbar.php";
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0){
    $r = NULL;
    $sql = mysqli_query($connect, "SELECT * FROM mensagem;");
    while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
        $r[]= $row;
    }
    mysqli_close($connect);
    ?>
    <div class=" d-flex justify-content-center" style="flex-direction: column;">
        <div class=" d-flex justify-content-center">    
            <div class="row"><a href="Admin.php"><h1><span class="badge badge-pill badge-dark">Voltar</span></h1></a></div>
        </div>
    </div>
    <div class=" d-flex justify-content-center col-xl-12" style="flex-direction: column;">
        <div class="d-flex justify-content-center my-3 col-xl-12">
            <h2>Listagem</h2>
        </div>
        <div class="d-flex justify-content-center my-3 col-xl-12">
            <table class="table table-light table-striped table-bordered table-responsive-sm col-xl-10">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mensagem</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if(is_null($r)){
                        ?>
                        <tr>
                            <td colspan="3">
                                <strong>Não existe registro</strong>
                            </td>
                        </tr>
                        <?php
                    } else {
                        foreach($r as $i){
                    ?>
                        <tr>
                            <td>
                                <?=$i["id"]?>
                            </td>
                            <td>
                                <?=$i["nome"]?>
                            </td>
                            <td>
                                <?=$i["email"]?>
                            </td>
                            <td>
                                <?=$i["texto"]?>
                            </td>
                            <td>
                                <a href="../back-end/del.php?idmsg=<?php echo $i['id']; ?>">Deletar</a>
                            </td>
                        </tr>
                        <?php 
                        }
                    }
                    ?>
                </tbody>
            </table>
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
