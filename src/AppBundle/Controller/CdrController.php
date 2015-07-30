<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cdr;

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
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // $entities = $em->getRepository('AppBundle:Cdr')->findAll();
        $entities = $em->createQuery("SELECT call FROM AppBundle:Cdr call");

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $entities,
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/,
            array('defaultSortFieldName' => 'call.id', 'defaultSortDirection' => 'desc')
        );

        return array(
            'pagination' => $pagination,
            'timezone' => 'Etc/GMT-6',
            'request' => $request,
        );
    }

    /**
     * Finds and displays a Cdr entity.
     *
     * @Route("/{id}", name="cdr_show")
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
            'entity'      => $entity,
        );
    }
}
