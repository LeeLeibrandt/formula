<nav id="nav" class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php">
        <img src="img/logo.svg" alt="logo" style="width:100px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Races</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Drivers
                </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Hamilton</a>
                    <a class="dropdown-item" href="#">Bottas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cars</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Mission</a>
            </li>
        </ul>
        <?php
            
            $id = $_SESSION['user_login'];

            $select_stmt = $db->prepare("SELECT * FROM tbl_user WHERE user_id=:uid");
            $select_stmt->execute(array(":uid"=>$id));

            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if(isset($_SESSION['user_login'])) 
            {
                echo "Welcome back " . "<a href='includes/welcome.php'>" . $row['username'] ."</a>";
            }
            else
            {
                echo "Welcome Guest <a href='includes/login.php'><button class='btn btn-outline-primary btn-sm'>Login<button></a> ";
            }
        ?>
    </div>
</nav>
