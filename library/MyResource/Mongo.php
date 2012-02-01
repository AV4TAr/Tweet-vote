<?php
/**
 * Init a mongo database
 */
class MyResource_Mongo extends Zend_Application_Resource_ResourceAbstract
{
    public function init() {
        //$this->getResource("mongo");
        $options = $this->getOptions();
        try{
            $mongo = new Mongo();
            $mongo = new Mongo("mongodb://".$options["params"]["host"].":".$options["params"]["port"]);
            $db = $mongo->$options["params"]["dbname"];
            return $db;
        } catch (Exception $e){
            throw new Exception("An error ocurred, cant connect to mongo, check configuration file: ".$e->getMessage(), $e->getCode());
        }       

    }
}