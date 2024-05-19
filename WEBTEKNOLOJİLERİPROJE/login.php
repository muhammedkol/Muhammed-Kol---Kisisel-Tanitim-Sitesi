<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script>
        function toggleMenu() {
            var navbar = document.getElementById("navbarSupportedContent");
            if (navbar.classList.contains("show")) {
                navbar.classList.remove("show");
            } else {
                navbar.classList.add("show");
            }
        }
    </script>
    <title>Login | Muhammed Kol</title>
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-white">
        <div class="container">
            <a href="index.html" class="navbar-brand text-white">Muhammed Kol</a>
            <button id="button" class="navbar-toggler" type="button" onclick="toggleMenu()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link text-white">Ana Sayfa</a></li>
                    <li class="nav-item"><a href="hakkında.html" class="nav-link text-white">Hakkında</a></li>
                    <li class="nav-item"><a href="ozgecmis.html" class="nav-link text-white">Özgeçmiş</a></li>
                    <li class="nav-item"><a href="sehrim.html" class="nav-link text-white">Şehrim</a></li>
                    <li class="nav-item"><a href="takımımız.html" class="nav-link text-white">Takımımız</a></li>
                    <li class="nav-item active"><a href="login.php" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="iletisim.html" class="nav-link text-white">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="bg-secondary text-light jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <h1 class="display-4 font-weight-bold">LOGIN</h1>
                        <br>
                    </div>
                </div>
            </div>
            <div class="container">
                <form id="formid" method="post" action="login.php">
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="name" class="form-control" placeholder="Email 'abc@sakarya.edu.tr'" required="required">
                        <small class="form-text text-muted">Doldurulması zorunlu alan</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre</label>
                        <input type="password" name="password" class="form-control" placeholder="Şifre 'abc'" required="required">
                        <small class="form-text text-muted">Doldurulması zorunlu alan</small>
                    </div>
                    <button class="btn btn btn-dark" type="submit">Gönder</button>
                    <br><br><br>
                </form>
                <div class="php">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            include 'kullaniciler.php';
                            $input_name = $_POST['name'];
                            $input_password = $_POST['password'];

                            if ($input_name == $username && $input_password == $password) {
                                header("Location: git-login.html?username=" . urlencode($username));
                                exit();
                            } else {
                                header("Location: gitme-login.html");
                                exit();
                            }
                        }
                    ?>  
                </div>
            </div>
        </div>
        <div class="bg-secondary text-light jumbotron"></div>
    </header>
    <footer class="py-5 bg-secondary text-white text-center fixed-bottom">
        Web Teknolojileri Projesi © Muhammed Emin Kol 2024
    </footer>
</body>
</html>
