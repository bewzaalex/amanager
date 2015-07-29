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
        // if ($request->isMethod('POST')) {
        //     $search = $request->request->all();
            
        //     $repository = $this->getDoctrine()
        //         ->getRepository('AppBundle:Cel');
            
        //     $query = $repository->createQueryBuilder('event');

        //     if ($search['cel_search']['id'] != "") {
        //         $query->andWhere('event.id like :id')
        //             ->setParameter('id', '%'.$search['cel_search']['id'].'%');
        //     }

        //     if ($search['cel_search']['eventtype'] != "") {
        //         $query->andWhere('event.eventtype like :eventtype')
        //             ->setParameter('eventtype', '%'.$search['cel_search']['eventtype'].'%');
        //     }

        //     // FIXME: DateTime format in CelSearchType
        //     $EventTimeFrom = "";
        //     if ($search['cel_search']['eventtime']['date']['year'] != "") {
        //         $EventTimeFrom .= $search['cel_search']['eventtime']['date']['year'];
        //     } else {
        //         $EventTimeFrom .= '%';
        //     }
        //     if ($search['cel_search']['eventtime']['date']['month'] != "") {
        //         $EventTimeFrom .= '-'.$search['cel_search']['eventtime']['date']['month'];
        //     } else {
        //         $EventTimeFrom .= '-%';
        //     }
        //     if ($search['cel_search']['eventtime']['date']['day'] != "") {
        //         $EventTimeFrom .= '-'.$search['cel_search']['eventtime']['date']['day'];
        //     } else {
        //         $EventTimeFrom .= '-%';
        //     }
        //     if ($search['cel_search']['eventtime']['time']['hour'] != "") {
        //         $EventTimeFrom .= ' '.$search['cel_search']['eventtime']['time']['hour'];
        //     } else {
        //         $EventTimeFrom .= ' %';
        //     }
        //     if ($search['cel_search']['eventtime']['time']['minute'] != "") {
        //         $EventTimeFrom .= ':'.$search['cel_search']['eventtime']['time']['minute'];
        //     } else {
        //         $EventTimeFrom .= ':%';
        //     }
        //     $EventTimeFrom .= '%';


        //     if ($search['cel_search']['eventtime'] != "") {
        //         $query->andWhere('event.eventtime like :eventtime')
        //             ->setParameter('eventtime', $EventTimeFrom);
        //     }

        //     if ($search['cel_search']['cid_name'] != "") {
        //         $query->andWhere('event.cid_name like :cid_name')
        //             ->setParameter('cid_name', '%'.$search['cel_search']['cid_name'].'%');
        //     }

        //     if ($search['cel_search']['cid_num'] != "") {
        //         $query->andWhere('event.cid_num like :cid_num')
        //             ->setParameter('cid_num', '%'.$search['cel_search']['cid_num'].'%');
        //     }

        //     if ($search['cel_search']['cid_ani'] != "") {
        //         $query->andWhere('event.cid_ani like :cid_ani')
        //             ->setParameter('cid_ani', '%'.$search['cel_search']['cid_ani'].'%');
        //     }

        //     if ($search['cel_search']['cid_rdnis'] != "") {
        //         $query->andWhere('event.cid_rdnis like :cid_rdnis')
        //             ->setParameter('cid_rdnis', '%'.$search['cel_search']['cid_rdnis'].'%');
        //     }

        //     if ($search['cel_search']['cid_dnid'] != "") {
        //         $query->andWhere('event.cid_dnid like :cid_dnid')
        //             ->setParameter('cid_dnid', '%'.$search['cel_search']['cid_dnid'].'%');
        //     }

        //     if ($search['cel_search']['exten'] != "") {
        //         $query->andWhere('event.exten like :exten')
        //             ->setParameter('exten', '%'.$search['cel_search']['exten'].'%');
        //     }

        //     if ($search['cel_search']['context'] != "") {
        //         $query->andWhere('event.context like :context')
        //             ->setParameter('context', '%'.$search['cel_search']['context'].'%');
        //     }

        //     if ($search['cel_search']['channame'] != "") {
        //         $query->andWhere('event.channame like :channame')
        //             ->setParameter('channame', '%'.$search['cel_search']['channame'].'%');
        //     }

        //     if ($search['cel_search']['src'] != "") {
        //         $query->andWhere('event.src like :src')
        //             ->setParameter('src', '%'.$search['cel_search']['src'].'%');
        //     }

        //     if ($search['cel_search']['dst'] != "") {
        //         $query->andWhere('event.dst like :dst')
        //             ->setParameter('dst', '%'.$search['cel_search']['dst'].'%');
        //     }

        //     if ($search['cel_search']['channel'] != "") {
        //         $query->andWhere('event.channel like :channel')
        //             ->setParameter('channel', '%'.$search['cel_search']['channel'].'%');
        //     }

        //     if ($search['cel_search']['dstchannel'] != "") {
        //         $query->andWhere('event.dstchannel like :dstchannel')
        //             ->setParameter('dstchannel', '%'.$search['cel_search']['dstchannel'].'%');
        //     }

        //     if ($search['cel_search']['appname'] != "") {
        //         $query->andWhere('event.appname like :appname')
        //             ->setParameter('appname', '%'.$search['cel_search']['appname'].'%');
        //     }

        //     if ($search['cel_search']['appdata'] != "") {
        //         $query->andWhere('event.appdata like :appdata')
        //             ->setParameter('appdata', '%'.$search['cel_search']['appdata'].'%');
        //     }

        //     if ($search['cel_search']['amaflags'] != "") {
        //         $query->andWhere('event.amaflags like :amaflags')
        //             ->setParameter('amaflags', '%'.$search['cel_search']['amaflags'].'%');
        //     }

        //     if ($search['cel_search']['accountcode'] != "") {
        //         $query->andWhere('event.accountcode like :accountcode')
        //             ->setParameter('accountcode', '%'.$search['cel_search']['accountcode'].'%');
        //     }

        //     if ($search['cel_search']['uniqueid'] != "") {
        //         $query->andWhere('event.uniqueid like :uniqueid')
        //             ->setParameter('uniqueid', '%'.$search['cel_search']['uniqueid'].'%');
        //     }

        //     if ($search['cel_search']['linkedid'] != "") {
        //         $query->andWhere('event.linkedid like :linkedid')
        //             ->setParameter('linkedid', '%'.$search['cel_search']['linkedid'].'%');
        //     }

        //     if ($search['cel_search']['peer'] != "") {
        //         $query->andWhere('event.peer like :peer')
        //             ->setParameter('peer', '%'.$search['cel_search']['peer'].'%');
        //     }

        //     if ($search['cel_search']['userdeftype'] != "") {
        //         $query->andWhere('event.userdeftype like :userdeftype')
        //             ->setParameter('userdeftype', '%'.$search['cel_search']['userdeftype'].'%');
        //     }

        //     if ($search['cel_search']['eventextra'] != "") {
        //         $query->andWhere('event.eventextra like :eventextra')
        //             ->setParameter('eventextra', '%'.$search['cel_search']['eventextra'].'%');
        //     }

        //     if ($search['cel_search']['userfield'] != "") {
        //         $query->andWhere('event.userfield like :userfield')
        //             ->setParameter('userfield', '%'.$search['cel_search']['userfield'].'%');
        //     }
        // }

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
            'action' => $this->generateUrl('cel_result'),
            'method' => 'GET',
        ));
        $form->add('search', 'submit', array('label' => 'Search'));

        return array(
            'form' => $form->createView(),
        );
    }

    /**
    * Display search result
    * 
    * @Route("/result", name="cel_result")
    * @Template()
    */
    public function resultAction(Request $request)
    {
        // $em = $this->getDoctrine()->getManager();

        $search = $request->query->all();

        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Cel');
            
        $query = $repository->createQueryBuilder('event');

        if (isset($search['cel_search'])) {
            if ($search['cel_search']['id'] != "") {
                $query->andWhere('event.id like :id')
                    ->setParameter('id', '%'.$search['cel_search']['id'].'%');
            }

            if ($search['cel_search']['eventtype'] != "") {
                $query->andWhere('event.eventtype like :eventtype')
                    ->setParameter('eventtype', '%'.$search['cel_search']['eventtype'].'%');
            }

            /*
            * Event Time
            * FIXME: Add check for eventtime_from, date, time...
            * FIXME: Add EventTimeTo
            */
            $EventTimeFrom = "";
            $EventTimeTo = "";
            if ($search['cel_search']['eventtime_from'] != "") {
                if ($search['cel_search']['eventtime_from']['date'] != "") {
                    if ($search['cel_search']['eventtime_from']['date']['year'] != "") {
                        $EventTimeFrom .= $search['cel_search']['eventtime_from']['date']['year'];
                    } else {
                        $EventTimeFrom .= '%';
                    }
                    if ($search['cel_search']['eventtime_from']['date']['month'] != "") {
                        $EventTimeFrom .= '-'.$search['cel_search']['eventtime_from']['date']['month'];
                    } else {
                        $EventTimeFrom .= '-%';
                    }
                    if ($search['cel_search']['eventtime_from']['date']['day'] != "") {
                        $EventTimeFrom .= '-'.$search['cel_search']['eventtime_from']['date']['day'];
                    } else {
                        $EventTimeFrom .= '-%';
                    }
                    if ($search['cel_search']['eventtime_from']['time']['hour'] != "") {
                        $EventTimeFrom .= ' '.$search['cel_search']['eventtime']['time']['hour'];
                    } else {
                        $EventTimeFrom .= ' %';
                    }
                    if ($search['cel_search']['eventtime_from']['time']['minute'] != "") {
                        $EventTimeFrom .= ':'.$search['cel_search']['eventtime_from']['time']['minute'];
                    } else {
                        $EventTimeFrom .= ':%';
                    }
                    $EventTimeFrom .= '%';
                }
                $query->andWhere('event.eventtime like :eventtime')
                    ->setParameter('eventtime', $EventTimeFrom);
            }

            
            if ($search['cel_search']['cid_name'] != "") {
                $query->andWhere('event.cid_name like :cid_name')
                    ->setParameter('cid_name', '%'.$search['cel_search']['cid_name'].'%');
            }

            if ($search['cel_search']['cid_num'] != "") {
                $query->andWhere('event.cid_num like :cid_num')
                    ->setParameter('cid_num', '%'.$search['cel_search']['cid_num'].'%');
            }

            if ($search['cel_search']['cid_ani'] != "") {
                $query->andWhere('event.cid_ani like :cid_ani')
                    ->setParameter('cid_ani', '%'.$search['cel_search']['cid_ani'].'%');
            }

            if ($search['cel_search']['cid_rdnis'] != "") {
                $query->andWhere('event.cid_rdnis like :cid_rdnis')
                    ->setParameter('cid_rdnis', '%'.$search['cel_search']['cid_rdnis'].'%');
            }

            if ($search['cel_search']['cid_dnid'] != "") {
                $query->andWhere('event.cid_dnid like :cid_dnid')
                    ->setParameter('cid_dnid', '%'.$search['cel_search']['cid_dnid'].'%');
            }

            if ($search['cel_search']['exten'] != "") {
                $query->andWhere('event.exten like :exten')
                    ->setParameter('exten', '%'.$search['cel_search']['exten'].'%');
            }

            if ($search['cel_search']['context'] != "") {
                $query->andWhere('event.context like :context')
                    ->setParameter('context', '%'.$search['cel_search']['context'].'%');
            }

            if ($search['cel_search']['channame'] != "") {
                $query->andWhere('event.channame like :channame')
                    ->setParameter('channame', '%'.$search['cel_search']['channame'].'%');
            }

            if ($search['cel_search']['src'] != "") {
                $query->andWhere('event.src like :src')
                    ->setParameter('src', '%'.$search['cel_search']['src'].'%');
            }

            if ($search['cel_search']['dst'] != "") {
                $query->andWhere('event.dst like :dst')
                    ->setParameter('dst', '%'.$search['cel_search']['dst'].'%');
            }

            if ($search['cel_search']['channel'] != "") {
                $query->andWhere('event.channel like :channel')
                    ->setParameter('channel', '%'.$search['cel_search']['channel'].'%');
            }

            if ($search['cel_search']['dstchannel'] != "") {
                $query->andWhere('event.dstchannel like :dstchannel')
                    ->setParameter('dstchannel', '%'.$search['cel_search']['dstchannel'].'%');
            }

            if ($search['cel_search']['appname'] != "") {
                $query->andWhere('event.appname like :appname')
                    ->setParameter('appname', '%'.$search['cel_search']['appname'].'%');
            }

            if ($search['cel_search']['appdata'] != "") {
                $query->andWhere('event.appdata like :appdata')
                    ->setParameter('appdata', '%'.$search['cel_search']['appdata'].'%');
            }

            if ($search['cel_search']['amaflags'] != "") {
                $query->andWhere('event.amaflags like :amaflags')
                    ->setParameter('amaflags', '%'.$search['cel_search']['amaflags'].'%');
            }

            if ($search['cel_search']['accountcode'] != "") {
                $query->andWhere('event.accountcode like :accountcode')
                    ->setParameter('accountcode', '%'.$search['cel_search']['accountcode'].'%');
            }

            if ($search['cel_search']['uniqueid'] != "") {
                $query->andWhere('event.uniqueid like :uniqueid')
                    ->setParameter('uniqueid', '%'.$search['cel_search']['uniqueid'].'%');
            }

            if ($search['cel_search']['linkedid'] != "") {
                $query->andWhere('event.linkedid like :linkedid')
                    ->setParameter('linkedid', '%'.$search['cel_search']['linkedid'].'%');
            }

            if ($search['cel_search']['peer'] != "") {
                $query->andWhere('event.peer like :peer')
                    ->setParameter('peer', '%'.$search['cel_search']['peer'].'%');
            }

            if ($search['cel_search']['userdeftype'] != "") {
                $query->andWhere('event.userdeftype like :userdeftype')
                    ->setParameter('userdeftype', '%'.$search['cel_search']['userdeftype'].'%');
            }

            if ($search['cel_search']['eventextra'] != "") {
                $query->andWhere('event.eventextra like :eventextra')
                    ->setParameter('eventextra', '%'.$search['cel_search']['eventextra'].'%');
            }

            if ($search['cel_search']['userfield'] != "") {
                $query->andWhere('event.userfield like :userfield')
                    ->setParameter('userfield', '%'.$search['cel_search']['userfield'].'%');
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
}
