<?php 
    require_once "header.php";
?>
    <style>
        html,body{
            height:100%;
            background-color:#34a4eb;
            
        }
        #dot {  
            border-top-right-radius:100%;
            border-bottom-right-radius:100%;
            background-color:white;
            bottom:0px;
            top:0px;
        }
        #bgback{
            top:0;
            bottom:0;
            background-color:#34a4eb;
            height:635px;     
        }   

    </style>
    <div class="container-fluid">
        <div class="row" style="background-color:whitesmoke;"> 
                <div class="col-8"> 
                    <img  class="img-fluid" src="" alt=""> <i class="fa fa-user fa-1.5x" aria-hidden="true"></i>
                    <label for="loggedUser" class="blue-text"> profile</label>
                </div>    
                <div class="col-2" style="margin-top:-10px;">                
                </div>
                <div class="col-2">
                    <div class="btn-group">
                        <i class=" fas fa-user blue-text dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage Account
                        </i>                
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-primary" href="#"> <i class="fa fa-user" aria-hidden="true"></i> My Profile</a></a>
                            <a class="dropdown-item text-primary" href="#"> <i class="fa fa-cog" aria-hidden="true"></i> Change Password</a>
                            <a class="dropdown-item text-primary" href="#"> <i class="fas fa-user-cog"></i> Update Details</a>
                            <a class="dropdown-item text-primary" href="#"> <i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
                        </div>
                    </div>              
                </div>
        </div>
        <div class="row">
            <div class=" col-md-2" style="background-color:white;">   
                <div class="card" style="height:100%;">
                    <div class="card-body" style="background-color:#34a4eb;">
                        <div class="card-text" style="margin-top:40px;">
                            <a href="#"  class="white-text"><i class="menu-icon fa fa-laptop"></i>Dashboard </a><hr>
                            <a href="#" class="dropdown-toggle white-text"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-book"></i> Manage Books</a>
                             <div class="dropdown-menu">
                                <a href="../books/add.php" class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader" ></i> Add Books</a>
                                <a href="#"  class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader"></i>Returned Books</a>
                                <a href="#"  class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader"></i>Not Returned</a>
                            </div><hr>
                            <a href="#" class="dropdown-toggle white-text" data-toggle="dropdown" id="fines" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-book"></i> Manage fines</a>
                             <div class="dropdown-menu">
                                <a href="../books/add.php" class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader" ></i> Update fines</a>
                                <a href="#"  class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader"></i>paid fines</a>
                            </div><hr> 
                            <a  class="dropdown-toggle white-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i><i class="fas fa-money-bill"></i> Manage Fines</a>
                            <div class="sub-menu children dropdown-menu">
                                <a href="#" class="dropdown-item"> <i class="fas fa-money-bill-alt">Unpaid Fines</i> </a>
                                <a href="#" class="dropdown-item "> <i class="fas fa-money-bill-waves  ">Paid Fines</i> </a>
                            </div><hr>
                                <a href="#" class="white-text"> <i class="fa fa-address-book" aria-hidden="true"></i> Issue Books</a><hr>
                                <a href="../books/index.php" class="white-text"><i class="fa fa-address-book" aria-hidden="true"></i>View all Books</a><hr>
                                <a href="#" class="white-text"> <i class="fa fa-cart-plus" aria-hidden="true"></i> View Bookings </a><hr>
                                <a href="#" class="dropdown-toggle white-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-money-bill"></i>Manage Students</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader"></i>  Add Student</a>
                                <a href="#" class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader"></i> View all Students</a>
                            </div><hr>
                            <a href="#" class="dropdown-toggle white-text" data-toggle="dropdown " aria-haspopup="true" aria-expanded="false"> <i class="fa fa-cogs"></i>Setting</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader"></i> Manage Courses</a>
                                <a href="#" class="dropdown-item text-primary white-text"> <i class="fas fa-book-reader"></i>Manage Years</a>
                            </div><hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-5 pull-left" id="dot">
                <div class="card  animated  fadeInDown " style="margin-right:120px;margin-top:50px;">
                        <div class="card-body">
                        <i class="fas fa-book yellow-text text-center fa-3x" style="margin-top:-16px;color:brown"></i>
                           <a href="#">Today's Issued Books</a>
                        </div>
                </div>
                <div class="card animated  fadeInLeft " style="margin-right:120px;margin-top:40px;">
                     <div class="card">
                        <div class="card-body">
                            <i class="fas fa-book yellow text-center fa-3x" style="margin-top:-16px;color:blue"></i>
                            <a href="#">Returned Books</a>
                        </div>
                     </div>
                </div>
                <div class="card animated  fadeInLeft" style="margin-right:120px;margin-top:40px;">
                     <div class="card">
                        <div class="card-body">
                            <i class="fas fa-book blue-text text-center fa-3x"style="margin-top:-16px;color:red"></i>
                            <a href="#">Not Returned Books</a>
                        </div>
                     </div>
                </div>
                <div class="card animated fadeInUp" style="margin-right:120px;margin-top:30px;">
                     <div class="card">
                        <div class="card-body">
                            <i class="fas fa-book red-text text-center fa-3x" style="margin-top:-16px;color:orange"></i>
                            <a href="#">Total Books</a>
                        </div>
                     </div>
                </div>
            </div>   
            <div class=" col-md-5 pull-right " id="bgback">
                <h1 style="font-size:60px;">Aza-library</h1>
                <canvas style="margin-top:180px;"id="lineChart"></canvas>    

            </div> 
        </div>

<?php 
    require_once "footer.php";
?>