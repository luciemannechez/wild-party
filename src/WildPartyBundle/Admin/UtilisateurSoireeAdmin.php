<?php
// srcWildPartyBundle/Admin/UtilisateurSoireeAdmin.php
namespace WildPartyBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class UtilisateurSoireeAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('user', null, array('required' => false))
            ->add('soiree', null, array('required' => false))
            ->add('paye', 'checkbox', array(
                'label' => 'Payé',
                'required' => false
                )
            )
            ->add('montant', null, array('required' => false));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('paye');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('user')
            ->add('soiree')
            ->add('paye')
            ->add('montant')
            ->add('_action', 'actions', array(
                    'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));

    }

    protected function configureRoutes(RouteCollection $collection)
    {
        // to remove a single route

        // OR remove all route except named ones
        //$collection->clearExcept(array('list', 'show', 'edit'));
        $collection->remove('create');
    }
}