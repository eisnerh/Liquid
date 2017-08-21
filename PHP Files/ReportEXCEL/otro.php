<?php
/**
 * Created by PhpStorm.
 * User: ace
 * Date: 19/08/17
 * Time: 03:39 PM
 */
require 'Classes/PHPExcel.php';

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
// Cargamos la plantilla
$objPHPExcel = $objReader->load("plantilla.xlsx");
// Creamos los Metadatos
$objPHPExcel->getProperties()
            ->setCreator("loyalty.com")
            ->setLastModifiedBy("loyalty.com")
            ->setTitle("Plantilla cargue masivo de usuarios")
            ->setSubject("Registro usuarios")
            ->setDescription("Documento Generado Automaticamente")
            ->setKeywords("Loyalty")
            ->setCategory("Usuarios");
// Cargamos los tipos de identificacion.
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', 'C.C')
            ->setCellValue('A3', 'C.E')
            ->setCellValue('A4', 'T.I')
	// Cargamos los tipos de genero.
	        ->setCellValue('B2', 'Masculino')
            ->setCellValue('B3', 'Femenino')
	// Cargamos los tipos de estado civil.
	        ->setCellValue('C1', 'Soltero')
            ->setCellValue('C2', 'Casado')
            ->setCellValue('C3', 'Divorciado');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Cache-Control: max-age=0');
$objWriter->save('plantilla_1.xlsx');