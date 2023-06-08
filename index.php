<?php include('AWS_PHP') ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Reg Test</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class = "container shadow w-50 vh-60">
            <div class = "row justify-content-center"> <!-- Main Container-->
                <div><!-- Tile -->
                    <h2>Input Page</h2>
                </div>
                <div><!-- Info -->
                    <form method="post">
                        <div><!-- Name -->
                            <label>Name</label>
                            <input type="text" class="form-control" name="Name"/>
                        </div>
                        <div> <!-- Email -->
                            <label>Email</label>
                            <input type="email" class="form-control" name="Email"/>
                        </div>
                        <div>
                        <input type="submit" class="btn btn-primary" name="reg_user">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>