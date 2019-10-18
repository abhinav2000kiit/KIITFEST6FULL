<!DOCTYPE html>
<?php
  session_start();
  
  include '../connectdb.php';
  include '../redirection.php';
  $con=openConnection();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="KIITFEST 6.0 is here register now">

        <meta name="theme-color" content="#598f29">
        <link rel="icon" href="images/icon.png">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/leaderboard.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/maps/style.css.map">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>CA Dashboard</title>
    </head>

    <body>
    <?php 

    if(isset($_SESSION['id']) && isset($_SESSION['role'])){
      if ($_SESSION['role']==1){
        $myid=$_SESSION['id'];
        $selq="SELECT * FROM chickensoup WHERE idno=$myid;";
        $qry_result=mysqli_query($con, $selq) or die(mysqli_error($con));
        if(mysqli_num_rows($qry_result)>0){
          $row = mysqli_fetch_array($qry_result);
    ?>

    <a href="logout/"><button style="float:right;font-size:20px;padding:5px;border:0;background-color:rgba(0,0,0,0); color:#eb3b81;"> Logout </button></a>
        <section style="padding-top: 40px; padding-bottom: 30px; background-color: blanchedalmond;">
            <div class="row d-flex justify-content-center">    
                <div class="text-center">
                    <img style="border-radius: 50%;" src="https://mdbootstrap.com/img/logo/mdb192x192.jpg" class="img-fluid" alt="">
                    <br><br><br><br>
                    <h1><?php echo $row['Pname'];  ?></h1>
                    <h3><?php echo $row['College'];  ?></h3>
                    <h3><?php echo $row['District'];  ?></h3>
                </div>
            </div>    
        </section> 
         
        <?php
          $selq="SELECT * FROM chickensoup WHERE code=$myid AND Prole=2;";
          $qry_result=mysqli_query($con, $selq) or die(mysqli_error($con));
          if(mysqli_num_rows($qry_result)>0){
              
        ?>

        <section style="padding-top: 40px; padding-bottom: 30px; background-color: burlywood;">
            <div class="row d-flex justify-content-center"> 
                    <h1>Your Referred Status</h1> <br>  
                <table class="table table-bordered" style="width: 80%; margin-top: 2rem;">
                    <thead style="background-color: rgb(240, 240, 240);">
                        <tr style="text-align: center;">
                        <th style="width: 10%;">Sl. No.</th>
                        <th style="width: 30%;">Name</th>
                        <th  style="width: 10%;">PAID / NOT PAID</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white;">
                    <?php
                      $sno=0;
                        while ($crow = mysqli_fetch_array($qry_result) ) {
                          $sno+=1;
                    ?>
                        <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $crow['Pname']; ?></td>
                        <?php
                          $pay=$crow['Paid'];
                          if ($pay==0) $pay="YES";
                          else $pay="NO";
                        ?>
                        <td><?php echo $pay; ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>    
        </section>
        <?php
          } 
        ?>
        
                         <!-- Roles Section Start -->
                         <section style="padding-top: 40px; padding-bottom: 30px; background-color: rgb(238, 138, 138);">
                            <div class="container">
                              <div class="row">
                                <div class="col-12">
                                  <div class="section-title-header text-center">
                                    <h1 class="section-title leaderboard wow fadeInUp" data-wow-delay="0.2s">LEADERBOARD</h1>
                                    <p class="wow fadeInDown" data-wow-delay="0.2s">You can Netflix and Chill while I Hustle and Build</p>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="section-fix">
                                    <div class="center">
                                        <div class="top3">
                                          <div class="two item">
                                            <div class="pos">
                                              2
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/men/44.jpg&#39;)"></div>
                                            <div class="name">
                                              Edgar Soto
                                            </div>
                                            <div class="score">
                                              6453
                                            </div>
                                          </div>
                                          <div class="one item">
                                            <div class="pos">
                                              1
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/men/31.jpg&#39;)"></div>
                                            <div class="name">
                                              Clifford James
                                            </div>
                                            <div class="score">
                                              6794
                                            </div>
                                          </div>
                                          <div class="three item">
                                            <div class="pos">
                                              3
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/women/91.jpg&#39;)"></div>
                                            <div class="name">
                                              Nevaeh Silva
                                            </div>
                                            <div class="score">
                                              6034
                                            </div>
                                          </div>
                                        </div>
                                        <div class="list">
                                          <div class="item">
                                            <div class="pos">
                                              4
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/men/88.jpg&#39;)"></div>
                                            <div class="name">
                                              Clayton Watson
                                            </div>
                                            <div class="score">
                                              5980
                                            </div>
                                          </div>
                                          <div class="item">
                                            <div class="pos">
                                              5
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/women/29.jpg&#39;)"></div>
                                            <div class="name">
                                              Debbie Lane
                                            </div>
                                            <div class="score">
                                              5978
                                            </div>
                                          </div>
                                          <div class="item">
                                            <div class="pos">
                                              6
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/women/85.jpg&#39;)"></div>
                                            <div class="name">
                                              Gabriella Steward
                                            </div>
                                            <div class="score">
                                              5845
                                            </div>
                                          </div>
                                          <div class="item">
                                            <div class="pos">
                                              7
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/women/39.jpg&#39;)"></div>
                                            <div class="name">
                                              Nina Perkins
                                            </div>
                                            <div class="score">
                                              5799
                                            </div>
                                          </div>
                                          <div class="item">
                                            <div class="pos">
                                              8
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/men/77.jpg&#39;)"></div>
                                            <div class="name">
                                              Dennis Henry
                                            </div>
                                            <div class="score">
                                              5756
                                            </div>
                                          </div>
                                          <div class="item">
                                            <div class="pos">
                                              9
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/women/49.jpg&#39;)"></div>
                                            <div class="name">
                                              Courtney Fuller
                                            </div>
                                            <div class="score">
                                              5713
                                            </div>
                                          </div>
                                          <div class="item">
                                            <div class="pos">
                                              10
                                            </div>
                                            <div class="pic" style="background-image: url(&#39;https://randomuser.me/api/portraits/women/30.jpg&#39;)"></div>
                                            <div class="name">
                                              Joan Wood
                                            </div>
                                            <div class="score">
                                              5674
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                              
                            </div>
                          </section>
                          <!-- Roles Section End -->
    <?php
      }else{
        redirect('../');
      }}else{
       redirect('../');
       }
  }else{
     redirect('../');
  }
  ?>

    </body>
    <script src="./js/script.js"></script>
</html>