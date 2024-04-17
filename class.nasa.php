<?php

include_once("abstract.databoundobject.php");
include_once("class.pdofactory.php");

class Nasa extends DataBoundObject {

        protected $Date;
        protected $IdApi;
        protected $Dataset;
        protected $Planet;
        protected $ServiceVersion;

        protected function DefineTableName() {
                return("nasa");
        }

        protected function DefineRelationMap() {

                return(array(
                        "id" => "ID",
                        "idapi" => "IdApi",
                        "date" => "Date",
                        "dataset" => "Dataset",
                        "planet" => "Planet",
                        "service_version" => "ServiceVersion",
                ));
        }
}

?>
