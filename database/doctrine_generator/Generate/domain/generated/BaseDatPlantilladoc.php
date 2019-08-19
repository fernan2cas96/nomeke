<?php

/**
 * BaseDatPlantilladoc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idplantilladoc
 * @property string $denominacion
 * @property string $descripcion
 * @property date $fdesde
 * @property date $fhasta
 * @property decimal $idtipoplantilladoc
 * @property string $contenido
 * @property decimal $identidad
 * @property ModRrhhmaestro.nomTipoplantilladoc $ModRrhhmaestro.nomTipoplantilladoc
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatPlantilladoc extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_plantilladoc');
        $this->hasColumn('idplantilladoc', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_rrhhmaestro.sec_plantilladoc_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fdesde', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'now()',
             'primary' => false,
             ));
        $this->hasColumn('fhasta', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idtipoplantilladoc', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('contenido', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('identidad', 'decimal', null, array(
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
        $this->hasOne('ModRrhhmaestro.nomTipoplantilladoc', array(
             'local' => 'idtipoplantilladoc',
             'foreign' => 'idtipoplantilladoc'));
    }
}