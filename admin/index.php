<body>
    <!-- Navigation -->
    <?php include 'includes/navigation.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            <img src="images/Sekulogo.png" height=70>
                                WELCOME
                            <small class="text-success"><?php echo strtoupper($_SESSION['usname'])?></small>
                               TO THE ADMIN PANEL
                            </h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.php">Home</a>
                            </li>
                           
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-home fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       <?php
                        $query="SELECT*FROM contact";
                        $select_all_contacts= mysqli_query($connect,$query);
                        $contact_counts= mysqli_num_rows($select_all_contacts);
                                echo"<div class='huge'>{$contact_counts}</div>"
                        
                        ?>
                        <div>Room Bookings</div>
                    </div>
                </div>
            </div>
            <a href="adminrooms.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-fw fa-cutlery fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                        $query="SELECT*FROM contact";
                        $select_all_contacts= mysqli_query($connect,$query);
                        $contact_counts= mysqli_num_rows($select_all_contacts);
                                echo"<div class='huge'>{$contact_counts}</div>"
                        
                        ?>
                      <div>Meal Orders</div>
                    </div>
                </div>
            </div>
            <a href="adminmeals.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-fw fa-phone fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        
                      <?php
                        $query="SELECT*FROM contact";
                        $select_all_contacts= mysqli_query($connect,$query);
                        $contact_counts= mysqli_num_rows($select_all_contacts);
                                echo"<div class='huge'>{$contact_counts}</div>"
                        
                        ?>
                        <div> Contacts</div>
                    </div>
                </div>
            </div>
            <a href="admincontacts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div> 
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <?php
                        $query="SELECT*FROM contact";
                        $select_all_contacts= mysqli_query($connect,$query);
                        $contact_counts= mysqli_num_rows($select_all_contacts);
                                echo"<div class='huge'>{$contact_counts}</div>"
                        
                        ?>
                      <div>Accounts</div>
                    </div>
                </div>
            </div>
            <a href="adminaccounts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

                <!-- /.row -->
            <div class="row">
                <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
          <?php

          // $element_text=["roombookings","meals","contact","account"];
          // $element_count=[$roombookings_counts,$meal_counts,$contact_counts,$account_counts];

          // for($i=0; $i<4; $i++){
          //   // echo"['{$element_text[$i]}'".","."{$element_count[$i]}],";
          // }



          ?>
     ['Contacts', 1000],
         
        ]);

        var options = {
          chart: {
            title: 'SEKU GUEST HOUSE PERFORMANCE',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

            </div>
            <!-- /.container-fluid -->
        <div id="columnchart_material" style="width: auto; height: 500px;"></div>

    </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
</body>

    <!-- Footer -->
    <?php include 'includes/footer.php';?>
  