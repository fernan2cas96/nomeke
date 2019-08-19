<?php

/**
 * BaseDatComponente
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcomponente
 * @property string $etiqueta
 * @property decimal $idtipocomponente
 * @property decimal $idcampo
 * @property decimal $orden
 * @property ModMetadata.datCampo $ModMetadata.datCampo
 * @property ModMetadata.nomTipocomponente $ModMetadata.nomTipocomponente
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatComponente extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_componente');
        $this->hasColumn('idcomponente', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_metadata.sec_componente_seq',
             ));
        $this->hasColumn('etiqueta', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idtipocomponente', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idcampo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('orden', 'decimal', null, array(
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
        $this->hasOne('ModMetadata.datCampo', array(
             'local' => 'idcampo',
             'foreign' => 'idcampo'));

        $this->hasOne('ModMetadata.nomTipocomponente', array(
             'local' => 'idtipocomponente',
             'foreign' => 'idtipocomponente'));
    }
}