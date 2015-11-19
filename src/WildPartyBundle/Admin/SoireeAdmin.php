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
            ->add('description', 'textarea')
            ->add('date_debut', 'datetime')
            ->add('nb_place')
            ->add('prix')
            ->add('type');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('type');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom')
            ->add('description')
            ->add('date_debut', 'datetime')
            ->add('nb_place')
            ->add('prix')
            ->add('type')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
}