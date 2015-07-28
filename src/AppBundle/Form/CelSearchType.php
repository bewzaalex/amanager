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
            ->add('id', 'number', array(
                'required' => false,
                'label' => 'ID: ',
            ))
            ->add('eventtype', 'text', array(
                'required' => false,
                'label' => 'Event Type: ',
            ))
            // FIXME: set correct datetime type
            ->add('eventtime', 'datetime', array(
                'date_format' => 'yyyy-MM-dd  HH:mm',
                'format' => 'yyyy-MM-dd HH:mm',
                'widget' => 'choice',
                'required' => false,
                'label' => 'Event Time: ',
            ))
            ->add('cid_name', 'text', array(
                'required' => false,
                'label' => 'CallerID Name: ',
            ))
            ->add('cid_num', 'text', array(
                'required' => false,
                'label' => 'CallerID Number: ',
            ))
            ->add('cid_ani', 'text', array(
                'required' => false,
                'label' => 'Cid_Ani: ',
            ))
            ->add('cid_rdnis', 'text', array(
                'required' => false,
                'label' => 'Cid_Rdnis: ',
            ))
            ->add('cid_dnid', 'text', array(
                'required' => false,
                'label' => 'Cid_Dnid: ',
            ))
            ->add('exten', 'text', array(
                'required' => false,
                'label' => 'Extension: ',
            ))
            ->add('context', 'text', array(
                'required' => false,
                'label' => 'Context: ',
            ))
            ->add('channame', 'text', array(
                'required' => false,
                'label' => 'Channel Name: ',
            ))
            ->add('src', 'text', array(
                'required' => false,
                'label' => 'Source: ',
            ))
            ->add('dst', 'text', array(
                'required' => false,
                'label' => 'Destination: ',
            ))
            ->add('channel', 'text', array(
                'required' => false,
                'label' => 'Channel: ',
            ))
            ->add('dstchannel', 'text', array(
                'required' => false,
                'label' => 'Destination Channel: ',
            ))
            ->add('appname', 'text', array(
                'required' => false,
                'label' => 'Application Name: ',
            ))
            ->add('appdata', 'text', array(
                'required' => false,
                'label' => 'Application Data: ',
            ))
            ->add('amaflags', 'number', array(
                'required' => false,
                'label' => 'Amaflags: ',
            ))
            ->add('accountcode', 'text', array(
                'required' => false,
                'label' => 'Accountcode: ',
            ))
            ->add('uniqueid', 'text', array(
                'required' => false,
                'label' => 'UniqueID: ',
            ))
            ->add('linkedid', 'text', array(
                'required' => false,
                'label' => 'LinkedID: ',
            ))
            ->add('peer', 'text', array(
                'required' => false,
                'label' => 'Peer: ',
            ))
            ->add('userdeftype', 'text', array(
                'required' => false,
                'label' => 'Userdeftype: ',
            ))
            ->add('eventextra', 'text', array(
                'required' => false,
                'label' => 'Eventextra: ',
            ))
            ->add('userfield', 'text', array(
                'required' => false,
                'label' => 'Userfield: ',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cel'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_cel';
    }
}