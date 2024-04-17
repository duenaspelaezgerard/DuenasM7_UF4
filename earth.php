<?php

    include_once("abstract.databoundobject.php");
    include_once("class.nasa.php");
    include_once("class.pdofactory.php");

    $strDSN = "pgsql:dbname=m7uf4;host=localhost;port=5432";
    $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
    $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $html = file_get_contents("https://api.nasa.gov/planetary/earth/assets?lon=100.75&lat=1.5&date=2014-02-01&dim=0.15&api_key=TlpQwb952y4XYgcWuT3dLH8L2uqq3YHWmIHqBliV");

    $json = json_decode($html);

    $idAPI = $json->id;    
    $date = $json->date;
    $date = str_replace('T', ' ', $date);
    $dataset = $json->resource->dataset;
    $planet = $json->resource->planet;
    $service_version = $json->service_version;


    $objNasa = new Nasa($objPDO);
    $objNasa->setIdApi($idAPI);
    $objNasa->setDate($date);
    $objNasa->setDataset($dataset);
    $objNasa->setPlanet($planet);
    $objNasa->setServiceVersion($service_version);
    

    print "ID API es: " . $objNasa->getIdApi() . "<br />";
    print "Fecha: " . $objNasa->getDate() . "<br />";
    print "Dataset: " . $objNasa->getDataset() . "<br />";
    print "Planet: " . $objNasa->getPlanet() . "<br />";
    print "Service Version: " . $objNasa->getServiceVersion() . "<br />";

    print "Guardando...<br />";

    $objNasa->Save();





