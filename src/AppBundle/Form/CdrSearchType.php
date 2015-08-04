<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CdrSearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', null, array(
                'required' => false,
                'label' => 'ID',
            ))
            ->add('calldate_from', 'text', array(
                'mapped' => false,
                'required' => false,
                'label' => 'Call Date From',
            ))
            ->add('calldate_to', 'text', array(
                'mapped' => false,
                'required' => false,
                'label' => 'Call Date To',
            ))
            ->add('uniqueid', null, array(
                'required' => false,
                'label' => 'UniqueID',
            ))
            ->add('accountcode', null, array(
                'required' => false,
                'label' => 'Accountcode',
            ))
            ->add('src', null, array(
                'required' => false,
                'label' => 'Source',
            ))
            ->add('dst', null, array(
                'required' => false,
                'label' => 'Destination',
            ))
            ->add('dcontext', null, array(
                'required' => false,
                'label' => 'Dcontext',
            ))
            ->add('clid', null, array(
                'required' => false,
                'label' => 'Clid',
            ))
            ->add('channel', null, array(
                'required' => false,
                'label' => 'Channel',
            ))
            ->add('dstchannel', null, array(
                'required' => false,
                'label' => 'Dstchannel',
            ))
            ->add('lastapp', null, array(
                'required' => false,
                'label' => 'Lastapp',
            ))
            ->add('lastdata', null, array(
                'required' => false,
                'label' => 'Lastdata',
            ))
            ->add('duration', null, array(
                'required' => false,
                'label' => 'Duration',
            ))
            ->add('billsec', null, array(
                'required' => false,
                'label' => 'Billsec',
            ))
            ->add('disposition', null, array(
                'required' => false,
                'label' => 'Disposition',
            ))
            ->add('amaflags', null, array(
                'required' => false,
                'label' => 'Amaflags',
            ))
            ->add('userfield', null, array(
                'required' => false,
                'label' => 'Userfield',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cdr',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cdr_search';
    }
}