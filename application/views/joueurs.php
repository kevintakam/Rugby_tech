
  <head>
    <title>Modal Bootstrap</title>
    <!-- Inclure les fichiers CSS et JS de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    
<link rel="stylesheet" href="<?= base_url()?>/assets3/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>/assets3/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>/assets3/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url()?>/assets3/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>/assets3/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url()?>/assets3/dist/css/skins/_all-skins.min.css">
</head>
<section>
    <div>
    <div>
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            

    <div class="box-footer clearfix no-border">
        <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Modification</button>
    </div>

    
        <div class="row gy-4">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered form-horizontal table-striped">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Age</th>
                  <th>Poids</th>
                  <th>Poste</th>
                  <th>Image</th>
                
                </tr>
                </thead>
                <tbody>


               
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Age</th>
                  <th>Poids</th>
                  <th>Poste</th>
                  <th>Image</th>
                   
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div> 
</div>
          </div>
</section>
   
    
<script src="<?= base_url()?>/assets3/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>/assets3/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    
<style>
        .popup {
            width: 400px;
            height: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
    </style>

    
    

   

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Contenu du modal -->
            <div class="modal-header">
                <h5 class="modal-title">Mon Modal</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="age">Âge:</label>
                        <input type="number" class="form-control" id="age" placeholder="Entrez votre âge">
                    </div>
                    <div class="form-group">
                        <label for="poids">Poids:</label>
                        <input type="number" class="form-control" id="poids" placeholder="Entrez votre poids">
                    </div>
                    <div class="form-group">
                        <label for="poste">Poste:</label>
                        <input type="text" class="form-control" id="poste" placeholder="Entrez votre poste">
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>
