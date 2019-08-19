<?php

/**
 * BaseDatDezglozemoneda
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $iddezglozemoneda
 * @property decimal $idmoneda
 * @property decimal $iddezglozemonedas
 * @property ModDatosmaestros.nomDezglozemoneda $ModDatosmaestros.nomDezglozemoneda
 * @property ModDatosmaestros.nomDezglozemoneda $ModDatosmaestros.nomDezglozemoneda_2
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatDezglozemoneda extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_dezglozemoneda');
        $this->hasColumn('iddezglozemoneda', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_datdezglozemoneda_seq',
             ));
        $this->hasColumn('idmoneda', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('iddezglozemonedas', 'decimal', null, array(
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
        $this->hasOne('ModDatosmaestros.nomDezglozemoneda', array(
             'local' => 'iddezglozemonedas',
             'foreign' => 'iddezglozemonedas'));

        $this->hasOne('ModDatosmaestros.nomDezglozemoneda as ModDatosmaestros.nomDezglozemoneda_2', array(
             'local' => 'iddezglozemonedas',
             'foreign' => 'iddezglozemonedas'));
    }
}