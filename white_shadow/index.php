<?php include_once './config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Visit Nepal 2020 - Nepathya Overnight Hackthon</title>



    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/main/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

    <!-- Header -->

    <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">

                    <div class="navbar-header">

                        <!-- Mobile Menu Open Button -->
                        <span id="mobile-nav-open-btn">&#9776;</span>

                        <!-- Logo -->
                        <a class="navbar-brand" href="home.html">
                            <img src="./images/main/logo.png" alt="logo">
                        </a>
                    </div>

                    <!-- Main Menu -->
                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="nav  navbar-nav pull-right">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Places</a></li>
                                <li><a href="#">Travel Status</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div id="mobile-nav">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>

                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Places</a></li>
                                <li><a href="#">Travel Status</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- Header Ends -->

    <!-- Home -->
    <section id="home">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="./images/sliders/d.jpg" alt="home" style="width:100%;">
                </div>

                <div class="item">
                    <img src="./images/sliders/f.jpg" alt="home" style="width:100%;">
                </div>

                <div class="item">
                    <img src="./images/sliders/g.jpg" alt="home" style="width:100%;">
                </div>


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>


        </div>


    </section>
    <!-- Home Ends -->


    <!-- home introduction-->
    <section id="home-intro">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 ">

                        <div id="intro-table-02">
                            <div class="intro-table">
                                <div class="horizontal-heading">
                                    <h2 class="text-center">Introduction</h2>
                                    <hr>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 wow slideInLeft" data-wow-duration="1s">
                                        <img src="./images/main/logo.png" alt="home" style="width: 100%; height:300px;">
                                    </div>
                                    <div class="col-md-6 col-sm-6 wow slideInLeft" data-wow-duration="1s">
                                        <p>
                                            Land of mystic mountains and tales, Nepal is a paradise for hikers hidden between China and India. It’s been an important trading point for silk and Nepal is the birth place of Buddha.Home of the Himalayas, its high peaks taunts many aspiring alpinists
                                            for its real challenge: the Mount Everest. Nepal is finally a haven of peace and tolerance.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>

        </div>

    </section>



    <!-- Map of Nepal-->
    <section class="map-of-nepal ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7192911.795605837!2d79.63626048977022!3d28.323639343563105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e8c77d2e68cf%3A0x34a29abcd0cc86de!2sNepal!5e0!3m2!1sen!2snp!4v1580685337675!5m2!1sen!2snp"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>




    <!-- Travel  Section Search -->
    <section class="search-section txt-center">
        <div class="heading">
            <h2>Tourist Travel Status</h2>
        </div>
        <form action="" class="" method="POST">
            <div class="form-group-h">
                <div class="form-inner">
                    <label for="tname">Name *</label>
                    <input type="text" placeholder="Tourist Name" id="tname" name="tname" required>
                </div class="form-inner">

                <div class="form-inner">
                    <label for="cin">Checked In / Start Place </label>
                    <input type="text" placeholder="Checked In Place" id="cin" name="tinitial">
                </div>


                <div class="form-inner">
                    <label for="dest">Destination</label>
                    <input type="text" placeholder="Checked In Place" id="dest" name="tdestination">
                </div>
                <div class="form-inner">
                    <input type="submit" value="Search" name="tourists_search">
                </div>
            </div>
        </form>
    </section>
    <!-- travel section search ends -->

    <!-- travel section display -->
    <section class="display-section" style="text-align: center;padding: 50px 0px;font-size: 18px;background-color: #ccc;">
        <center>
            <table border="1" style="width:70%;">
                <tr>
                    <th>S.N.O.</th>
                    <th>Name</th>
                    <th>Checked in from</th>
                    <th>Destination</th>
                    <th>Time to reach(min)</th>
                    <th>current position</th>
                    <th>travel status</th>
                </tr>
                <?php if(isset($_POST['tourists_search'])){
                    $result= fetch_tourists_by_name();
                    $count=1;
                        foreach($result as $key){ ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $key['tourist_name']; ?></td>
                                <td><?php echo $key['tourist_checkedin']; ?></td>
                                <td><?php echo $key['tourist_destination']; ?></td>
                                <td><?php echo $key['tourist_time_to_reach']; ?></td>
                                <td><?php echo $key['tourist_cur_pos']; ?></td>
                                <td><?php echo $key['tourist_status']; ?></td>

                            </tr>
                      <?php $count++; }

                    } ?>
               
            </table>
        </center>
    </section>





    <!-- search places section -->
    <section class="search-place">
        <div class="left-part txt-center">
            <div class="heading">
                <h2>search for places</h2>
            </div>
            <form action="" method="POST">
                <div class="form-group-h">
                    <div class="form-inner">
                        <label for="se-place">Places</label>
                        <input type="text" placeholder="Search Your Destination" id="se-place" name="plcname" required>
                    </div class="form-inner">
                    <div class="form-inner">
                        <input type="submit" value="search" name="places-search" >
                    </div>
                </div>
            </form>
            <div class="places-show">
                <?php if(isset($_POST['places-search'])){
                    $result= fetch_places_by_name();
                    
                        foreach($result as $key){ 
                            if($key['feasible_visit']){
                                echo '<div class="place safe">'.$key['place_name']. ' </div>';
                            }
                            else{
                                echo '<div class="place unsafe">'.$key['place_name']. ' </div>';
                            }                      
                            
                        }

                } ?>
                
            </div>
        </div>
        <div class="right-part">
            <div class="row-2-card">
                 <?php if(isset($_POST['places-search'])){
                    $result= fetch_places();
                    
                        foreach($result as $key){ ?> 
                               <div class="place-card <?php if($key['feasible_visit']){echo 'safe';}else {echo 'unsafe';} ?>">
                                <div class="image txt-center">
                                 <img class="hw-100" src="./images/main/logo.png" alt="null">
                             </div>
                             <div class="desc">
                            <h3><?php echo $key['place_name']; ?></h3>
                                 <p> <?php echo $key['place_description']; ?>   </p>
                    </div>
                </div>                
                            
                     <?php   }

                } ?>

                <!-- <div class="place-card safe">
                    <div class="image txt-center">
                        <img class="hw-100" src="https://bd.nepalembassy.gov.np/blog/wp-content/uploads/2019/12/logo-visitnepal@2x.png" alt="null">
                    </div>
                    <div class="desc">
                        <h3>lumbini</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus error magni repudiandae adipisci!
                        </p>
                    </div>
                </div>
                <div class="place-card unsafe">
                    <div class="image txt-center">
                        <img class="hw-100" src="https://bd.nepalembassy.gov.np/blog/wp-content/uploads/2019/12/logo-visitnepal@2x.png" alt="null">
                    </div>
                    <div class="desc">
                        <h3>lumbini</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus error magni repudiandae adipisci!
                        </p>
                    </div>
                </div> -->
            </div>

        </div>
    </section>
    <!-- search place section ends  -->
    <!--footer Social-->
    <section id="footer-social">
        <div class="container">
            <div class="row ">

                <div class="col-md-12 col-sm-12 ">
                    <ul class="footersocial-list text-center ">
                        <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                        <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                        <li><a href="# "><i class="fa fa-google-plus "></i></a></li>
                        <li><a href="# "><i class="fa fa-instagram "></i></a></li>
                        <li><a href="# "><i class="fa fa-linkedin "></i></a></li>
                    </ul>
                </div>

            </div>

        </div>
    </section>
    <!--footer social Ends-->


    <!-- Footer  -->
    <footer class="text-center ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 col-sm-12 ">
                    <p>
                        Copyright &copy; 2020 CAN developed by <strong>White Shadow</strong> </span>
                    </p>
                </div>
            </div>

        </div>


        <!-- Back To Top -->

        <a href="# " id="back-to-top" class="btn btn-sm btn-yellow btn-back-to-top hidden-sm hidden-xs " title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>

    </footer>
    <!-- Footer Ends -->


    <!-- JQuery -->
    <script src="js/jquery.min.js "></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js "></script>

    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel/owl.carousel.min.js "></script>

    <!-- Custom JS -->
    <script src="js/script.js "></script>
</body>

</html>



<?php




function fetch_tourists_by_name(){
    $con=connect_db();
    $stmt = $con->prepare("SELECT * FROM tb_tourists WHERE tourist_name = ? ORDER BY tourist_id desc");
    $stmt->bind_param("s", $tname);
    $tname=trim($_POST['tname']," " );
    $stmt->execute();
    $arr = [];
    $result= $stmt->get_result();
    while($row = $result->fetch_assoc()) {
       $arr[] = $row;
    }
    $stmt->close();
    $con->close();
    $con=null;
    return $arr;
}


function fetch_places_by_name(){
    $con=connect_db();
    $stmt = $con->prepare('SELECT * FROM tb_places WHERE place_region = ? ORDER BY place_id desc');
    $stmt->bind_param("s", $pname);
    $pname=trim($_POST['plcname']," " );
    $stmt->execute();
    $arr = [];
    $result= $stmt->get_result();
    while($row = $result->fetch_assoc()) {
       $arr[] = $row;
    }
    $stmt->close();
    $con->close();
    $con=null;
    return $arr;
}


function fetch_places(){
    $con=connect_db();
    $stmt = $con->prepare('SELECT * FROM tb_places WHERE place_region = ? ORDER BY RAND() LIMIT 2');
    $stmt->bind_param("s", $pname);
    $pname=trim($_POST['plcname']," " );
    $stmt->execute();
    $arr = [];
    $result= $stmt->get_result();
    while($row = $result->fetch_assoc()) {
       $arr[] = $row;
    }
    $stmt->close();
    $con->close();
    $con=null;
    return $arr;

}
?>