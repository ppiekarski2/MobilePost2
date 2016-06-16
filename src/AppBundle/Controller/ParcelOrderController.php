<?php
	namespace AppBundle\Controller;
	
	use FOS\RestBundle\Controller\FOSRestController;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\COmponent\HttpKernel\Exception\NotFoundHttpException;
	
	class ParcelOrderController extends FOSRestController
	{
		public function getParcelOrderAction($id)
		{
			
		    return $this->getDoctrine()->getRepository('AppBundle:ParcelOrder')
            ->findAll();
    	}

    public function getParcelOrderAction($id)
    {
        return $this->getDoctrine()->getRepository('AppBundle:ParcelOrder')
            ->find($id);
    }
	
	public function postParcelOrderAction(Request $request)
	{
		try 
		{
			$newParcelOrder = $this->container->get('pai_rest.parcelorder_form.handler')->post($request->request->all());
			$routeOptions = array('id' => $newParcelOrder->getId(),'_format' => $request->get('_format'));
			return $this->routeRedirectView('api_1_get_parcelorder', $routeOptions,Response::HTTP_CREATED);
		}	 
		catch (InvalidFormException $exception) 
		{
			return array('form' => $exception->getForm());
		}
	}
	public function putParcelAction(Request $request, $id)
	{
		try 
		{
			$parcelorder = $this->getDoctrine()->getRepository('AppBundle:ParcelOrder')->find($id);
			if (!$parcelorder) 
			{
				$statusCode = Response::HTTP_CREATED;
				$parcelorder = $this->container->get('pai_rest.parcelorder_form.handler')->post($request->request->all());
			} 
			else 
			{
				$statusCode = Response::HTTP_NO_CONTENT;
				$parcelorder = $this->container->get('pai_rest.parcelorder_form.handler')->put($parcelorder,$request->request->all());
			}
			$routeOptions = array('id' => $parcelorder->getId(),'_format' => $request->get('_format'));
			return $this->routeRedirectView('api_1_get_parcelorder',$routeOptions,$statusCode);
		} 
		catch (InvalidFormException $exception) 
		{
			return $exception->getForm();
		}
	}
	public function deleteParcelOrderAction(Request $request, $id) 
	{
		$parcelorder = $this->getDoctrine()->getRepository('AppBundle:ParcelOrder')->find($id);
		if ($parcelorder)
		{
			$this->getDoctrine()->getRepository('AppBundle:ParcelOrder')->delete($parcelorder);
		}
		else
		{
			throw new NotFoundHttpException(sprintf('The resource \'%s\' was not found.', $id));
		}
	}
	
	}