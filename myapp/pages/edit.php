<?php
$user = $controller->edit($_GET['id']);
?>

<div class="col-6">
    <form action="../form/update.php" method="post" id="update">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="age" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $user['age']; ?>">
            </div>
        </div>
    </form>

    <button type="submit" form="update" class="btn btn-primary">Save</button>
    <a href="index.php" class="btn btn-light">Cancel</a>
</div>