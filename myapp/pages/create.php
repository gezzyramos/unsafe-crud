<div class="col-6">
    <form action="../form/create.php" method="post" id="insert">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="age" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="age" name="age">
            </div>
        </div>
    </form>

    <button type="submit" form="insert" class="btn btn-primary">Save</button>
    <a href="index.php" class="btn btn-light">Cancel</a>
</div>