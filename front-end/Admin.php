<?php 
$pagtitle = 'Admin - Main Page';
include "../navbar.php";
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0){
?>
    <div class="container pt-5">
        <div class=" d-flex justify-content-center" style="flex-direction: column;">
            <div class=" d-flex justify-content-center">    
                <div class="row"><a href="NewArt.php"><h1><span class="badge badge-pill badge-dark">Novo Artigo</span></h1></a></div>
            </div>
            <div class=" d-flex justify-content-center">    
                <div class="row"><a href="AdminArt.php"><h1><span class="badge badge-pill badge-dark">Editar Artigo</span></h1></a></div>
            </div>
            <div class=" d-flex justify-content-center">    
                <div class="row"><a href="AdminAcc.php"><h1><span class="badge badge-pill badge-dark">Editar Cadastros</span></h1></a></div>
            </div>
            <div class=" d-flex justify-content-center">    
                <div class="row"><a href="Adminmsg.php"><h1><span class="badge badge-pill badge-dark">Feedback</span></h1></a></div>
            </div>
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