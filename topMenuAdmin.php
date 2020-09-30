<link rel="stylesheet"  href="css/popup.css">
<nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    
                    <h3>
                        Welcome
                        <?php if(isset($_SESSION["chauffeur"])){echo  $_SESSION["namechauffeur"];}?>
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

                                    if(isset($_SESSION["chauffeur"])){
                                    echo  $_SESSION["namechauffeur"];
                                    }

                                    else{} 
                                    ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item paddingMenu" href="MyProfile.php" style="padding: 0px;"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item paddingMenu" href="" id="button" style="padding: 0px;"> <i class="fa fa-sign-out" aria-hidden="true"></i>logOut</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
            <div class="bg_model">
            <div class="model_content">
           <div class="close">
                   +
             </div>

                  <div class="LogOutDesgin">
					   Log out of Stema ?
					   <div  style="text-align: center;margin: 10px;">
                         <a href="LogOut.php" class="LogOut"> log out</a>
					   </div>                  
                </div>
                </div>
               </div> 
               <script>
                   document.getElementById("button").addEventListener("click",function(){
          document.querySelector(".bg_model").style.display="flex" ;
		  getSideBar.style.width="0px";
           getSideBarUl.style.visibility="hidden";
        });
      document.querySelector(".close").addEventListener("click",function(){
          document.querySelector(".bg_model").style.display="none" ;
		  getSideBarUl.style.visibility="visible";
          getSideBar.style.width="270px";
        });
               </script>