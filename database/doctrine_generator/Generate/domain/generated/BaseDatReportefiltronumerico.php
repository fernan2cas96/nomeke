<?php

/**
 * BaseDatReportefiltronumerico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idfiltro
 * @property decimal $valorminimo
 * @property decimal $valormaximo
 * @property ModRrhhmaestro.datReportefiltro $ModRrhhmaestro.datReportefiltro
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatReportefiltronumerico extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_reportefiltronumerico');
        $this->hasColumn('idfiltro', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('valorminimo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('valormaximo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModRrhhmaestro.datReportefiltro', array(
             'local' => 'idfiltro',
             'foreign' => 'idfiltro'));
    }
}