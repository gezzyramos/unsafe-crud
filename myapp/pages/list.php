<?php
$users = $controller->list();
?>

<div class="col-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?php echo $user['id']; ?></th>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['age']; ?></td>
                    <td>
                        <a href="./index.php?page=edit&id=<?php echo $user['id']?>" type="button" class="btn btn-primary btn-sm"><i data-feather="edit"></i></a>
                        <a href="./index.php?page=delete&id=<?php echo $user['id']?>" type="button" class="btn btn-danger btn-sm"><i data-feather="trash-2"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="./index.php?page=create" class="btn btn-success me-md-2" type="button">Add</a>
    </div>
</div>