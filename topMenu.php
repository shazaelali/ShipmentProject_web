<nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <h3>
                        Welcome
                        <?php if(isset($_SESSION["name"])){echo  $_SESSION["name"];}else  header("Location:Login.html");?>
                    </h3>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="images/icon-delivery.png" alt="" class="img-fluid rounded-circle img mr-2">
                                    <?php

                                    if(isset($_SESSION["name"])){
                                    echo  $_SESSION["name"];
                                    }

                                    else echo"error";
                                    ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item paddingMenu" href="MyProfile.php" style="padding: 0px;"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item paddingMenu" href="LogOut.php" style="padding: 0px;"> <i class="fa fa-sign-out" aria-hidden="true"></i>logOut</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>