


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url() ?>assets/img/logo.png" rel="icon">
    <title>Rugby Tech</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets2/vendor2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets2/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-danger">
<br />
<br />
<br />
<br />
<br />
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6"><img  src="<?= base_url() ?>assets/img/logo.png" style=" width:100%;height:100%;background-image:white;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-family: lucida;">Bienvenu sur Rugby tech</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?=base_url('login/index')?>">
                                    
                                        <div class="form-group">
                                        <?php if (isset($error)): ?> <span style="color: red;" id="error" required> <?php echo $error; ?></span><?php endif; ?>
                                            <input for="username" class="form-control form-control-user"
                                                id="username" name="username" required="required" aria-describedby="emailHelp"
                                                placeholder="Entrer votre nom utilisateur.......">
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>        
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" required="required" placeholder="Entrer votre mot de passe.......">
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                         <button type="submit" class="btn btn-success btn-user btn-block"  id="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Connexion</button>

                                        <hr>
 
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('login/creercompte') ?>">Créer un nouveau compte!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets2/vendor2/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets2/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets2/vendor2/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets2/js/sb-admin-2.min.js"></script>

</body>

</html>