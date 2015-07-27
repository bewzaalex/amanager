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
                $query->andWhere('event.id like :id')
                    ->setParameter('id', '%'.$search['appbundle_cel']['id'].'%');
            }

            if ($search['appbundle_cel']['eventtype'] != "") {
                $query->andWhere('event.eventtype like :eventtype')
                    ->setParameter('eventtype', '%'.$search['appbundle_cel']['eventtype'].'%');
            }

            // FIXME: DateTime format in CelSearchType
            // if ($search['appbundle_cel']['eventtime'] != "") {
            //     $query->andWhere('event.eventtime = :eventtime')
            //         ->setParameter('eventtime', $search['appbundle_cel']['eventtime']);
            // }

            if ($search['appbundle_cel']['cid_name'] != "") {
                $query->andWhere('event.cid_name like :cid_name')
                    ->setParameter('cid_name', '%'.$search['appbundle_cel']['cid_name'].'%');
            }

            if ($search['appbundle_cel']['cid_num'] != "") {
                $query->andWhere('event.cid_num like :cid_num')
                    ->setParameter('cid_num', '%'.$search['appbundle_cel']['cid_num'].'%');
            }

            if ($search['appbundle_cel']['cid_ani'] != "") {
                $query->andWhere('event.cid_ani like :cid_ani')
                    ->setParameter('cid_ani', '%'.$search['appbundle_cel']['cid_ani'].'%');
            }

            if ($search['appbundle_cel']['cid_rdnis'] != "") {
                $query->andWhere('event.cid_rdnis like :cid_rdnis')
                    ->setParameter('cid_rdnis', '%'.$search['appbundle_cel']['cid_rdnis'].'%');
            }

            if ($search['appbundle_cel']['cid_dnid'] != "") {
                $query->andWhere('event.cid_dnid like :cid_dnid')
                    ->setParameter('cid_dnid', '%'.$search['appbundle_cel']['cid_dnid'].'%');
            }

            if ($search['appbundle_cel']['exten'] != "") {
                $query->andWhere('event.exten like :exten')
                    ->setParameter('exten', '%'.$search['appbundle_cel']['exten'].'%');
            }

            if ($search['appbundle_cel']['context'] != "") {
                $query->andWhere('event.context like :context')
                    ->setParameter('context', '%'.$search['appbundle_cel']['context'].'%');
            }

            if ($search['appbundle_cel']['channame'] != "") {
                $query->andWhere('event.channame like :channame')
                    ->setParameter('channame', '%'.$search['appbundle_cel']['channame'].'%');
            }

            if ($search['appbundle_cel']['src'] != "") {
                $query->andWhere('event.src like :src')
                    ->setParameter('src', '%'.$search['appbundle_cel']['src'].'%');
            }

            if ($search['appbundle_cel']['dst'] != "") {
                $query->andWhere('event.dst like :dst')
                    ->setParameter('dst', '%'.$search['appbundle_cel']['dst'].'%');
            }

            if ($search['appbundle_cel']['channel'] != "") {
                $query->andWhere('event.channel like :channel')
                    ->setParameter('channel', '%'.$search['appbundle_cel']['channel'].'%');
            }

            if ($search['appbundle_cel']['dstchannel'] != "") {
                $query->andWhere('event.dstchannel like :dstchannel')
                    ->setParameter('dstchannel', '%'.$search['appbundle_cel']['dstchannel'].'%');
            }

            if ($search['appbundle_cel']['appname'] != "") {
                $query->andWhere('event.appname like :appname')
                    ->setParameter('appname', '%'.$search['appbundle_cel']['appname'].'%');
            }

            if ($search['appbundle_cel']['appdata'] != "") {
                $query->andWhere('event.appdata like :appdata')
                    ->setParameter('appdata', '%'.$search['appbundle_cel']['appdata'].'%');
            }

            if ($search['appbundle_cel']['amaflags'] != "") {
                $query->andWhere('event.amaflags like :amaflags')
                    ->setParameter('amaflags', '%'.$search['appbundle_cel']['amaflags'].'%');
            }

            if ($search['appbundle_cel']['accountcode'] != "") {
                $query->andWhere('event.accountcode like :accountcode')
                    ->setParameter('accountcode', '%'.$search['appbundle_cel']['accountcode'].'%');
            }

            if ($search['appbundle_cel']['uniqueid'] != "") {
                $query->andWhere('event.uniqueid like :uniqueid')
                    ->setParameter('uniqueid', '%'.$search['appbundle_cel']['uniqueid'].'%');
            }

            if ($search['appbundle_cel']['linkedid'] != "") {
                $query->andWhere('event.linkedid like :linkedid')
                    ->setParameter('linkedid', '%'.$search['appbundle_cel']['linkedid'].'%');
            }

            if ($search['appbundle_cel']['peer'] != "") {
                $query->andWhere('event.peer like :peer')
                    ->setParameter('peer', '%'.$search['appbundle_cel']['peer'].'%');
            }

            if ($search['appbundle_cel']['userdeftype'] != "") {
                $query->andWhere('event.userdeftype like :userdeftype')
                    ->setParameter('userdeftype', '%'.$search['appbundle_cel']['userdeftype'].'%');
            }

            if ($search['appbundle_cel']['eventextra'] != "") {
                $query->andWhere('event.eventextra like :eventextra')
                    ->setParameter('eventextra', '%'.$search['appbundle_cel']['eventextra'].'%');
            }

            if ($search['appbundle_cel']['userfield'] != "") {
                $query->andWhere('event.userfield like :userfield')
                    ->setParameter('userfield', '%'.$search['appbundle_cel']['userfield'].'%');
            }
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
