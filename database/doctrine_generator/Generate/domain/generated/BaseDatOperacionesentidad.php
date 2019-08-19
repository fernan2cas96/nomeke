<?php

/**
 * BaseDatOperacionesentidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idoperacionesentidad
 * @property decimal $idestructuracomun
 * @property decimal $idnomoperaciones
 * @property decimal $idmodelo
 * @property decimal $iddoc
 * @property decimal $signo
 * @property ModDatosmaestros.nomConceptooperacion $ModDatosmaestros.nomConceptooperacion
 * @property ModDatosmaestros.datDocumentoprim $ModDatosmaestros.datDocumentoprim
 * @property ModDatosmaestros.nomModeloscontabilizacion $ModDatosmaestros.nomModeloscontabilizacion
 * @property ModDatosmaestros.nomOperacion $ModDatosmaestros.nomOperacion
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatOperacionesentidad extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_operacionesentidad');
        $this->hasColumn('idoperacionesentidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_datoperacionesentidad_seq',
             ));
        $this->hasColumn('idestructuracomun', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idnomoperaciones', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idmodelo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('iddoc', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('signo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModDatosmaestros.nomConceptooperacion', array(
             'local' => 'signo',
             'foreign' => 'idconceptooperacion'));

        $this->hasOne('ModDatosmaestros.datDocumentoprim', array(
             'local' => 'iddoc',
             'foreign' => 'iddoc'));

        $this->hasOne('ModDatosmaestros.nomModeloscontabilizacion', array(
             'local' => 'idmodelo',
             'foreign' => 'idmodelo'));

        $this->hasOne('ModDatosmaestros.nomOperacion', array(
             'local' => 'idnomoperaciones',
             'foreign' => 'idnomoperaciones'));
    }
}