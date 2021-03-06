<?php

/**
 * BaseDatTipodatogestor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idtipodatogestor
 * @property string $nombre
 * @property decimal $idtipodato
 * @property decimal $idgestor
 * @property ModMetadata.nomGestor $ModMetadata.nomGestor
 * @property ModMetadata.nomTipodato $ModMetadata.nomTipodato
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatTipodatogestor extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_tipodatogestor');
        $this->hasColumn('idtipodatogestor', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_metadata.sec_tipodatogestor_seq',
             ));
        $this->hasColumn('nombre', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idtipodato', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idgestor', 'decimal', null, array(
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
        $this->hasOne('ModMetadata.nomGestor', array(
             'local' => 'idgestor',
             'foreign' => 'idgestor'));

        $this->hasOne('ModMetadata.nomTipodato', array(
             'local' => 'idtipodato',
             'foreign' => 'idtipodato'));
    }
}