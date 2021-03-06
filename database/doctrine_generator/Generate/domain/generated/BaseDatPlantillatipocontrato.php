<?php

/**
 * BaseDatPlantillatipocontrato
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idplantillatipocontrato
 * @property decimal $idtipocontrato
 * @property decimal $idplantilla
 * @property ModRrhhmaestro.datPlantilladoc $ModRrhhmaestro.datPlantilladoc
 * @property ModFuerzatrabajo.nomTipocontrato $ModFuerzatrabajo.nomTipocontrato
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatPlantillatipocontrato extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_plantillatipocontrato');
        $this->hasColumn('idplantillatipocontrato', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_fuerzatrabajo.sec_plantillatipocontrato_seq',
             ));
        $this->hasColumn('idtipocontrato', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idplantilla', 'decimal', null, array(
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
        $this->hasOne('ModRrhhmaestro.datPlantilladoc', array(
             'local' => 'idplantilla',
             'foreign' => 'idplantilladoc'));

        $this->hasOne('ModFuerzatrabajo.nomTipocontrato', array(
             'local' => 'idtipocontrato',
             'foreign' => 'idtipocontrato'));
    }
}