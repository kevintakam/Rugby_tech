


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rugby Tech</title>
    <link href="<?= base_url() ?>assets/img/logo.png" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets2/vendor2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets2/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/sweetalert/sweetalert.min.css">

</head>
<body class="bg-gradient-danger">
<br />
<br />
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
                            <div class="col-lg-6"><img  src="<?= base_url() ?>assets/img/logo.png" style="position:absolute;width:100%;height:100%;background-image:white;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-family: lucida;">Bienvenue sur Rugby tech</h1>
                                    </div>
                                    <form id="register" class="user" method="POST" action="<?=base_url('login/creercompte')?>">  
                                    <?php if (isset($error)): ?> <span style="color: red;" id="error" required> <?php echo $message; ?></span><?php endif; ?> 
                                        <div class="form-group">
                                            <input for="nom" class="form-control form-control-user"
                                                id="nom" name="nom" required="required" aria-describedby="emailHelp"
                                                placeholder="Entrer votre nom ">
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>        
                                        </div>
                                        <div class="form-group">
                                            <input for="prenom" class="form-control form-control-user"
                                                id="prenom" name="prenom" required="required" aria-describedby="emailHelp"
                                                placeholder="Entrer votre prenom">
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>        
                                        </div>
                                        <div class="form-group">
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
                                            <input type="password" class="form-control form-control-user"
                                                id="confpassword" name="confpassword" required="required" placeholder="confirmer votre mot de passe.......">
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                
                                        </div>
                                        <hr >
                                         <button type="submit" class="btn btn-success btn-user btn-block"  id="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Inscription</button>

                                        <hr>
                                        <div class="text-center">
                                        <a class="small" href="<?= base_url('login') ?>">J'ai déjà un compte !</a>
                                    </div>
                                    </form>

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
    <script src="<?= base_url() ?>assets/sweetalert/sweetalert.min.js"></script>
    <script>
    var message = <?php echo $json_message; ?>;
    Swal.fire({
        icon: message.status ? 'success' : 'error',
        title: message.title,
        text: message.message,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
</script>
</body>

</html>


