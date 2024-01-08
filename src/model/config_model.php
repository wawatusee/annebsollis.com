<?php
/**
 * @author Kievu
 * Class ConfigModel
 * Import d'un fichier json config.json, contenant les datas nécessaires pour initialiser le site :
 * le comportement singlepage, les sections du site seront elles concentrées sur une page ou sur plusieurs pages.
 * le tableau des langues disponibles.
 * 
 * 
 */
class ConfigModel{
    /**
     * @var string chemin du fichier json à traiter
     */
    private $srcJson;
    /**
     * @var array json to array
     */
    private $configDatas;
    /**
     * @var bool  singlePage give the behaviour of the website singlePage or multipage
     */
    private $singlePage;
    /**
     * @var array langs of the website
     */
    private $langs;
    public function __construct(string $srcJson){
        $this->srcJson=$srcJson;
        $this->configDatas=json_decode(file_get_contents($srcJson));
        //$this->singlePage=$this->configDatas->singlePage;
    }
    public function get_single_page_behaviour(){
        $singlePage=$this->configDatas->singlepage;
        return $singlePage;
    }
    public function get_config_datas(){
        return $this->configDatas;
    }
}