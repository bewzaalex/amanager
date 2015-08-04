<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cdr;
use AppBundle\Form\CdrSearchType;

/**
 * Cdr controller.
 *
 * @Route("/cdr")
 */
class CdrController extends Controller
{

    /**
     * Lists all Cdr entities.
     *
     * @Route("/", name="cdr")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request, $ItemsPerPage=10)
    {
        $em = $this->getDoctrine()->getManager();

        // $entities = $em->getRepository('AppBundle:Cdr')->findAll();
        $entities = $em->createQuery("SELECT call FROM AppBundle:Cdr call");

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $entities,
            $request->query->getInt('page', 1)/*page number*/,
            $ItemsPerPage,
            array('defaultSortFieldName' => 'call.calldate', 'defaultSortDirection' => 'desc')
        );

        return array(
            'pagination' => $pagination,
            'timezone' => 'Etc/GMT-6',
            'ItemsPerPage' => $ItemsPerPage

        );
    }

    /**
     * Finds and displays a Cdr entity.
     *
     * @Route("/{id}", name="cdr_show", requirements={ "id": "\d+" })
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Cdr')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cdr entity.');
        }

        return array(
            'entity' => $entity,
        );
    }

    /**
     * Search for calls
     * 
     * @Route("/search", name="cdr_search")
     * @Method("GET")
     * @Template()
     */
    public function searchAction(Request $request)
    {
        $entity = new Cdr();
        
        $form = $this->createForm(new CdrSearchType(), $entity, array(
            'action' => $this->generateUrl('cdr_result'),
            'method' => 'GET',
        ));
        $form->add('search', 'submit', array('label' => 'Search'));
        $form->add('reset', 'reset', array('label' => 'Reset'));

        return array(
            'form' => $form->createView(),
        );
    }

    /**
    * Display search result
    * 
    * @Route("/result", name="cdr_result")
    * @Template()
    */
    public function resultAction(Request $request, $ItemsPerPage=10)
    {
        $search = $request->query->all();

        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Cdr');
            
        $query = $repository->createQueryBuilder('call');

        if (isset($search['cdr_search'])) {

            /**
             * ID
             */
            if ($search['cdr_search']['id'] != "") {
                $query->andWhere('call.id like :id')
                    ->setParameter('id', '%'.$search['cdr_search']['id'].'%');
            }

            /*
            * Call Date
            */
            if ((
                    $search['cdr_search']['calldate_from'] != ""
                ) && (
                    $search['cdr_search']['calldate_to'] != ""
                )) {
                    $query->andWhere('call.calldate between :calldate_from and :calldate_to')
                    ->setParameter('calldate_from', $search['cdr_search']['calldate_from'].'%')
                    ->setParameter('calldate_to', $search['cdr_search']['calldate_to'].'%');
            } elseif (
                    $search['cdr_search']['calldate_from'] != ""
                ) {
                    $query->andWhere('call.calldate > :calldate_from')
                    ->setParameter('calldate_from', $search['cdr_search']['calldate_from'].'%');
            } elseif (
                    $search['cdr_search']['calldate_to'] != ""
                ) {
                    $query->andWhere('call.calldate < :calldate_to')
                    ->setParameter('calldate_to', $search['cdr_search']['calldate_to'].'%');
            }

            /**
             * uniqueid
             */
            if ($search['cdr_search']['uniqueid'] != "") {
                $query->andWhere('call.uniqueid like :uniqueid')
                    ->setParameter('uniqueid', '%'.$search['cdr_search']['uniqueid'].'%');
            }

            /**
             * accountcode
             */
            if ($search['cdr_search']['accountcode'] != "") {
                $query->andWhere('call.accountcode like :accountcode')
                    ->setParameter('accountcode', '%'.$search['cdr_search']['accountcode'].'%');
            }

            /**
             * src
             */
            if ($search['cdr_search']['src'] != "") {
                $query->andWhere('call.src like :src')
                    ->setParameter('src', '%'.$search['cdr_search']['src'].'%');
            }

            /**
             * dst
             */
            if ($search['cdr_search']['dst'] != "") {
                $query->andWhere('call.dst like :dst')
                    ->setParameter('dst', '%'.$search['cdr_search']['dst'].'%');
            }

            /**
             * dcontext
             */
            if ($search['cdr_search']['dcontext'] != "") {
                $query->andWhere('call.dcontext like :dcontext')
                    ->setParameter('dcontext', '%'.$search['cdr_search']['dcontext'].'%');
            }

            /**
             * clid
             */
            if ($search['cdr_search']['clid'] != "") {
                $query->andWhere('call.clid like :clid')
                    ->setParameter('clid', '%'.$search['cdr_search']['clid'].'%');
            }

            /**
             * channel
             */
            if ($search['cdr_search']['channel'] != "") {
                $query->andWhere('call.channel like :channel')
                    ->setParameter('channel', '%'.$search['cdr_search']['channel'].'%');
            }

            /**
             * dstchannel
             */
            if ($search['cdr_search']['dstchannel'] != "") {
                $query->andWhere('call.dstchannel like :dstchannel')
                    ->setParameter('dstchannel', '%'.$search['cdr_search']['dstchannel'].'%');
            }

            /**
             * lastapp
             */
            if ($search['cdr_search']['lastapp'] != "") {
                $query->andWhere('call.lastapp like :lastapp')
                    ->setParameter('lastapp', '%'.$search['cdr_search']['lastapp'].'%');
            }

            /**
             * lastdata
             */
            if ($search['cdr_search']['lastdata'] != "") {
                $query->andWhere('call.lastdata like :lastdata')
                    ->setParameter('lastdata', '%'.$search['cdr_search']['lastdata'].'%');
            }

            /**
             * duration
             */
            if ($search['cdr_search']['duration'] != "") {
                $query->andWhere('call.duration like :duration')
                    ->setParameter('duration', '%'.$search['cdr_search']['duration'].'%');
            }

            /**
             * billsec
             */
            if ($search['cdr_search']['billsec'] != "") {
                $query->andWhere('call.billsec like :billsec')
                    ->setParameter('billsec', '%'.$search['cdr_search']['billsec'].'%');
            }

            /**
             * disposition
             */
            if ($search['cdr_search']['disposition'] != "") {
                $query->andWhere('call.disposition like :disposition')
                    ->setParameter('disposition', '%'.$search['cdr_search']['disposition'].'%');
            }

            /**
             * amaflags
             */
            if ($search['cdr_search']['amaflags'] != "") {
                $query->andWhere('call.amaflags like :amaflags')
                    ->setParameter('amaflags', '%'.$search['cdr_search']['amaflags'].'%');
            }

            /**
             * userfield
             */
            if ($search['cdr_search']['userfield'] != "") {
                $query->andWhere('call.userfield like :userfield')
                    ->setParameter('userfield', '%'.$search['cdr_search']['userfield'].'%');
            }
        }

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/,
            array('defaultSortFieldName' => 'call.calldate', 'defaultSortDirection' => 'desc')
        );

        return array(
            'pagination' => $pagination,
            'timezone' => 'Etc/GMT-6',
            'ItemsPerPage' => $ItemsPerPage
        );
    }
}
