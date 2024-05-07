<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD Application</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        padding: 20px;
    }
    .container {
        max-width: 600px;
    }
</style>
</head>
<body>

<div class="container">
    <h1 class="mt-5 mb-4">CRUD Application</h1>

    <!-- Insert User Form -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Add User</h2>
            <form action="crud.php" method="post">
                <input type="hidden" name="action" value="insert">
                <div class="form-group">
                    <label for="full_name">Full Name:</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
    </div>

    <!-- Find User Form -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Find User</h2>
            <form action="crud.php" method="get">
                <input type="hidden" name="action" value="find">
                <div class="form-group">
                    <label for="find_id">User ID:</label>
                    <input type="text" class="form-control" id="find_id" name="id" required>
                </div>
                <button type="submit" class="btn btn-primary">Find User</button>
            </form>
        </div>
    </div>

    <!-- Update User Form -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Update User</h2>
            <form action="crud.php" method="post">
                <input type="hidden" name="action" value="update">
                <div class="form-group">
                    <label for="update_id">User ID:</label>
                    <input type="text" class="form-control" id="update_id" name="id" required>
                </div>
                <div class="form-group">
                    <label for="update_full_name">Full Name:</label>
                    <input type="text" class="form-control" id="update_full_name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="update_phone_number">Phone Number:</label>
                    <input type="text" class="form-control" id="update_phone_number" name="phone_number" required>
                </div>
                <div class="form-group">
                    <label for="update_password">Password:</label>
                    <input type="password" class="form-control" id="update_password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
    </div>

    <!-- Delete User Form -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Delete User</h2>
            <form action="crud.php" method="post">
                <input type="hidden" name="action" value="delete">
                <div class="form-group">
                    <label for="delete_id">User ID:</label>
                    <input type="text" class="form-control" id="delete_id" name="id" required>
                </div>
                <button type="submit" class="btn btn-danger">Delete User</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
