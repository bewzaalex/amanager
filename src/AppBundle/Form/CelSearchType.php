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
            ->add('id', 'number', array('required' => false))
            ->add('eventtype', 'text', array('required' => false))
            ->add('eventtime', 'datetime', array(
                
                'input'  => 'timestamp',
                'widget' => 'choice',
                'required' => false,
            ))
            ->add('cid_name', 'text', array('required' => false))
            ->add('cid_num', 'text', array('required' => false))
            ->add('cid_ani', 'text', array('required' => false))
            ->add('cid_rdnis', 'text', array('required' => false))
            ->add('cid_dnid', 'text', array('required' => false))
            ->add('exten', 'text', array('required' => false))
            ->add('context', 'text', array('required' => false))
            ->add('channame', 'text', array('required' => false))
            ->add('src', 'text', array('required' => false))
            ->add('dst', 'text', array('required' => false))
            ->add('channel', 'text', array('required' => false))
            ->add('dstchannel', 'text', array('required' => false))
            ->add('appname', 'text', array('required' => false))
            ->add('appdata', 'text', array('required' => false))
            ->add('amaflags', 'number', array('required' => false))
            ->add('accountcode', 'text', array('required' => false))
            ->add('uniqueid', 'text', array('required' => false))
            ->add('linkedid', 'text', array('required' => false))
            ->add('peer', 'text', array('required' => false))
            ->add('userdeftype', 'text', array('required' => false))
            ->add('eventextra', 'text', array('required' => false))
            ->add('userfield', 'text', array('required' => false))
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
