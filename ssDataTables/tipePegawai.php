<?php

/*
 * Example PHP implementation used for the index.php example
 */

// DataTables PHP library
include("../assets/js/libs/datatables-editor/php/DataTables.php");

// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Join,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;

// Build our Editor instance and process the data coming from _POST
Editor::inst($db, 'tipe_pegawai')->pkey('kode_tipepegawai')
    ->fields(
        Field::inst('kode_tipepegawai')->validator('Validate::notEmpty'),
        Field::inst('keterangan')->validator('Validate::notEmpty')
    )
    ->process($_POST)
    ->json();