<?php

/**
 * BaseDatFuncionalidadcompartimentacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idfuncionalidad
 * @property decimal $iddominio
 * @property ModSeguridad.datFuncionalidad $ModSeguridad.datFuncionalidad
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatFuncionalidadcompartimentacion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_funcionalidadcompartimentacion');
        $this->hasColumn('idfuncionalidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('iddominio', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModSeguridad.datFuncionalidad', array(
             'local' => 'idfuncionalidad',
             'foreign' => 'idfuncionalidad'));
    }
}