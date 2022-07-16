<?php
if (isset($_POST['submit'])){
    echo "123";
}

    ?>
<!DOCTYPE html>
<head>
    <title> Emmacob</title>
</head>

<body>
<form action="<?php echo $_SERVER?>>" method="post">
    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-eye"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">login</button>
        </div>
        <!-- /.col -->
    </div>
</form>

</body>
</html>