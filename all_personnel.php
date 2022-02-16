<?php 
include("header.php");
?>
 <section class="content">

        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>HODIMLARNING BARCHA MA'LUMOTLARI</h4>
                                <a href="add_personnel.php">
                                    <input type="button" value="Add Personnel" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a>
                                <a href="print_all_campus.php">
                                    <input type="button" value="Print" class="print">
                                </a>
                            </div>
                        </div>
                        <div id="print">
                            <div class = "scroll">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Familyasi</td>
                                        <td>Ismi</td>
                                        <td>Otasini ismi</td>
                                        <td>Yoshi</td>
                                        <td>Nafaqa holati</td>
                                        <td>Jinsi</td>
                                        <td>Oilaviy holati</td>
                                        <td>Tug'ulgan joyi davlati</td>
                                        <td>Tug'ulgan joyi viloyati</td>
                                        <td>Tug'ulgan joyi tumani</td>
                                        <td>Millati</td>
                                        <td>Yashaydigan viloyati</td>
                                        <td>Yashaydigan tumani</td>
                                        <td>Yashaydigan uy manzili</td>
                                        <td>Telefon raqami</td>
                                        <td>Tug'ulgan sanasi</td>
                                        <td>Pasport seriasi</td>
                                        <td>Pasport raqami</td>
                                        <td>Pasport berilgan sanasi</td>
                                        <td>Pasport KTB</td>
                                        <td>O'zMU faoliyat boshlash vaqti</td>
                                        
                                        <td>Asosiyda fakulteti</td>
                                        <td>Asosiyda kafedrasi</td>
                                        <td>Asosiyda shtat birligi</td>
                                        <td>Asosiyda lavozimi</td>
                                        <td>Asosiyda muddati</td>
                                        <td>Asosiyda buyruq raqami</td>
                                        <td>Asosiyda muddat BS</td>
                                        <td>Asosiyda muddat TS</td>
                                        <td>Asosiyda muddat buyruq sanasi</td>

                                        <td>Mamuriyatdagi lavozimi</td>
                                        <td>Mamuriyatda fakulteti</td>
                                        <td>Mamuriyatda kafedrasi</td>
                                        <td>Mamuriyatda shtat birligi</td>
                                        <td>Mamuriyatda lavozimi</td>
                                        <td>Mamuriyatda muddati</td>
                                        <td>Mamuriyatda buyruq raqami</td>
                                        <td>Mamuriyatda muddat BS</td>
                                        <td>Mamuriyatda muddat TS</td>
                                        <td>Mamuriyatda muddat buyruq sanasi</td>

                                        <td>Doktarant fakulteti</td>
                                        <td>Doktarant kafedrasi</td>
                                        <td>Doktarant shtat birligi</td>
                                        <td>Doktarant lavozimi</td>
                                        <td>Doktarant muddati</td>
                                        <td>Doktarant buyruq raqami</td>
                                        <td>Doktarant muddat BS</td>
                                        <td>Doktarant muddat TS</td>
                                        <td>Doktarant muddat buyruq sanasi</td>
                                        
                                        <td>Tashqi o'rindoshda asosiy ish joyi</td>
                                        <td>Tashqi o'rindoshda asosiy ish joyi lavozimi</td>
                                        <td>Tashqi o'rindoshda fakulteti</td>
                                        <td>Tashqi o'rindoshda kafedrasi</td>
                                        <td>Tashqi o'rindoshda shtat birligi</td>
                                        <td>Tashqi o'rindoshda lavozimi</td>
                                        <td>Tashqi o'rindoshda muddati</td>
                                        <td>Tashqi o'rindoshda buyruq raqami</td>
                                        <td>Tashqi o'rindoshda muddat BS</td>
                                        <td>Tashqi o'rindoshda muddat TS</td>
                                        <td>Tashqi o'rindoshda muddat buyruq sanasi</td>

                                        <td>Ichki o'rindoshda 1-K-Unver fakulteti</td>
                                        <td>Ichki o'rindoshda 1-K-Unver kafedrasi</td>
                                        <td>Ichki o'rindoshda 1-K-Unver shtat birligi</td>
                                        <td>Ichki o'rindoshda 1-K-Unver lavozimi</td>
                                        <td>Ichki o'rindoshda 1-K-Unver muddati</td>
                                        <td>Ichki o'rindoshda 1-K-Unver buyruq raqami</td>
                                        <td>Ichki o'rindoshda 1-K-Unver muddat BS</td>
                                        <td>Ichki o'rindoshda 1-K-Unver muddat TS</td>
                                        <td>Ichki o'rindoshda 1-K-Unver muddat buyruq sanasi</td>

                                        <td>Ichki o'rindoshda 2-K-Kafedrada fakulteti</td>
                                        <td>Ichki o'rindoshda 2-K-Kafedrada kafedrasi</td>
                                        <td>Ichki o'rindoshda 2-K-Kafedrada shtat birligi</td>
                                        <td>Ichki o'rindoshda 2-K-Kafedrada lavozimi</td>
                                        <td>Ichki o'rindoshda 2-K-Kafedrada muddati</td>
                                        <td>Ichki o'rindoshda 2-K-Kafedrada buyruq raqami</td>
                                        <td>Ichki o'rindoshda 2-K-Kafedrada muddat BS</td>
                                        <td>Ichki o'rindoshda 2-K-Kafedrada muddat TS</td>
                                        <td>Ichki o'rindoshda 2-K-Kafedrada muddat buyruq sanasi</td>

                                        <td>Soatbayda fakulteti</td>
                                        <td>Soatbayda kafedrasi</td>
                                        <td>Soatbayda soat xajmi</td>
                                        <td>Soatbayda lavozimi</td>
                                        <td>Soatbayda muddati</td>
                                        <td>Soatbayda buyruq raqami</td>
                                        <td>Soatbayda muddat BS</td>
                                        <td>Soatbayda muddat TS</td>
                                        <td>Soatbayda muddat buyruq sanasi</td>

                                        <td>Bachelor's Degree</td>
                                        <td>Master's Degree</td>
                                        <td>Doctorate Degree</td>
                                        <td>Others</td>
                                        <td>O'zMU ishlagan yillar hisobi</td>
                                        <td>Action</td>
                                         <!-- <td>GASS/Academic Rank</td> -->
                                        <!-- <td>Position/Title</td> -->
                                        <!-- <td>Department</td> -->
                                        <!-- <td>Eligibility</td>
                                        <td>Plantilla Number</td>
                                        <td>Employee Status</td>
                                        <td>Tin Number</td>
                                        <td>Pag-ibig Number</td>
                                        <td>GSIS Number</td>
                                        <td>Campus</td> -->
                                    </tr>
                                </thead>
                                <tbody>
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_position ON tbl_personnel.pos_id =tbl_position.pos_id LEFT JOIN tbl_gass_rank ON tbl_personnel.gass_id = tbl_gass_rank.gass_id LEFT JOIN tbl_academic_rank ON tbl_personnel.rank_id = tbl_academic_rank.rank_id LEFT JOIN tbl_department ON tbl_personnel.dept_id = tbl_department.dept_id ORDER BY per_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                        $pos_id = $row['pos_id'];
                                        $gass_id = $row['gass_id'];
                                        $rank_id = $row['rank_id'];
                                        $bday = $row["per_date_of_birth"];
                                        $dooa = $row["per_date_of_original_appointment"];
                                        $date = new DateTime($bday);
                                        $date1 = new DateTime($dooa);
                                        $now = new DateTime();


                                        $difference = $date->diff($now)->format('%y');
                                        $length = $date1->diff($now)->format('%y');


                                  ?>
                                  <tr>
                                  <td><?php echo $row['per_id']; ?></td>
                                  <td><?php echo $row['per_lastname']; ?></td>
                                  <td><?php echo $row['per_firstname']; ?></td>
                                  <td><?php echo $row['per_middlename']; ?></td>
                                  <td><?php echo $difference;?></td>
                                  <td><?php echo $row['per_suffix']; ?></td>
                                  <td><?php echo $row['per_gender']; ?></td>
                                  <td><?php echo $row['per_status']; ?></td>
                                  <td><?php echo $row['per_address_country_birth']; ?></td>
                                  <td><?php echo $row['regions']; ?></td>
                                  <td><?php echo $row['districts']; ?></td>
                                  <td><?php echo $row['per_nationality']; ?></td>
                                  <td><?php echo $row['regions_1']; ?></td>
                                  <td><?php echo $row['districts_1']; ?></td>
                                  <td><?php echo $row['per_address_house_place']; ?></td>
                                  <td><?php echo $row['per_contact_no']; ?></td>
                                  <td><?php echo $row['per_date_of_birth']; ?></td>
                                  <td><?php echo $row['per_pasport_series']; ?></td>
                                  <td><?php echo $row['per_pasport_no']; ?></td>
                                  <td><?php echo $row['per_pasport_given_date']; ?></td>
                                  <td><?php echo $row['per_pasport_who_given']; ?></td>
                                  <td><?php echo $row['per_date_of_original_appointment']; ?></td>

                                  <td><?php echo $row['fakultets_main']; ?></td>
                                  <td><?php echo $row['kafedras_main']; ?></td>
                                  <td><?php echo $row['main_shtat_b']; ?></td>
                                  <td><?php echo $row['main_position']; ?></td>
                                  <td><?php echo $row['main_muddat']; ?></td>
                                  <td><?php echo $row['main_buyruq_no']; ?></td>
                                  <td><?php echo $row['main_muddat_begin_date']; ?></td>
                                  <td><?php echo $row['main_muddat_end_date']; ?></td>
                                  <td><?php echo $row['main_muddat_buyruq_date']; ?></td>

                                  <td><?php echo $row['mamuriyat_lavozimi']; ?></td>
                                  <td><?php echo $row['fakultets_mamuriyat']; ?></td>
                                  <td><?php echo $row['kafedras_mamuriyat']; ?></td>
                                  <td><?php echo $row['mamuriyat_shtat_b']; ?></td>
                                  <td><?php echo $row['mamuriyat_position']; ?></td>
                                  <td><?php echo $row['mamuriyat_muddat']; ?></td>
                                  <td><?php echo $row['mamuriyat_buyruq_no']; ?></td>
                                  <td><?php echo $row['mamuriyat_muddat_begin_date']; ?></td>
                                  <td><?php echo $row['mamuriyat_muddat_end_date']; ?></td>
                                  <td><?php echo $row['mamuriyat_muddat_buyruq_date']; ?></td>

                                  <td><?php echo $row['fakultets_doct']; ?></td>
                                  <td><?php echo $row['kafedras_doct']; ?></td>
                                  <td><?php echo $row['doct_shtat_b']; ?></td>
                                  <td><?php echo $row['doct_position']; ?></td>
                                  <td><?php echo $row['doct_muddat']; ?></td>
                                  <td><?php echo $row['doct_buyruq_no']; ?></td>
                                  <td><?php echo $row['doct_muddat_begin_date']; ?></td>
                                  <td><?php echo $row['doct_muddat_end_date']; ?></td>
                                  <td><?php echo $row['doct_muddat_buyruq_date']; ?></td>

                                  <td><?php echo $row['tq_work_place']; ?></td>
                                  <td><?php echo $row['tq_asosiy_lavozimi']; ?></td>
                                  <td><?php echo $row['fakultets_tq']; ?></td>
                                  <td><?php echo $row['kafedras_tq']; ?></td>
                                  <td><?php echo $row['tq_shtat_b']; ?></td>
                                  <td><?php echo $row['tq_position']; ?></td>
                                  <td><?php echo $row['tq_muddat']; ?></td>
                                  <td><?php echo $row['tq_buyruq_no']; ?></td>
                                  <td><?php echo $row['tq_muddat_begin_date']; ?></td>
                                  <td><?php echo $row['tq_muddat_end_date']; ?></td>
                                  <td><?php echo $row['tq_muddat_buyruq_date']; ?></td>

                                  <td><?php echo $row['fakultets_one']; ?></td>
                                  <td><?php echo $row['kafedras_one']; ?></td>
                                  <td><?php echo $row['one_shtat_b']; ?></td>
                                  <td><?php echo $row['one_position']; ?></td>
                                  <td><?php echo $row['one_muddat']; ?></td>
                                  <td><?php echo $row['one_buyruq_no']; ?></td>
                                  <td><?php echo $row['one_muddat_begin_date']; ?></td>
                                  <td><?php echo $row['one_muddat_end_date']; ?></td>
                                  <td><?php echo $row['one_muddat_buyruq_date']; ?></td>

                                  <td><?php echo $row['fakultets_two']; ?></td>
                                  <td><?php echo $row['kafedras_two']; ?></td>
                                  <td><?php echo $row['two_shtat_b']; ?></td>
                                  <td><?php echo $row['two_position']; ?></td>
                                  <td><?php echo $row['two_muddat']; ?></td>
                                  <td><?php echo $row['two_buyruq_no']; ?></td>
                                  <td><?php echo $row['two_muddat_begin_date']; ?></td>
                                  <td><?php echo $row['two_muddat_end_date']; ?></td>
                                  <td><?php echo $row['two_muddat_buyruq_date']; ?></td>

                                  <td><?php echo $row['fakultets_time']; ?></td>
                                  <td><?php echo $row['kafedras_time']; ?></td>
                                  <td><?php echo $row['time_shtat_b']; ?></td>
                                  <td><?php echo $row['time_position']; ?></td>
                                  <td><?php echo $row['time_muddat']; ?></td>
                                  <td><?php echo $row['time_buyruq_no']; ?></td>
                                  <td><?php echo $row['time_muddat_begin_date']; ?></td>
                                  <td><?php echo $row['time_muddat_end_date']; ?></td>
                                  <td><?php echo $row['time_muddat_buyruq_date']; ?></td>

                                  <?php /*
                                  <td values="<?php echo $row['gass_id'].' '.$row['rank_id']; ?>"><?php echo $row['gass_name']." ".$row['rank_name']; ?></td>
                                  
                                  <td values="<?php echo $row['pos_id']; ?>"><?php echo $row['pos_name']; ?></td>
                                  <td values="<?php echo $row['dept_id']; ?>"><?php echo $row['dept_name']; ?></td> 
                                  */ ?>
                                  <td><?php echo $row['bs_name']; ?></td>
                                  <td><?php echo $row['ms_name']; ?></td>
                                  <td><?php echo $row['dr_name']; ?></td>
                                  <td><?php echo $row['other_degree']; ?></td>
                                  <td><?php echo $length?></td>
                                  <?php /*
                                  <td><?php echo $row['per_eligibility']; ?></td>
                                  <td><?php echo $row['per_plantilla_no']; ?></td>
                                  <td><?php echo $row['per_designation']; ?></td>
                                  <td><?php echo $row['per_tin_no']; ?></td>
                                  <td><?php echo $row['per_pagibig_no']; ?></td>
                                  <td><?php echo $row['per_gsis_bp_no']; ?></td>
                                  <td><?php echo $row['per_campus'];?></td>
                                  */ ?>
                                  <td>     
                                    <a class="btn btn-success btn-sm" href="edit_personnel.php?per_id=<?php echo $row['per_id']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">O'zgartirish</span>
                                    </a>                                 
                                  </td>
                                </tr>                           
                                     <?php 
                                     } ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>

   <script>
    function printDiv() {
        //Get the HTML of div
        var divElements = document.getElementById("print").innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = "<table></table>" + divElements;
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }
    </script>
<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
<?php 
include("script.php");
?>