<?php 
if(isset($_GET['art'])){
    $pagtitle = 'Admin - Artigo: ' . $_GET['art'];
} else {
    header("location:../Front-end/admin.php");
}
include "../navbar.php";
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0){
    $titulo = $_GET['art'];
    $sql = mysqli_query($connect, "SELECT * FROM conteudo WHERE titulo = '$titulo';");
    $r = mysqli_fetch_assoc($sql);
    if($r['ativo'] == 1){
        $atv = 'checked';
        $deact = '';
    } else {
        $atv = '';
        $deact = 'checked';
    }
    ?>
    <div class="container">
        <div class=" d-flex justify-content-center" style="flex-direction: column;">
            <div class=" d-flex justify-content-center">    
                <div class="row"><a href="Admin.php"><h1><span class="badge badge-pill badge-dark">Voltar</span></h1></a></div>
            </div>
        </div>
        <form enctype="multipart/form-data" method="post" action="../back-end/insertart.php">
            <div class="d-flex justify-content-center row mt-2 col-xl-12">        
                <h1>Editar Artigo: <?php echo $titulo ?></h1>
            </div>
                <div class="row mt-2">
                    <!--Titulo-->
                    <input type="number" value="<?php echo $r['id']; ?>" name="id" hidden> 
                    <div class="col-xl-6">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" value="<?php echo $r['titulo']; ?>" required>
                    </div>
                    <!--Imagem-->
                    <div class="col-xl-6">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                        <label for="img">Enviar imagem: </label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <!--Descricao-->
                    <div class="col-xl-12">
                        <label for="descricao">Descrição: </label>
                        <input type="text" class="form-control" name="descricao" placeholder="Uma previa do texto." value="<?php echo $r['descricao']; ?>" required>
                    </div>
                    <!--Texto-->
                    <div class="col-xl-12">
                        <label for="content">Conteudo: </label>
                        <textarea class="form-control" name="content" required><?php echo $r['texto']; ?></textarea>
                    </div>
                    <div class="d-flex justify-content-center col-xl-12">
                        <div class="mt-2">
                            <input type="radio" id="act" name="ativo" value="1" <?php echo $atv; ?>>
                            <label for="act">Ativo</label>
                            <input type="radio" id="deact" name="ativo" value="0" <?php echo $deact; ?>>
                            <label for="deact">Desativo</label>
                        </div>
                    </div>
                <div class="d-flex justify-content-center row col-xl-12 mt-2">
                    <input type="submit" value="Enviar" name="submit2btn" class="mr-2 btn btn-primary">
                    <input type="reset" value="Limpar" name="resetbtn" class="mx-2 btn btn-secondary">
                    <a class="ml-2 btn btn-secondary" href="../back-end/del.php?idart=<?php echo $r['id']; ?>">Deletar</a>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>
    <?php
} else {
    header("location:../Front-end/index.php");
} ?>