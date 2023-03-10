<?php 

    include_once("templates/header.php");

?>

    <div id="create-form" class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Criar Contato</h1>
        <form action="<?=$BASE_URL?>config/data_process.php" method="post">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome." required>
            </div>

            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone." required>
            </div>

            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Digite as observações." rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
 
<?php 

    include_once("templates/footer.php");

?>          