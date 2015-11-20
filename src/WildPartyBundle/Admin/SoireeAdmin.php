<?php
// srcWildPartyBundle/Admin/SoireeAdmin.php
namespace WildPartyBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SoireeAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom', 'text')
            ->add('description', 'textarea', array('required' => false))
            ->add('date_debut', 'datetime')
            ->add('nb_place', null, array('label' => 'Nombre de place (-1 = illimité)' ))
            ->add('type')
            ->add('prix', 'number', array('required' => false));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('date_debut', 'doctrine_orm_date_range')
            ->add('nom')
            ->add('user')
            ->add('type');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom')
            ->add('description')
            ->add('date_debut', 'datetime')
            ->add('nb_place')
            ->add('nb_personnes')
            ->add('prix')
            ->add('type')
            ->add('user')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
}