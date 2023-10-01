<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VenomSite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <style>
      *{
        box-sizing: border-box;
      }
    </style>
</head>
<body>

<div class="container-fluid p-0">
  <div class="row w-100 h-100">
    <div class="col-sm-12 col-md-2 p-0">
      <nav id="sidebarMenu" class="d-md-block h-100 bg-light sidebar collapse p-2">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item border-bottom border-secondary">
              <a class="nav-link h4" href="/">
                Venom Site <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="/fang">Fang Types</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="/venom">Venom types</a>
            </li>
            <li class="nav-item">
              <?php 
              if(isset( $_SESSION['admin'])) { ?>
                <a class="nav-link text-secondary" href="/admin/logout">Log out</a>
              <?php } else { ?>
                <a class="nav-link text-secondary" href="/admin">Log in</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="col-sm-12 col-md-10 p-0">
      <div class="main px-5 py-2">
  

  

