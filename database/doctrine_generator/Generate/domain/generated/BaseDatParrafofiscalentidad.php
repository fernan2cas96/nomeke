<?php

/**
 * BaseDatParrafofiscalentidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idparrafofiscalentidad
 * @property decimal $tasa
 * @property decimal $idparrafofiscal
 * @property decimal $idestructuracomun
 * @property string $fechaini
 * @property string $fechafin
 * @property string $referencia
 * @property ModDatosmaestros.nomParrafofiscal $ModDatosmaestros.nomParrafofiscal
 * @property ModDatosmaestros.datTasa $ModDatosmaestros.datTasa
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatParrafofiscalentidad extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_parrafofiscalentidad');
        $this->hasColumn('idparrafofiscalentidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_datparrafofiscalentidad_seq',
             ));
        $this->hasColumn('tasa', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idparrafofiscal', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idestructuracomun', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fechaini', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fechafin', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('referencia', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModDatosmaestros.nomParrafofiscal', array(
             'local' => 'idparrafofiscal',
             'foreign' => 'idparrafofiscal'));

        $this->hasOne('ModDatosmaestros.datTasa', array(
             'local' => 'tasa',
             'foreign' => 'idtasa'));
    }
}