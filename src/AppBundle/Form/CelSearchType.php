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
                'label' => 'ID: ',
            ))
            ->add('eventtype', 'text', array(
                'required' => false,
                'label' => 'Event Type: ',
            ))

            ->add('eventtime_from', 'datetime', array(
                'mapped' => false,
                'required' => false,
                'label' => 'Event Time From: ',
                'date_format' => 'yyyy-MM-dd  HH:mm',
                'months' => array('01', '02', '03', '04', '05', '06',
                    '07', '08', '09', '10', '11', '12'),
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
            ))

            ->add('eventtime_to', 'datetime', array(
                'mapped' => false,
                'required' => false,
                'label' => 'Event Time To: ',
                'date_format' => 'yyyy-MM-dd  HH:mm',
                'months' => array('01', '02', '03', '04', '05', '06',
                    '07', '08', '09', '10', '11', '12'),
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
            ))
            
            // ->add('eventtime', null, array(
            //     'date_format' => 'yyyy-MM-dd  HH:mm',
            //     'months' => array('01', '02', '03', '04', '05', '06',
            //         '07', '08', '09', '10', '11', '12'),
            //     'hours' => array('00', '01', '02', '03', '04', '05', '06',
            //         '07', '08', '09', '10', '11', '12', '13', '14', '15',
            //         '16', '17', '18', '19', '20', '21', '22', '23'),
            //     'minutes' => array('00', '01', '02', '03', '04', '05', '06',
            //         '07', '08', '09', '10', '11', '12', '13', '14', '15',
            //         '16', '17', '18', '19', '20', '21', '22', '23', '24',
            //         '25', '26', '27', '28', '29', '30', '31', '32', '33',
            //         '34', '35', '36', '37', '38', '39', '40', '41', '42',
            //         '43', '44', '45', '46', '47', '48', '49', '50', '51',
            //         '52', '53', '54', '55', '56', '57', '58', '59'),
            //     'required' => false,
            //     'label' => 'Event Time: ',
            // ))
            ->add('cid_name', null, array(
                'required' => false,
                'label' => 'CallerID Name: ',
            ))
            ->add('cid_num', null, array(
                'required' => false,
                'label' => 'CallerID Number: ',
            ))
            ->add('cid_ani', null, array(
                'required' => false,
                'label' => 'CallerID ANI: ',
            ))
            ->add('cid_rdnis', null, array(
                'required' => false,
                'label' => 'CallerID RDNIS: ',
            ))
            ->add('cid_dnid', null, array(
                'required' => false,
                'label' => 'CallerID DNID: ',
            ))
            ->add('exten', null, array(
                'required' => false,
                'label' => 'Extension: ',
            ))
            ->add('context', null, array(
                'required' => false,
                'label' => 'Context: ',
            ))
            ->add('channame', null, array(
                'required' => false,
                'label' => 'Channel Name: ',
            ))
            ->add('src', null, array(
                'required' => false,
                'label' => 'Source: ',
            ))
            ->add('dst', null, array(
                'required' => false,
                'label' => 'Destination: ',
            ))
            ->add('channel', null, array(
                'required' => false,
                'label' => 'Channel: ',
            ))
            ->add('dstchannel', null, array(
                'required' => false,
                'label' => 'Destination Channel: ',
            ))
            ->add('appname', null, array(
                'required' => false,
                'label' => 'Application Name: ',
            ))
            ->add('appdata', null, array(
                'required' => false,
                'label' => 'Application Data: ',
            ))
            ->add('amaflags', null, array(
                'required' => false,
                'label' => 'Amaflags: ',
            ))
            ->add('accountcode', null, array(
                'required' => false,
                'label' => 'Accountcode: ',
            ))
            ->add('uniqueid', null, array(
                'required' => false,
                'label' => 'UniqueID: ',
            ))
            ->add('linkedid', null, array(
                'required' => false,
                'label' => 'LinkedID: ',
            ))
            ->add('peer', null, array(
                'required' => false,
                'label' => 'Peer: ',
            ))
            ->add('userdeftype', null, array(
                'required' => false,
                'label' => 'Userdeftype: ',
            ))
            ->add('eventextra', null, array(
                'required' => false,
                'label' => 'Eventextra: ',
            ))
            ->add('userfield', null, array(
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
        return 'cel_search';
    }
}