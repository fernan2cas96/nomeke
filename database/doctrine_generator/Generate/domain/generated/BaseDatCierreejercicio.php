<?php

/**
 * BaseDatCierreejercicio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcierreejercicio
 * @property decimal $idestructurasubsist
 * @property decimal $idejercicio
 * @property ModDatosmaestros.datEjerciciocontable $ModDatosmaestros.datEjerciciocontable
 * @property ModDatosmaestros.datEstructurasubsist $ModDatosmaestros.datEstructurasubsist
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatCierreejercicio extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_cierreejercicio');
        $this->hasColumn('idcierreejercicio', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_cierreejercicio_seq',
             ));
        $this->hasColumn('idestructurasubsist', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idejercicio', 'decimal', null, array(
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
        $this->hasOne('ModDatosmaestros.datEjerciciocontable', array(
             'local' => 'idejercicio',
             'foreign' => 'idejercicio'));

        $this->hasOne('ModDatosmaestros.datEstructurasubsist', array(
             'local' => 'idestructurasubsist',
             'foreign' => 'idestructurasubsist'));
    }
}