<?php

/**
 * BaseDatTabla
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idtabla
 * @property string $esquema
 * @property string $tabla
 * @property decimal $arbol
 * @property decimal $importada
 * @property string $alias
 * @property decimal $idprefijo
 * @property ModMetadata.nomPrefijo $ModMetadata.nomPrefijo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatTabla extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_tabla');
        $this->hasColumn('idtabla', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_metadata.sec_tabla_seq',
             ));
        $this->hasColumn('esquema', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('tabla', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('arbol', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('importada', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('alias', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idprefijo', 'decimal', null, array(
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
        $this->hasOne('ModMetadata.nomPrefijo', array(
             'local' => 'idprefijo',
             'foreign' => 'idprefijo'));
    }
}