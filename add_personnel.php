<?php include("header.php") ?>

<link href="css/style2.css" rel="stylesheet">
<section class="content">
    <div class="container-fluid">
        <!-- Input Group -->
        <form action="add_personnel_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>SHAXSIY MA'LUMOTLAR</h4>
                            </div>
                        </div>
                        <div class="body">
                            <div class="container-fluid" style="background-color: #ddd;">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Familyasi:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_lastname" placeholder="Familyasi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Ismi:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_firstname" placeholder="Ismi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Otasini ismi:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_middlename" placeholder="Otasini ismi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Nafaqa holati:
                                                </span>
                                                <select class="form-control show-tick" name="per_suffix">
                                                    <option></option>
                                                    <option>Nafaqada</option>
                                                    <option>Nafaqada emas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Jinsi:
                                                </span>
                                                <select class="form-control show-tick" name="per_gender">
                                                    <option></option>
                                                    <option>Erkak</option>
                                                    <option>Ayol</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Oilaviy holati:
                                                </span>
                                                <select class="form-control show-tick" name="per_status">
                                                    <option></option>
                                                    <option>Uylangan</option>
                                                    <option>Uylanmagan</option>
                                                    <option>Turmushga chiqan</option>
                                                    <option>Turmushga chiqmagan</option>
                                                    <option>Ajrashgan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h5>Tug'ulgan joyi</h5>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Davlat:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_address_country_birth" placeholder="Tug'ulgan davlati">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Viloyat:
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-select form-control" name="regions" id="regions">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Tumani:
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-select form-control" name="districts" id="districts"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Millati:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_nationality" placeholder="Millati">
                                                </div>
                                            </div>
                                        </div>
                                        <h5>Doimiy yashash manzili</h5>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Viloyat:
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-select form-control" name="regions_1" id="regions_1"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Tumani:
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-select form-control" name="districts_1" id="districts_1"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Uy manzili:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_address_house_place" placeholder="Yashaydigan uy manzili">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Telefon raqami:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_contact_no" id="contact_no" maxlength="22">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Tug'ilgan sanasi:
                                                </span>
                                                <div class="form-line">
                                                    <input type="date" class="form-control" name="per_date_of_birth" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Pasport seriasi:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_pasport_series" placeholder="Pasport seriasi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Pasport raqami:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control key" name="per_pasport_no" id="pasport_no" placeholder="XXX-XX-XX" id="pasport_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Pasport BS:
                                                </span>
                                                <div class="form-line">
                                                    <input type="date" class="form-control" name="per_pasport_given_date" placeholder="Pasport berilgan sana">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Pasport KTB:
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_pasport_who_given" placeholder="Pasport KTB">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span style="color: red;">* </span>Ishga kirgan sana:
                                                </span>
                                                <div id="sandbox-container" class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_original_appointment">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#main">Assosiy</h3>
                                            <div id="main" class="collapse">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Fakulteti:
                                                        </span>
                                                        <select class="form-control show-tick" name="fakultets_main" id="fakultets_main">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Kafedrasi:
                                                        </span>
                                                        <select class="form-control show-tick" name="kafedras_main" id="kafedras_main">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Shtat birligi:
                                                        </span>
                                                        <select class="form-control show-tick main" id="main_shtat_b" name="main_shtat_b">
                                                            <option></option>
                                                            <option value="1.00">1.00</option>
                                                            <option value="0.75">0.75</option>
                                                            <option value="0.50">0.50</option>
                                                            <option value="0.25">0.25</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Lavozimi:
                                                        </span>
                                                        <select class="form-control show-tick" name="main_position">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $pos1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id");
                                                            $pos1->execute();
                                                            while ($row1 = $pos1->fetch()) {
                                                                $pos_name = $row1['pos_name'];
                                                            ?>
                                                                <option value="<?php echo $row1['pos_name']; ?>"><?php echo $row1['pos_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddati:
                                                        </span>
                                                        <select class="form-control show-tick" name="main_muddat">
                                                            <option></option>
                                                            <option>Muddatli</option>
                                                            <option>Mudatsiz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq raqami:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="main_buyruq_no" id="main_buyruq_no" placeholder=" XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni BS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="main_muddat_begin_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni TS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="main_muddat_end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq sanasi:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="main_muddat_buyruq_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#mamuriyat">Mamuriyat</h3>
                                            <div id="mamuriyat" class="collapse">
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Mamuriyatdagi lavozimi:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="mamuriyat_lavozimi" placeholder="Mamuriyat lavozimi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Fakulteti:
                                                        </span>
                                                        <select class="form-control show-tick" name="fakultets_mamuriyat" id="fakultets_mamuriyat">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Kafedrasi:
                                                        </span>
                                                        <select class="form-control show-tick" name="kafedras_mamuriyat" id="kafedras_mamuriyat">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Shtat birligi:
                                                        </span>
                                                        <select class="form-control show-tick main" id="mamuriyat_shtat_b" name="mamuriyat_shtat_b">
                                                            <option></option>
                                                            <option value="1.00">1.00</option>
                                                            <option value="0.75">0.75</option>
                                                            <option value="0.50">0.50</option>
                                                            <option value="0.25">0.25</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Lavozimi:
                                                        </span>
                                                        <select class="form-control show-tick" name="mamuriyat_position">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $pos1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_name");
                                                            $pos1->execute();
                                                            while ($row1 = $pos1->fetch()) {
                                                                $pos_name = $row1['pos_id'];
                                                            ?>
                                                                <option value="<?php echo $row1['pos_name']; ?>"><?php echo $row1['pos_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddati:
                                                        </span>
                                                        <select class="form-control show-tick" name="mamuriyat_muddat">
                                                            <option></option>
                                                            <option>Muddatli</option>
                                                            <option>Mudatsiz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq raqami:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="mamuriyat_buyruq_no" id="mamuriyat_buyruq_no" placeholder=" XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni BS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="mamuriyat_muddat_begin_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni TS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="mamuriyat_muddat_end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq sanasi:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="mamuriyat_muddat_buyruq_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#doct">Doktorant</h3>
                                            <div id="doct" class="collapse">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Fakulteti:
                                                        </span>
                                                        <select class="form-control show-tick" name="fakultets_doct" id="fakultets_doct">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Kafedrasi:
                                                        </span>
                                                        <select class="form-control show-tick" name="kafedras_doct" id="kafedras_doct">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Shtat birligi:
                                                        </span>
                                                        <select class="form-control show-tick main" id="doct_shtat_b" name="doct_shtat_b">
                                                            <option></option>
                                                            <option value="1.00">1.00</option>
                                                            <option value="0.75">0.75</option>
                                                            <option value="0.50">0.50</option>
                                                            <option value="0.25">0.25</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Lavozimi:
                                                        </span>
                                                        <select class="form-control show-tick" name="doct_position">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $pos1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id");
                                                            $pos1->execute();
                                                            while ($row1 = $pos1->fetch()) {
                                                                $pos_name = $row1['pos_name'];
                                                            ?>
                                                                <option value="<?php echo $row1['pos_name']; ?>"><?php echo $row1['pos_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddati:
                                                        </span>
                                                        <select class="form-control show-tick" name="doct_muddat">
                                                            <option></option>
                                                            <option>Muddatli</option>
                                                            <option>Mudatsiz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq raqami:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="doct_buyruq_no" id="doct_buyruq_no" placeholder=" XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni BS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="doct_muddat_begin_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni TS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="doct_muddat_end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq sanasi:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="doct_muddat_buyruq_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#tq">Tashqi o'rindosh</h3>
                                            <div id="tq" class="collapse">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Assosiy ish joyi:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="tq_work_place" placeholder="Assosiy ish joyi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Assoyiy ish joyidagi lavozimi:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="tq_asosiy_lavozimi" placeholder="Assoyiy ish joyidagi lavozimi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Fakulteti:
                                                        </span>
                                                        <select class="form-control show-tick" name="fakultets_tq" id="fakultets_tq">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Kafedrasi:
                                                        </span>
                                                        <select class="form-control show-tick" name="kafedras_tq" id="kafedras_tq">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Shtat birligi:
                                                        </span>
                                                        <select class="form-control show-tick main" id="tq_shtat_b" name="tq_shtat_b">
                                                            <option></option>
                                                            <option value="1.00">1.00</option>
                                                            <option value="0.75">0.75</option>
                                                            <option value="0.50">0.50</option>
                                                            <option value="0.25">0.25</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Lavozimi:
                                                        </span>
                                                        <select class="form-control show-tick" name="tq_position">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $pos1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id");
                                                            $pos1->execute();
                                                            while ($row1 = $pos1->fetch()) {
                                                                $pos_name = $row1['pos_name'];
                                                            ?>
                                                                <option value="<?php echo $row1['pos_name']; ?>"><?php echo $row1['pos_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddati:
                                                        </span>
                                                        <select class="form-control show-tick" name="tq_muddat">
                                                            <option></option>
                                                            <option>Muddatli</option>
                                                            <option>Mudatsiz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq raqami:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="tq_buyruq_no" id="tq_buyruq_no" placeholder="XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni BS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="tq_muddat_begin_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni TS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="tq_muddat_end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq sanasi:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="tq_muddat_buyruq_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#one">Ichki o'rindosh (1 kategoriya - unversitet)</h3>
                                            <div id="one" class="collapse">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Fakulteti:
                                                        </span>
                                                        <select class="form-control show-tick" name="fakultets_one" id="fakultets_one">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Kafedrasi:
                                                        </span>
                                                        <select class="form-control show-tick" name="kafedras_one" id="kafedras_one">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Shtat birligi:
                                                        </span>
                                                        <select class="form-control show-tick main" id="one_shtat_b" name="one_shtat_b">
                                                            <option></option>
                                                            <option value="1.00">1.00</option>
                                                            <option value="0.75">0.75</option>
                                                            <option value="0.50">0.50</option>
                                                            <option value="0.25">0.25</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Lavozimi:
                                                        </span>
                                                        <select class="form-control show-tick" name="one_position">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $pos1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id");
                                                            $pos1->execute();
                                                            while ($row1 = $pos1->fetch()) {
                                                                $pos_name = $row1['pos_name'];
                                                            ?>
                                                                <option value="<?php echo $row1['pos_name']; ?>"><?php echo $row1['pos_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddati:
                                                        </span>
                                                        <select class="form-control show-tick" name="one_muddat">
                                                            <option></option>
                                                            <option>Muddatli</option>
                                                            <option>Mudatsiz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq raqami:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="one_buyruq_no" id="one_buyruq_no" placeholder="XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni BS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="one_muddat_begin_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni TS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="one_muddat_end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq sanasi:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="one_muddat_buyruq_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#two">Ichki o'rindosh (2 kategoriya - kafedra)</h3>
                                            <div id="two" class="collapse">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Fakulteti:
                                                        </span>
                                                        <select class="form-control show-tick" name="fakultets_two" id="fakultets_two">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Kafedrasi:
                                                        </span>
                                                        <select class="form-control show-tick" name="kafedras_two" id="kafedras_two">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Shtat birligi:
                                                        </span>
                                                        <select class="form-control show-tick main" id="two_shtat_b" name="two_shtat_b">
                                                            <option></option>
                                                            <option value="1.00">1.00</option>
                                                            <option value="0.75">0.75</option>
                                                            <option value="0.50">0.50</option>
                                                            <option value="0.25">0.25</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Lavozimi:
                                                        </span>
                                                        <select class="form-control show-tick" name="two_position">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $pos1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id");
                                                            $pos1->execute();
                                                            while ($row1 = $pos1->fetch()) {
                                                                $pos_name = $row1['pos_name'];
                                                            ?>
                                                                <option value="<?php echo $row1['pos_name']; ?>"><?php echo $row1['pos_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddati:
                                                        </span>
                                                        <select class="form-control show-tick" name="two_muddat">
                                                            <option></option>
                                                            <option>Muddatli</option>
                                                            <option>Mudatsiz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq raqami:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="two_buyruq_no" id="one_buyruq_no" placeholder="XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni BS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="two_muddat_begin_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni TS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="two_muddat_end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq sanasi:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="two_muddat_buyruq_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#soatbay">Soatbay</h3>
                                            <div id="soatbay" class="collapse">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Fakulteti:
                                                        </span>
                                                        <select class="form-control show-tick" name="fakultets_time" id="fakultets_time">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Kafedrasi:
                                                        </span>
                                                        <select class="form-control show-tick" name="kafedras_time" id="kafedras_time">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Soat xajmi:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="time_shtat_b" placeholder="Soat xajmini kiriting">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Lavozimi:
                                                        </span>
                                                        <select class="form-control show-tick" name="time_position">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $pos1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id");
                                                            $pos1->execute();
                                                            while ($row1 = $pos1->fetch()) {
                                                                $pos_name = $row1['pos_name'];
                                                            ?>
                                                                <option value="<?php echo $row1['pos_name']; ?>"><?php echo $row1['pos_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddati:
                                                        </span>
                                                        <select class="form-control show-tick" name="time_muddat">
                                                            <option></option>
                                                            <option>Muddatli</option>
                                                            <option>Mudatsiz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq raqami:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="time_buyruq_no" id="oime_buyruq_no" placeholder="XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni BS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="time_muddat_begin_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Muddatni TS:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="time_muddat_end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Buyruq sanasi:
                                                        </span>
                                                        <div id="sandbox-container" class="form-line">
                                                            <input type="Date" class="form-control" name="time_muddat_buyruq_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="save" value="SAVE" class="btn btn-success" style="float:right; margin-top: -30px;">
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#talim">Educational Attainment</h3>
                                            <div id="talim" class="collapse">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Bachelor's Degree:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="bs_name" placeholder="Degree">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Year:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="bs_year" placeholder="YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            School:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="bs_school" placeholder="School">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Master's Degree:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="ms_name" placeholder=" Degree">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            with:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="ms_with_unit" placeholder="with_Units">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Year:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="ms_year" placeholder="YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            School:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="ms_school" placeholder="School">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Doctorate Degree:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="dr_name" placeholder="Degree">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            with:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="dr_with_unit" placeholder="with Units">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Year:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="dr_year" placeholder="YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            School:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="dr_school" placeholder="School">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Other Degree:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="other_degree" placeholder="Other Degree">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Year:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="other_year" placeholder="YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            School:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="other_school" placeholder="School">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12">
                                            <h3 class="page-header" data-toggle="collapse" data-target="#qushish">Qo'shimcha</h3>
                                            <div id="qushish" class="collapse">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Designation:
                                                        </span>
                                                        <select class="form-control show-tick" name="per_position">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $pos1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id");
                                                            $pos1->execute();
                                                            while ($row1 = $pos1->fetch()) {
                                                                $pos_name = $row1['pos_name'];
                                                            ?>
                                                                <option value="<?php echo $row1['pos_id']; ?>"><?php echo $row1['pos_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Department:
                                                        </span>
                                                        <select class="form-control show-tick" name="dept_id">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $department = $con->prepare("SELECT * FROM tbl_department ORDER BY dept_id");
                                                            $department->execute();
                                                            while ($row1 = $department->fetch()) {
                                                                $dept_name = $row1['dept_name'];
                                                            ?>
                                                                <option value="<?php echo $row1['dept_id']; ?>"><?php echo $row1['dept_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Academic Rank:
                                                        </span>
                                                        <select class="form-control show-tick" name="rank_name">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $faculty_rank = $con->prepare("SELECT * FROM tbl_academic_rank ORDER BY rank_id");
                                                            $faculty_rank->execute();
                                                            while ($row102 = $faculty_rank->fetch()) {
                                                                $rank_name = $row102['rank_name'];
                                                            ?>
                                                                <option value="<?php echo $row102['rank_id']; ?>"><?php echo $row102['rank_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            GASS Rank:
                                                        </span>
                                                        <select class="form-control show-tick" name="gass_name">
                                                            <option></option>
                                                            <?php
                                                            include("connect.php");
                                                            $faculty1_rank = $con->prepare("SELECT * FROM tbl_gass_rank ORDER BY gass_id");
                                                            $faculty1_rank->execute();
                                                            while ($row101 = $faculty1_rank->fetch()) {
                                                                $gass_name = $row101['gass_name'];
                                                            ?>
                                                                <option value="<?php echo $row101['gass_id']; ?>"><?php echo $row101['gass_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Employee Status:
                                                        </span>
                                                        <select class="form-control show-tick main" id="privileges" name="per_designation">
                                                            <option></option>
                                                            <option value='Permanent'>Permanent</option>
                                                            <option value='GASS'>GASS</option>
                                                            <option value='Part-Time'>Part Time</option>
                                                            <option value='Job-Order'>Job Order</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Campus:
                                                        </span>
                                                        <select class="form-control show-tick" name="per_campus">
                                                            <option></option>
                                                            <option>Talisay</option>
                                                            <option>Fortune Towne</option>
                                                            <option>Alijis</option>
                                                            <option>Binalbagan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Plantilla Number
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control " name="per_plantilla_no">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Eligibility:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="per_eligibility" placeholder="Eligibility">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            TIN No.:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="per_tin_no" id="tin" placeholder="Ex: XXX-XXX-XXX" id="tin">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            GSIS BP No.:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control key" name="per_gsis_bp_no" id="gsis" placeholder="Ex: XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            PAG-IBIG No.:
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="per_pagibig_no" id="pagibig" maxlength="22" placeholder="e.g. XXX-XXX-XXX">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <!-- #END# Input Group -->
    </div>
</section>
<script src="plugins/js/formatter.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/region-birth.js"></script>
<script src="js/regions_1-place.js"></script>
<script src="js/fakultets-main.js"></script>
<script src="js/fakultets-mamuriyat.js"></script>
<script src="js/fakultets-doct.js"></script>
<script src="js/fakultets-tashqi-urindosh.js"></script>
<script src="js/fakultets-ichki-urindosh-birinchi-kategoriya.js"></script>
<script src="js/fakultets-ichki-urindosh-ikkinchi-kategoriya.js"></script>
<script src="js/fakultets-soatbay.js"></script>
<?php include("script.php"); ?>
<script>
    var contanct_no = new Formatter(document.getElementById('contact_no'), {
        'pattern': '+998 {{99}}-{{999}}-{{99}}-{{99}}',
        'persistent': true
    });
    var pagibig = new Formatter(document.getElementById('pagibig'), {
        'pattern': '{{999}}-{{999}}-{{999}}',
        'persistent': true
    });
    var tin = new Formatter(document.getElementById('tin'), {
        'pattern': '{{999}}-{{999}}-{{999}}',
        'persistent': true
    });
    var gsis = new Formatter(document.getElementById('gsis'), {
        'pattern': '{{999}}-{{999}}-{{999}}',
        'persistent': true
    });
    var pasport_no = new Formatter(document.getElementById('pasport_no'), {
        'pattern': '{{999}}-{{99}}-{{99}}',
        'persistent': true
    });
</script>
<script>
    function showImage(src, target) {
        var fr = new FileReader();
        // when image is loaded, set the src of the image where you want to display it
        fr.onload = function(e) {
            target.src = this.result;
        };
        src.addEventListener("change", function() {
            // fill fr with image data    
            fr.readAsDataURL(src.files[0]);
        });
    }

    var src = document.getElementById("src");
    var target = document.getElementById("target");
    showImage(src, target);
</script>

<script type="">
    $(function(){
  
  $("select.main").on("change", function(){
    //remove active
    $("select.models.active").removeClass("active");
    //check if select vlass exists..if it does show it
    var subList = $("select.models."+$(this).val());
    if (subList.length){
      //it does! show it by adding active class to it
      subList.addClass("active");
    }
  });
  
});
</script>
<script type="">
    var Privileges = jQuery('#privileges');
    var select = this.value;
    Privileges.change(function () {
        if ($(this).val() == '') {
            $('.resources').show();
        }
        else $('.resources').hide();
    });
</script>