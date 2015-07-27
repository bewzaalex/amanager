<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cel;
use AppBundle\Form\CelSearchType;

/**
 * Cel controller.
 *
 * @Route("/cel")
 */
class CelController extends Controller
{

    /**
     * Lists all Cel entities.
     *
     * @Route("/", name="cel")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        // Standart action (on GET method)
        if ($request->isMethod('GET')) {
            $query = $em->createQuery("SELECT event FROM AppBundle:Cel event");
        }

        // Search action (on POST method)
        if ($request->isMethod('POST')) {
            $search = $request->request->all();
            
            $repository = $this->getDoctrine()
                ->getRepository('AppBundle:Cel');
            
            $query = $repository->createQueryBuilder('event');

            if ($search['appbundle_cel']['id'] != "") {
                $query->andWhere('event.id like :id')->setParameter('id', '%'.$search['appbundle_cel']['id'].'%');
            }

            if ($search['appbundle_cel']['uniqueid'] != "") {
                $query->andWhere('event.uniqueid = :uniqueid')->setParameter('uniqueid', $search['appbundle_cel']['uniqueid']);
            }

            // $query = $em->createQuery(
            //     'SELECT event
            //     FROM AppBundle:Cel event
            //     WHERE event.id LIKE :id
            //     OR event.eventtype LIKE :eventtype
            //     OR event.eventtime LIKE :eventtime
            //     OR event.cid_name LIKE :cid_name
            //     OR event.cid_num LIKE :cid_num
            //     OR event.cid_ani LIKE :cid_ani
            //     OR event.cid_rdnis LIKE :cid_rdnis
            //     OR event.cid_dnid LIKE :cid_dnid
            //     OR event.exten LIKE :exten
            //     OR event.context LIKE :context
            //     OR event.channame LIKE :channame
            //     OR event.src LIKE :src
            //     OR event.dst LIKE :dst
            //     OR event.channel LIKE :channel
            //     OR event.dstchannel LIKE :dstchannel
            //     OR event.appname LIKE :appname
            //     OR event.appdata LIKE :appdata
            //     OR event.amaflags LIKE :amaflags
            //     OR event.accountcode LIKE :accountcode
            //     OR event.uniqueid LIKE :uniqueid
            //     OR event.linkedid LIKE :linkedid
            //     OR event.peer LIKE :peer
            //     OR event.userdeftype LIKE :userdeftype
            //     OR event.eventextra LIKE :eventextra
            //     OR event.userfield LIKE :userfield')
            //     ->setParameter('id', $search['appbundle_cel']['id'])
            //     ->setParameter('eventtype', $search['appbundle_cel']['eventtype'])
            //     ->setParameter('eventtime', $search['appbundle_cel']['eventtime'])
            //     ->setParameter('cid_name', $search['appbundle_cel']['cid_name'])
            //     ->setParameter('cid_num', $search['appbundle_cel']['cid_num'])
            //     ->setParameter('cid_ani', $search['appbundle_cel']['cid_ani'])
            //     ->setParameter('cid_rdnis', $search['appbundle_cel']['cid_rdnis'])
            //     ->setParameter('cid_dnid', $search['appbundle_cel']['cid_dnid'])
            //     ->setParameter('exten', $search['appbundle_cel']['exten'])
            //     ->setParameter('context', $search['appbundle_cel']['context'])
            //     ->setParameter('channame', $search['appbundle_cel']['channame'])
            //     ->setParameter('src', $search['appbundle_cel']['src'])
            //     ->setParameter('dst', $search['appbundle_cel']['dst'])
            //     ->setParameter('channel', $search['appbundle_cel']['channel'])
            //     ->setParameter('dstchannel', $search['appbundle_cel']['dstchannel'])
            //     ->setParameter('appname', $search['appbundle_cel']['appname'])
            //     ->setParameter('appdata', $search['appbundle_cel']['appdata'])
            //     ->setParameter('amaflags', $search['appbundle_cel']['amaflags'])
            //     ->setParameter('accountcode', $search['appbundle_cel']['accountcode'])
            //     ->setParameter('uniqueid', $search['appbundle_cel']['uniqueid'])
            //     ->setParameter('linkedid', $search['appbundle_cel']['linkedid'])
            //     ->setParameter('peer', $search['appbundle_cel']['peer'])
            //     ->setParameter('userdeftype', $search['appbundle_cel']['userdeftype'])
            //     ->setParameter('eventextra', $search['appbundle_cel']['eventextra'])
            //     ->setParameter('userfield', $search['appbundle_cel']['userfield'])
            // ;
        }
        

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return array(
            'pagination' => $pagination,
            'request' => $request,
        );
    }

    /**
     * Finds and displays a Cel entity.
     *
     * @Route("/{id}", name="cel_show", requirements={ "id": "\d+" })
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Cel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cel entity.');
        }

        return array(
            'entity' => $entity,
        );
    }

    /**
    * Search for events
    * 
    * @Route("/search", name="cel_search")
    * @Method("GET")
    * @Template()
    */
    public function searchAction(Request $request)
    {
        $entity = new Cel;
        
        $form = $this->createForm(new CelSearchType(), $entity, array(
            'action' => $this->generateUrl('cel'),
        ));
        $form->add('search', 'submit', array('label' => 'Search'));

        return array(
            'form' => $form->createView(),
        );
    }
}
