
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Utama</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light" id="sidebar-wrapper" style="position: fixed;" >
    
      <div class="list-group list-group-flush">
          <div class="sidebar-heading bg-dark text-light " style="
    padding-top: 60px;
    text-align: center;

"><img src="https://st2.depositphotos.com/1104517/11965/v/950/depositphotos_119659092-stock-illustration-male-avatar-profile-picture-vector.jpg" width="100" height="100" class="rounded-circle" alt="Cinque Terre" style="display: block;
  margin-left: auto;
  margin-right: auto;">
Nama</div>
        <a href="#" class="list-group-item list-group-item-action bg-light">Beranda</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Arsitektur</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Desain Produk</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Perencanaan Wilayah Kota</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Desain Interior</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Desain Komunikasi Visual</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Keranjang Belanja</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status Belanja</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper ">

      <nav class="navbar navbar-dark bg-dark navbar-expand-lg"  style="position: fixed; width:100%">
        <button class="btn btn-outline-light" id="menu-toggle">Menu</button>
          <div class="navbar-brand" style="
    padding-left: 10px;
">Beranda</div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

             
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            
            <li>
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light mr-sm-2" type="submit">Search</button>

              </form>

            </li>
            <li>
              <button class="btn btn-outline-light mr-sm-2" type="button" style="
              
              ">Logout</button>
            </ul>
          </div>
        </nav>
        <div id="containerfluid" class="container-fluid" style="
  
">
          <h1 class="mt-4">Simple Sidebar</h1>
          <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
          <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle
        </div>
      </div>
      <!-- /#page-content-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

  </body>

  </html>
