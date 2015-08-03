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
                'label' => 'ID: ',
            ))
            
            ->add('calldate_from', 'datetime', array(
                'mapped' => false,
                'required' => false,
                'label' => 'Call Date From: ',
                'date_format' => 'yyyy-MM-dd  HH:mm',
                // 'months' => array('01', '02', '03', '04', '05', '06',
                //     '07', '08', '09', '10', '11', '12'),
                'hours' => array('00', '01', '02', '03', '04', '05', '06',
                    '07', '08', '09', '10', '11', '12', '13', '14', '15',
                    '16', '17', '18', '19', '20', '21', '22', '23'),
                'minutes' => array('00', '01', '02', '03', '04', '05', '06',
                    '07', '08', '09', '10', '11', '12', '13', '14', '15',
                    '16', '17', '18', '19', '20', '21', '22', '23', '24',
                    '25', '26', '27', '28', '29', '30', '31', '32', '33',
                    '34', '35', '36', '37', '38', '39', '40', '41', '42',
                    '43', '44', '45', '46', '47', '48', '49', '50', '51',
                    '52', '53', '54', '55', '56', '57', '58', '59'),
                  'date_widget'=> 'single_text',
            ))

            ->add('calldate_to', 'datetime', array(
                'mapped' => false,
                'required' => false,
                'label' => 'Call Date To: ',
                'date_format' => 'yyyy-MM-dd  HH:mm',
                // 'months' => array('01', '02', '03', '04', '05', '06',
                //     '07', '08', '09', '10', '11', '12'),
                'hours' => array('00', '01', '02', '03', '04', '05', '06',
                    '07', '08', '09', '10', '11', '12', '13', '14', '15',
                    '16', '17', '18', '19', '20', '21', '22', '23'),
                'minutes' => array('00', '01', '02', '03', '04', '05', '06',
                    '07', '08', '09', '10', '11', '12', '13', '14', '15',
                    '16', '17', '18', '19', '20', '21', '22', '23', '24',
                    '25', '26', '27', '28', '29', '30', '31', '32', '33',
                    '34', '35', '36', '37', '38', '39', '40', '41', '42',
                    '43', '44', '45', '46', '47', '48', '49', '50', '51',
                    '52', '53', '54', '55', '56', '57', '58', '59'),
                'date_widget'=> 'single_text',
            ))
            
            ->add('uniqueid', null, array(
                'required' => false,
                'label' => 'uniqueid: ',
            ))
            ->add('accountcode', null, array(
                'required' => false,
                'label' => 'accountcode: ',
            ))
            ->add('src', null, array(
                'required' => false,
                'label' => 'src: ',
            ))
            ->add('dst', null, array(
                'required' => false,
                'label' => 'dst: ',
            ))
            ->add('dcontext', null, array(
                'required' => false,
                'label' => 'dcontext: ',
            ))
            ->add('clid', null, array(
                'required' => false,
                'label' => 'clid: ',
            ))
            ->add('channel', null, array(
                'required' => false,
                'label' => 'channel: ',
            ))
            ->add('dstchannel', null, array(
                'required' => false,
                'label' => 'dstchannel: ',
            ))
            ->add('lastapp', null, array(
                'required' => false,
                'label' => 'lastapp: ',
            ))
            ->add('lastdata', null, array(
                'required' => false,
                'label' => 'lastdata: ',
            ))
            ->add('duration', null, array(
                'required' => false,
                'label' => 'duration: ',
            ))
            ->add('billsec', null, array(
                'required' => false,
                'label' => 'billsec: ',
            ))
            ->add('disposition', null, array(
                'required' => false,
                'label' => 'disposition: ',
            ))
            ->add('amaflags', null, array(
                'required' => false,
                'label' => 'amaflags: ',
            ))
            ->add('userfield', null, array(
                'required' => false,
                'label' => 'userfield: ',
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