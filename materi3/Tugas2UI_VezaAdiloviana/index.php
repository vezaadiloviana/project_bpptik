<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/style/login.css">
    <title>Document</title>
</head>

<body>
    <div class="container pt-5">
        <div class="content rounded ">
            <div class="row">

                <div class="col">
                    <div class="content pt-5 pb-5">
                        <img class="card-img-top" src="assets/upload/bg.png" alt="Card image cap">
                    </div>
                </div>

                <div class="col">
                    <div class="login">
                        <div class="card-body mt-4">
                            <h2 class="card-title text-center pb-3">LOGIN</h2>
                            <form action="garding.php" method="GET"> 
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" aria-describedby="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group pb-3">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <a href="garding.php"><button type="submit" class="btn btn-primary" name="btnlgn">Login</button></a>
                            </form>
                            <div class="lupa">
                                <div class="text-right pt-2">
                                    <a href="#">
                                        <p>Lupa Password?</p>
                                    </a>
                                </div>
                            </div>
                            <div class="akunbaru">
                                <div class="text-center pt-2">
                                    <p>Tidak Punya Akun? <a href="#">Daftar disini</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>