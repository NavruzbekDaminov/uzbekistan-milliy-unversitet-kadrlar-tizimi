<?php
include('connect.php');
if(isset($_POST['save'])) {
	$per_lastname = $_POST['per_lastname'];
	$per_firstname = $_POST['per_firstname'];
	$per_middlename = $_POST['per_middlename'];
	$per_suffix = $_POST['per_suffix'];
	$per_gender = $_POST['per_gender'];
	$per_status = $_POST['per_status'];
	$per_address_country_birth = $_POST['per_address_country_birth'];
	if($_POST['regions'] == "0"){
		$districts = '';
		$regions = '';
	}else {
		$districts = $_POST['districts'];
		$regions = $_POST['regions'];
	}
	$per_nationality = $_POST['per_nationality'];
    if($_POST['regions_1'] == "0"){
		$regions_1 = '';
		$districts_1 = '';
	}
	else {
		$regions_1 = $_POST['regions_1'];
		$districts_1 = $_POST['districts_1'];
	}
	$per_address_house_place = $_POST['per_address_house_place'];
	$per_contact_no = $_POST['per_contact_no'];
	$per_date_of_birth  = $_POST['per_date_of_birth'];
	$per_pasport_series  = $_POST['per_pasport_series'];
	$per_pasport_no  = $_POST['per_pasport_no'];
	$per_pasport_given_date  = $_POST['per_pasport_given_date'];
	$per_pasport_who_given  = $_POST['per_pasport_who_given'];
	$per_date_of_original_appointment = $_POST['per_date_of_original_appointment'];

	if($_POST['fakultets_main'] == "0") {
		$fakultets_main = '';
		$kafedras_main = '';
	}
	else {
		$fakultets_main = $_POST['fakultets_main'];
		$kafedras_main = $_POST['kafedras_main'];
	}
	$main_shtat_b = $_POST['main_shtat_b'];
	$main_position = $_POST['main_position'];
	$main_muddat = $_POST['main_muddat'];
	$main_buyruq_no = $_POST['main_buyruq_no'];
	$main_muddat_begin_date = $_POST['main_muddat_begin_date'];
	$main_muddat_end_date = $_POST['main_muddat_end_date'];
	$main_muddat_buyruq_date = $_POST['main_muddat_buyruq_date'];
	
	if($_POST['fakultets_mamuriyat'] == "0") {
		$fakultets_mamuriyat = '';
		$kafedras_mamuriyat = '';
	}
	else {
		$fakultets_mamuriyat = $_POST['fakultets_mamuriyat'];
		$kafedras_mamuriyat = $_POST['kafedras_mamuriyat'];
	}
	$mamuriyat_lavozimi = $_POST['mamuriyat_lavozimi'];
	$mamuriyat_shtat_b = $_POST['mamuriyat_shtat_b'];
	$mamuriyat_position = $_POST['mamuriyat_position'];
	$mamuriyat_muddat = $_POST['mamuriyat_muddat'];
	$mamuriyat_buyruq_no = $_POST['mamuriyat_buyruq_no'];
	$mamuriyat_muddat_begin_date = $_POST['mamuriyat_muddat_begin_date'];
	$mamuriyat_muddat_end_date = $_POST['mamuriyat_muddat_end_date'];
	$mamuriyat_muddat_buyruq_date = $_POST['mamuriyat_muddat_buyruq_date'];

	
	if($_POST['fakultets_doct'] == "0") {
		$fakultets_doct = '';
		$kafedras_doct = '';
	}
	else {
		$fakultets_doct = $_POST['fakultets_doct'];
		$kafedras_doct = $_POST['kafedras_doct'];
	}
	$doct_shtat_b = $_POST['doct_shtat_b'];
	$doct_position = $_POST['doct_position'];
	$doct_muddat = $_POST['doct_muddat'];
	$doct_buyruq_no = $_POST['doct_buyruq_no'];
	$doct_muddat_begin_date = $_POST['doct_muddat_begin_date'];
	$doct_muddat_end_date = $_POST['doct_muddat_end_date'];
	$doct_muddat_buyruq_date = $_POST['doct_muddat_buyruq_date'];

	$tq_work_place = $_POST['tq_work_place'];
	$tq_asosiy_lavozimi = $_POST['tq_asosiy_lavozimi'];
	if($_POST['fakultets_tq'] == "0") {
		$fakultets_tq = '';
		$kafedras_tq = '';
	}
	else {
		$fakultets_tq = $_POST['fakultets_tq'];
		$kafedras_tq = $_POST['kafedras_tq'];
	}
	$tq_shtat_b = $_POST['tq_shtat_b'];
	$tq_position = $_POST['tq_position'];
	$tq_muddat = $_POST['tq_muddat'];
	$tq_buyruq_no = $_POST['tq_buyruq_no'];
	$tq_muddat_begin_date = $_POST['tq_muddat_begin_date'];
	$tq_muddat_end_date = $_POST['tq_muddat_end_date'];
	$tq_muddat_buyruq_date = $_POST['tq_muddat_buyruq_date'];

	if($_POST['fakultets_one'] == "0") {
		$fakultets_one = '';
		$kafedras_one = '';
	}
	else {
		$fakultets_one = $_POST['fakultets_one'];
		$kafedras_one = $_POST['kafedras_one'];
	}
	$one_shtat_b = $_POST['one_shtat_b'];
	$one_position = $_POST['one_position'];
	$one_muddat = $_POST['one_muddat'];
	$one_buyruq_no = $_POST['one_buyruq_no'];
	$one_muddat_begin_date = $_POST['one_muddat_begin_date'];
	$one_muddat_end_date = $_POST['one_muddat_end_date'];
	$one_muddat_buyruq_date = $_POST['one_muddat_buyruq_date'];

	if($_POST['fakultets_two'] == "0") {
		$fakultets_two = '';
		$kafedras_two = '';
	}
	else {
		$fakultets_two = $_POST['fakultets_two'];
		$kafedras_two = $_POST['kafedras_two'];
	}
	$two_shtat_b = $_POST['two_shtat_b'];
	$two_position = $_POST['two_position'];
	$two_muddat = $_POST['two_muddat'];
	$two_buyruq_no = $_POST['two_buyruq_no'];
	$two_muddat_begin_date = $_POST['two_muddat_begin_date'];
	$two_muddat_end_date = $_POST['two_muddat_end_date'];
	$two_muddat_buyruq_date = $_POST['two_muddat_buyruq_date'];

	if($_POST['fakultets_time'] == "0") {
		$fakultets_time = '';
		$kafedras_time = '';
	}
	else {
		$fakultets_time = $_POST['fakultets_time'];
		$kafedras_time = $_POST['kafedras_time'];
	}
	$time_shtat_b = $_POST['time_shtat_b'];
	$time_position = $_POST['time_position'];
	$time_muddat = $_POST['time_muddat'];
	$time_buyruq_no = $_POST['time_buyruq_no'];
	$time_muddat_begin_date = $_POST['time_muddat_begin_date'];
	$time_muddat_end_date = $_POST['time_muddat_end_date'];
	$time_muddat_buyruq_date = $_POST['time_muddat_buyruq_date'];

	$per_position = $_POST['per_position'];
	$per_rank = $_POST['rank_name'];
	$per_eligibility = $_POST['per_eligibility'];
	$dept_id = $_POST['dept_id'];
	$per_designation = $_POST['per_designation'];
	$per_tin_no = $_POST['per_tin_no'];
	$per_gsis_bp_no = $_POST['per_gsis_bp_no'];
	$per_pagibig_no = $_POST['per_pagibig_no'];
	$per_plantilla_no = $_POST['per_plantilla_no'];
	$per_campus = $_POST['per_campus'];
	$bs_name = $_POST['bs_name'];
	$bs_year = $_POST['bs_year'];
	$bs_school = $_POST['bs_school'];
	$ms_name = $_POST['ms_name'];
	$ms_with_unit = $_POST['ms_with_unit'];
	$ms_year = $_POST['ms_year'];
	$ms_school = $_POST['ms_school'];
	$dr_name = $_POST['dr_name'];
	$dr_with_unit = $_POST['dr_with_unit'];
	$dr_year = $_POST['dr_year'];
	$dr_school = $_POST['dr_school'];
	$other_degree = $_POST['other_degree'];
	$other_year = $_POST['other_year'];
	$other_school = $_POST['other_school'];
	$gass_id = $_POST['gass_name'];

	$add_personnel = $con->prepare("INSERT INTO tbl_personnel (per_firstname, per_middlename, per_lastname,per_suffix, per_gender, per_status, per_address_country_birth, regions, districts, per_nationality, regions_1, districts_1, per_address_house_place, pos_id, rank_id, dept_id,per_designation, per_date_of_birth, per_pasport_series, per_pasport_no, per_pasport_given_date, per_pasport_who_given, per_date_of_original_appointment, fakultets_main, kafedras_main, main_shtat_b, main_position, main_muddat, main_buyruq_no, main_muddat_begin_date, main_muddat_end_date, main_muddat_buyruq_date, mamuriyat_lavozimi, fakultets_mamuriyat, kafedras_mamuriyat, mamuriyat_shtat_b, mamuriyat_position, mamuriyat_muddat, mamuriyat_buyruq_no, mamuriyat_muddat_begin_date, mamuriyat_muddat_end_date, mamuriyat_muddat_buyruq_date, fakultets_doct, kafedras_doct, doct_shtat_b, doct_position, doct_muddat, doct_buyruq_no, doct_muddat_begin_date, doct_muddat_end_date, doct_muddat_buyruq_date, tq_work_place, tq_asosiy_lavozimi, fakultets_tq, kafedras_tq, tq_shtat_b, tq_position, tq_muddat, tq_buyruq_no, tq_muddat_begin_date, tq_muddat_end_date, tq_muddat_buyruq_date, fakultets_one, kafedras_one, one_shtat_b, one_position, one_muddat, one_buyruq_no, one_muddat_begin_date, one_muddat_end_date, one_muddat_buyruq_date, fakultets_two, kafedras_two, two_shtat_b, two_position, two_muddat, two_buyruq_no, two_muddat_begin_date, two_muddat_end_date, two_muddat_buyruq_date, fakultets_time, kafedras_time, time_shtat_b, time_position, time_muddat, time_buyruq_no, time_muddat_begin_date, time_muddat_end_date, time_muddat_buyruq_date, per_eligibility, per_tin_no, per_gsis_bp_no, per_pagibig_no, per_contact_no, per_plantilla_no, per_campus ,bs_name, bs_year, bs_school, ms_name, ms_with_unit, ms_year, ms_school, dr_name, dr_with_unit, dr_year, dr_school, other_degree, other_year, other_school, date_modified , gass_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,  NOW(), ? )");

	$add_personnel->execute(array($per_firstname, $per_middlename, $per_lastname,$per_suffix, $per_gender,$per_status, $per_address_country_birth, $regions, $districts, $per_nationality, $regions_1, $districts_1, $per_address_house_place, $per_position, $per_rank, $dept_id, $per_designation, $per_date_of_birth, $per_pasport_series, $per_pasport_no, $per_pasport_given_date, $per_pasport_who_given, $per_date_of_original_appointment, $fakultets_main, $kafedras_main, $main_shtat_b, $main_position, $main_muddat, $main_buyruq_no, $main_muddat_begin_date, $main_muddat_end_date, $main_muddat_buyruq_date, $mamuriyat_lavozimi, $fakultets_mamuriyat, $kafedras_mamuriyat, $mamuriyat_shtat_b, $mamuriyat_position, $mamuriyat_muddat, $mamuriyat_buyruq_no, $mamuriyat_muddat_begin_date, $mamuriyat_muddat_end_date, $mamuriyat_muddat_buyruq_date, $fakultets_doct, $kafedras_doct, $doct_shtat_b, $doct_position, $doct_muddat, $doct_buyruq_no, $doct_muddat_begin_date, $doct_muddat_end_date, $doct_muddat_buyruq_date, $tq_work_place, $tq_asosiy_lavozimi, $fakultets_tq, $kafedras_tq, $tq_shtat_b, $tq_position, $tq_muddat, $tq_buyruq_no, $tq_muddat_begin_date, $tq_muddat_end_date, $tq_muddat_buyruq_date, $fakultets_one, $kafedras_one, $one_shtat_b, $one_position, $one_muddat, $one_buyruq_no, $one_muddat_begin_date, $one_muddat_end_date, $one_muddat_buyruq_date, $fakultets_two, $kafedras_two, $two_shtat_b, $two_position, $two_muddat, $two_buyruq_no, $two_muddat_begin_date, $two_muddat_end_date, $two_muddat_buyruq_date, $fakultets_time, $kafedras_time, $time_shtat_b, $time_position, $time_muddat, $time_buyruq_no, $time_muddat_begin_date, $time_muddat_end_date, $time_muddat_buyruq_date, $per_eligibility, $per_tin_no, $per_gsis_bp_no, $per_pagibig_no, $per_contact_no, $per_plantilla_no, $per_campus,$bs_name, $bs_year, $bs_school, $ms_name, $ms_with_unit, $ms_year, $ms_school, $dr_name, $dr_with_unit, $dr_year, $dr_school, $other_degree, $other_year, $other_school,$gass_id));

	header('location:home.php');
}
?>
