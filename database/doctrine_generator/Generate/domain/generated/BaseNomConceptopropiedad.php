<?php

/**
 * BaseNomConceptopropiedad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idconceptopropiedad
 * @property decimal $idconcepto
 * @property decimal $idpropiedad
 * @property ModEstructuracomp.nomConcepto $ModEstructuracomp.nomConcepto
 * @property ModEstructuracomp.nomPropiedad $ModEstructuracomp.nomPropiedad
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomConceptopropiedad extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_conceptopropiedad');
        $this->hasColumn('idconceptopropiedad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_estructuracomp.sec_conceptopropiedad_seq',
             ));
        $this->hasColumn('idconcepto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idpropiedad', 'decimal', null, array(
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
        $this->hasOne('ModEstructuracomp.nomConcepto', array(
             'local' => 'idconcepto',
             'foreign' => 'idconcepto'));

        $this->hasOne('ModEstructuracomp.nomPropiedad', array(
             'local' => 'idpropiedad',
             'foreign' => 'idpropiedad'));
    }
}