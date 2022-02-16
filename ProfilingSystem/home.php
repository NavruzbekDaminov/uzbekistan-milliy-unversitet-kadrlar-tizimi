<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<div class="dashboard-top">
  <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                              <?php
                                include('connect.php');
                                 $permanent = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_designation = 'Permanent'");
                                    $permanent->execute();
                                    $fetch = $permanent->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];

                                }?>
                            <div class="text">PERMANENT</div>
                            <div class="number count-to"><?php echo $total; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">                        
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connect.php');
                                 $gass = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_designation = 'GASS'");
                                    $gass->execute();
                                    $fetch1 = $gass->fetchAll();

                                foreach($fetch1 as $key => $row1) { 
                                   $total1 = $row1['COUNT(*)'];

                              }?>
                            <div class="text">GASS</div>
                            <div class="number count-to"><?php echo $total1; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connect.php');
                                 $parttime = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_designation = 'Part Time'");
                                    $parttime->execute();
                                    $fetch2 = $parttime->fetchAll();

                                foreach($fetch2 as $key => $row2) { 
                                   $total2 = $row2['COUNT(*)'];

                              }?>
                            <div class="text">PART-TIME</div>
                            <div class="number count-to"><?php echo $total2; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connect.php');
                                 $jobOrder = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_designation = 'Job Order'");
                                    $jobOrder->execute();
                                    $fetch3 = $jobOrder->fetchAll();

                                foreach($fetch3 as $key => $row3) { 
                                   $total3 = $row3['COUNT(*)'];

                              }?>
                            <div class="text">JOB ORDER</div>
                            <div class="number count-to"><?php echo $total3; ?></div>
                        </div>
                    </div>
                </div>
            </div>
</div>
    <div class="pie-report" style="float: right;">
        <script src="js/jquery.min.js"></script>
        <?php include('script.php'); ?> 

        <!-- Educational Qualification -->
        <!-- Mainit -->
        <?php
          include('connect.php');
          $date = date("Y", strtotime("+ 8 HOURS"));
          $qMainit = $con->prepare("SELECT COUNT('per_campus') FROM `tbl_personnel` WHERE `per_campus` = 'Mainit'") or die(mysqli_error());
          $qMainit->execute();
          $Mainit = $qMainit->fetchAll();
          foreach($Mainit as $key => $row) { 
           $total = $row["COUNT('per_campus')"];

            }?>


        <!-- Malimono -->
          <?php
          $qMalimono = $con->query("SELECT COUNT('per_campus') FROM `tbl_personnel` WHERE `per_campus` = 'Malimono'") or die(mysqli_error());
          $qMalimono->execute();
          $Malimono = $qMalimono->fetchAll();
          foreach($Malimono as $key => $row) { 
           $total1 = $row["COUNT('per_campus')"];

            }?>


        <!-- Main -->
          <?php
          $qMain = $con->query("SELECT COUNT('per_campus') FROM `tbl_personnel` WHERE `per_campus` = 'Main'") or die(mysqli_error());
          $qMain->execute();
          $Main = $qMain->fetchAll();
          foreach($Main as $key => $row) { 
           $total2 = $row["COUNT('per_campus')"];

            }?>


        <!-- Del Carmen -->
          <?php
          $qftown = $con->prepare("SELECT COUNT('per_campus') FROM `tbl_personnel` WHERE `per_campus` = 'Del Carmen'") or die(mysqli_error());
          $qftown->execute();
          $fortunetowne = $qftown->fetchAll();
          foreach($fortunetowne as $key => $row) { 
           $total3 = $row["COUNT('per_campus')"];

            }?>
        

            <!-- Educational Qualification -->
            <!-- Mainit -->
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_campus = 'Mainit' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edtbs = $row['COUNT(DISTINCT bs_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_campus = 'Mainit' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edtms = $row['COUNT(DISTINCT ms_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_campus = 'Mainit' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edtdr = $row['COUNT(DISTINCT dr_name)'];
            }?>

            <!-- Del Carmen -->
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_campus = 'Del Carmen' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edfbs = $row['COUNT(DISTINCT bs_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_campus = 'Del Carmen' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edfms = $row['COUNT(DISTINCT ms_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_campus = 'Del Carmen' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edfdr = $row['COUNT(DISTINCT dr_name)'];
            }?>

            <!-- Malimono -->
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_campus = 'Malimono' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edabs = $row['COUNT(DISTINCT bs_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_campus = 'Malimono' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edams = $row['COUNT(DISTINCT ms_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_campus = 'Malimono' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edadr = $row['COUNT(DISTINCT dr_name)'];
            }?>

            <!-- Main -->
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_campus = 'Main' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edbbs = $row['COUNT(DISTINCT bs_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_campus = 'Main' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edbms = $row['COUNT(DISTINCT ms_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_campus = 'Main' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edbdr = $row['COUNT(DISTINCT dr_name)'];
            }?>


        <script src="js/jquery.canvasjs.min.js"></script>
            <script type="text/javascript"> 
              window.onload = function() { 
                $("#chartContainer").CanvasJSChart({ 
                  title: { 
                    
                  }, 
                  axisY: { 
                    title: "Teachers" 
                  }, 
                  legend :{ 
                    verticalAlign: "center", 
                    horizontalAlign: "left" 
                  }, 
                  data: [ 
                  { 
                    type: "pie", 
                    showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: [ 
                      { label: "Mainit",  y: 
                        <?php 
                          if($Mainit == ""){
                              echo 0;
                          }else{
                            echo $total;
                          }
                        ?>, legendText: "Mainit"}, 
                      { label: "Malimono",  y: 
                        <?php 
                          if($Malimono == ""){
                            echo 0;
                          }else{
                            echo $total1;
                          } 
                        ?>, legendText: "Malimono"},
                      { label: "Main",  y: 
                        <?php 
                          if($Main == ""){
                            echo 0;
                          }else{
                            echo $total2;
                          } 
                        ?>, legendText: "Main"},
                      { label: "Del Carmen",  y: 
                        <?php 
                          if($fortunetowne == ""){
                            echo 0;
                          }else{
                          echo $total3;
                          }
                        ?>, legendText: "Del Carmen"}
                    ] 
                  } 
                  ] 
                });
           


        // Educational Qualification
        var chart1 = new CanvasJS.Chart("bar2chartContainer",
            {
              title:{
                text: "Educational Qualification Per Campus"
              },
              animationEnabled: true,
              legend: {
                cursor:"pointer",
                itemclick : function(e) {
                  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                      e.dataSeries.visible = false;
                  }
                  else {
                      e.dataSeries.visible = true;
                  }
                  chart1.render();
                }
              },
              axisY: {
                title: ""
              },
              toolTip: {
                shared: true,  
                content: function(e){
                  var str = '';
                  var total = 0 ;
                  var str3;
                  var str2 ;
                  for (var i = 0; i < e.entries.length; i++){
                    var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ; 
                    total = e.entries[i].dataPoint.y + total;
                    str = str.concat(str1);
                  }
                  str2 = "<span style = 'color:DodgerBlue; '><strong>"+e.entries[0].dataPoint.label + "</strong></span><br/>";
                  str3 = "<span style = 'color:Tomato '>Total: </span><strong>" + total + "</strong><br/>";
                  
                  return (str2.concat(str)).concat(str3);
                }

              },
              data: [
              {        
                type: "bar",
                showInLegend: true,
                name: "Bachelor Degree",
                color: "#779ECB",
                dataPoints: [
                { y: <?php echo $edbbs; ?>, label: "Main"},        
                { y: <?php echo $edabs; ?>, label: "Malimono"},              
                { y: <?php echo $edfbs; ?>, label: "Del Carmen"},
                { y: <?php echo $edtbs; ?>, label: "Mainit"}
                ]
              },
              {        
                type: "bar",
                showInLegend: true,
                name: "Masteral Degree",
                color: "#FF6961",          
                dataPoints: [
                { y: <?php echo $edbms; ?>, label: "Main"},        
                { y: <?php echo $edams; ?>, label: "Malimono"},         
                { y: <?php echo $edfms; ?>, label: "Del Carmen"},
                { y: <?php echo $edtms; ?>, label: "Mainit"}
                ]
              },
              {        
                type: "bar",
                showInLegend: true,
                name: "Doctoral Degree",
                color: "#77DD77",
                dataPoints: [
                { y: <?php echo $edbdr; ?>, label: "Main"},    
                { y: <?php echo $edadr; ?>, label: "Malimono"},              
                { y: <?php echo $edfdr; ?>, label: "Del Carmen"},
                { y: <?php echo $edtdr; ?>, label: "Mainit"}
                ]
              }

              ]
            });

        chart1.render();
              }
            </script>
        </div>
    <div id = "content" style="margin-bottom: 15px !important;">
        <br />
        <br />
        <br />
        <div class = "">
        <div id="chartContainer" style="height: 400px; width: 75%; float: right; margin-right: 10px; margin-top: 43px;"></div> 
        </div>
        
        <div id="bar2chartContainer" style="height: 300px; width: 75%; float: right; margin-top: 20px; margin-right: 10px;">
        </div>
    </div>
        </body>
</html>