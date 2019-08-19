<?php

/**
 * BaseNomNivelcargo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idnivelcargo
 * @property string $denominacion
 * @property string $abreviatura
 * @property decimal $actual
 * @property decimal $visible
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomNivelcargo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_nivelcargo');
        $this->hasColumn('idnivelcargo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_estructuracomp.sec_nivelcargo_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('abreviatura', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('actual', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             ));
        $this->hasColumn('visible', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}