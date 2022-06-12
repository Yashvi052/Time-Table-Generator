<div class="main_header">
    <div id="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="left">
                        <ul class="list-unstyled m-b-0">
                            <li><a href="javascript:void(0);" class="btn btn-link"><i class="zmdi zmdi-email m-r-5"></i>info@glsuniversity.ac.in</a>
                                <a href="javascript:void(0);" class="btn btn-link"><i class="zmdi zmdi-phone m-r-5"></i>+91 79 26440532</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="text-right">
                        <ul class="list-unstyled m-b-0">
                            <li> <?php
                                    echo "Hi " . $_SESSION['studentname'];
                                    echo " <a href='admin/change-password1.php'>Change Password</a> |";
                                    echo " <a href='logout.php'>Logout</a>";
                                    ?>
                                <a href="sign-in.php" class="btn btn-link">User SignIn</a>
                                <a href="admin/sign-in1.php" class="btn btn-link">Admin SignIn</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include './header.php';
    include './navbar.php';
    ?>
</div>