<?php

/**
 * BaseDatGraficausuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idgrafica
 * @property decimal $idusuario
 * @property ModEstructuracomp.datGrafica $ModEstructuracomp.datGrafica
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatGraficausuario extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_graficausuario');
        $this->hasColumn('idgrafica', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idusuario', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModEstructuracomp.datGrafica', array(
             'local' => 'idgrafica',
             'foreign' => 'idgrafica'));
    }
}