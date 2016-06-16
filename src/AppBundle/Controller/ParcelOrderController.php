<?php
	namespace AppBundle\Controller;
	
	use FOS\RestBundle\Controller\FOSRestController;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	
	class ParcelOrderController extends FOSRestController
	{
		public function getParcelOrderAction($id)
		{
			
		    return $this->getDoctrine()->getRepository('AppBundle:ParcelOrder')
            ->findAll();
    	}

    public function getParcelorderAction($id)
    {
        return $this->getDoctrine()->getRepository('AppBundle:ParcelOrder')
            ->find($id);
    }
	}