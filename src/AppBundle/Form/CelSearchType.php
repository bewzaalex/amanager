<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CelSearchType extends AbstractType
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
            ->add('eventtype', 'text', array(
                'required' => false,
                'label' => 'Event Type',
            ))
            ->add('eventtime_from', 'text', array(
                'mapped' => false,
                'required' => false,
                'label' => 'Event Time From',
            ))
            ->add('eventtime_to', 'text', array(
                'mapped' => false,
                'required' => false,
                'label' => 'Event Time To',
            ))
            ->add('cid_name', null, array(
                'required' => false,
                'label' => 'CallerID Name',
            ))
            ->add('cid_num', null, array(
                'required' => false,
                'label' => 'CallerID Number',
            ))
            ->add('cid_ani', null, array(
                'required' => false,
                'label' => 'CallerID ANI',
            ))
            ->add('cid_rdnis', null, array(
                'required' => false,
                'label' => 'CallerID RDNIS',
            ))
            ->add('cid_dnid', null, array(
                'required' => false,
                'label' => 'CallerID DNID',
            ))
            ->add('exten', null, array(
                'required' => false,
                'label' => 'Extension',
            ))
            ->add('context', null, array(
                'required' => false,
                'label' => 'Context',
            ))
            ->add('channame', null, array(
                'required' => false,
                'label' => 'Channel Name',
            ))
            ->add('src', null, array(
                'required' => false,
                'label' => 'Source',
            ))
            ->add('dst', null, array(
                'required' => false,
                'label' => 'Destination',
            ))
            ->add('channel', null, array(
                'required' => false,
                'label' => 'Channel',
            ))
            ->add('dstchannel', null, array(
                'required' => false,
                'label' => 'Destination Channel',
            ))
            ->add('appname', null, array(
                'required' => false,
                'label' => 'Application Name',
            ))
            ->add('appdata', null, array(
                'required' => false,
                'label' => 'Application Data',
            ))
            ->add('amaflags', null, array(
                'required' => false,
                'label' => 'Amaflags',
            ))
            ->add('accountcode', null, array(
                'required' => false,
                'label' => 'Accountcode',
            ))
            ->add('uniqueid', null, array(
                'required' => false,
                'label' => 'UniqueID',
            ))
            ->add('linkedid', null, array(
                'required' => false,
                'label' => 'LinkedID',
            ))
            ->add('peer', null, array(
                'required' => false,
                'label' => 'Peer',
            ))
            ->add('userdeftype', null, array(
                'required' => false,
                'label' => 'Userdeftype',
            ))
            ->add('eventextra', null, array(
                'required' => false,
                'label' => 'Eventextra',
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
            'data_class' => 'AppBundle\Entity\Cel',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cel_search';
    }
}