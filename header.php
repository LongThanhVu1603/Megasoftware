<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megasoftware</title>
    <link rel="shortcut icon" type="image/png" href="./img/logo.png"/>

    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Link Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="layout.css">

</head>
<body id="content">
    <!-- Header -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a href="./index.php" class="navbar-branch">
                <img src="./img/logo2.jpg" alt="Logo" height="70px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a <?php echo ($page == 'one') ? "class=' nav-link active_cus'" : ""; ?> class="nav-link" href="index.php">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page == 'two') ? "class=' nav-link active_cus'" : ""; ?> class="nav-link" href="./intro.php">Giới Thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page == 'three') ? "class=' nav-link active_cus'" : ""; ?> class="nav-link" href="./product.php">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page == 'four') ? "class=' nav-link active_cus'" : ""; ?> class="nav-link" href="./service.php">Dịch Vụ</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page == 'five') ? "class=' nav-link active_cus'" : ""; ?> class="nav-link" href="./news.php">Tin Tức</a>
                    </li>
                </ul>
                <form class="form-inline" action="#">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm Kiếm">
                        <span class="input-group-text"> <i class="fas fa-search"></i></span>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- End Header -->