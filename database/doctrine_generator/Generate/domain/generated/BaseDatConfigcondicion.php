<?php

/**
 * BaseDatConfigcondicion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idconfigcondicion
 * @property decimal $idcampo
 * @property string $tipodato
 * @property string $condicionpordefecto
 * @property string $expresionregular
 * @property string $sqlwhere
 * @property string $idtabla
 * @property decimal $usarcondicion
 * @property decimal $representartbar
 * @property string $sqlfilter
 * @property string $usarreemplazar
 * @property ModReccomplejas2.datCampo $ModReccomplejas2.datCampo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatConfigcondicion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_configcondicion');
        $this->hasColumn('idconfigcondicion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_reccomplejas2.sec_configcondicion_seq',
             ));
        $this->hasColumn('idcampo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('tipodato', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'TEXTO',
             'primary' => false,
             ));
        $this->hasColumn('condicionpordefecto', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('expresionregular', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('sqlwhere', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idtabla', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('usarcondicion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             ));
        $this->hasColumn('representartbar', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('sqlfilter', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('usarreemplazar', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => 'NINGUNO',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModReccomplejas2.datCampo', array(
             'local' => 'idcampo',
             'foreign' => 'idcampo'));
    }
}