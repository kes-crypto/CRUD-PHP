<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <?php require_once 'process.php';?>
    <div class="row justify-content-center">
    <form action="process.php" method="POST">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="Enter your name">
        </div>
        <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control" value="Enter your location">
        </div> 
        <div class="form-group">
        <button type="submit" class="btn btn-primary" name="save">Save</button>
        </div>
    </form>
    </div>
</body>
</html>