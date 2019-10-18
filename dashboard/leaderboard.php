<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KIITFEST Campus Ambassador</title>

  <meta name="theme-color" content="#598f29">
  <link rel="icon" href="images/icon.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/mdb.min.css" rel="stylesheet">
  <link href="../style.css" rel="stylesheet">
  <link rel="stylesheet" href="../links/strengthify.css" type="text/css">

</head>
<body style="background-image: url('../images/head.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover">

    <div class="container">
    <div class="row">
    <div class="col-md-12" style="margin-top: 30px; margin-bottom:100px;">
    <center>
        <?php
            $rank=0;
            $insertQ="SELECT * FROM chickensoup WHERE Prole=1 ORDER BY people DESC";
            $qry_result=mysqli_query($con, $insertQ) or die(mysqli_error($con));
            while ($row = mysqli_fetch_array($qry_result) ) {  
                if ($row['mobile']==NULL) continue;
                $rank=$rank+1;
                if ($rank==1) $color="fee101";
                else if ($rank==2) $color="d7d7d7";
                else if ($rank==3) $color="a77044"; 
                else $color="fafafa";
        ?>
        <div style="background-color: #<?php echo $color; ?>;" class="rankcard wow bounceIn col-lg-8 col-md-10 col-sm-11 col-xs-12">
            <table style="width:100%">
                <td class="rankstats" style="width:15%; text-align:center; font-family: Helvetica"><?php echo $rank; ?></td>
                <td class="rankstats" style="width:50%; text-align:left; font-family: Helvetica"><?php echo $row['Pname']; ?><br><p style="font-size:15px;font-family:Courier New;"><?php echo $row['College']; ?></p></td>
                <td class="rankstats" style="width:35%; text-align:center; font-family: Helvetica"><?php echo 10*$row['People']." points"; ?></td>
            </table>
        </div>
            <?php } ?>
    </center>
    </div>
    </div>
    </div>


  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script type="text/javascript" src="../script.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
