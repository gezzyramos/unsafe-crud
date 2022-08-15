<?php
// $controller->delete($_GET['id']);
?>
<div class="alert alert-danger" role="alert">
    Tem certeza que deseja deletar esse usuário?
</div>

<div class="col-6">
    <form action="../form/delete.php" method="post" id="delete">
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>">
    </form>

    <button type="submit" form="delete" class="btn btn-danger">Remove</button>
    <a href="index.php" class="btn btn-light">Cancel</a>
</div>