<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>webu blog </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="views/css/style.css" rel="stylesheet">
    <style></style>
</head>

<body>
<div class="section" id="b-section-header" name="Header">
    <div class="widget Header" data-version="2" id="Header1">
        <div class="header image-placement-behind no-image">
            <div class="container">
                <h1><a href="">Web blog Tutorial</a></h1>

            </div>
        </div>
    </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Web  blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
            <div class="ml-auto my-2 my-lg-0">
                <div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
                    <div class="widget BlogSearch" data-version="2" id="BlogSearch1">
                        <form action="" class="form-inline">
                            <input aria-label="Search this blog" class="form-control mr-sm-2" name="q"
                                   placeholder="Search this blog" type="text">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->

        <div class="col-md-8">
           <?php echo $content ; ?>
            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">← Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer →</a>
                </li>
            </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-3">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Simba</a>
                                </li>
                                <li>
                                    <a href="#">Nyati</a>
                                </li>
                                <li>
                                    <a href="#">Faru</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Kiboko</a>
                                </li>
                                <li>
                                    <a href="#">Fisi</a>
                                </li>
                                <li>
                                    <a href="#">Pundamlia</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">banner</h5>
                <div class="card-body">
                    <img class="card-img-top"
                         src="https://2.bp.blogspot.com/-vvG5hMTFOro/W6RaoxdAikI/AAAAAAAAK1k/jezYdP7fvfYvt15Jv8a0agrGQE2lMU8YgCKgBGAs/s1600/MASAI-2.jpg"
                         alt="Card image cap">
                </div>
            </div>
            <!-- tweeter -->

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!--footer-->
<footer class="kilimanjaro_area">
    <!-- Top Footer Area Start -->

    <!-- Footer Bottom Area Start -->
    <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© All Rights Reserved by <a href="#">Webublogoverflow.blogspot -(with all love)<i
                                    class="fa fa-love"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
