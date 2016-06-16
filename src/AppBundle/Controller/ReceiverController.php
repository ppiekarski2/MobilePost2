<?php
namespace AppBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
class ReceiverController extends FOSRestController {
	
	public function getReceiversAction()
	{
		$orders=$this->getDoctrine()->getRepository('AppBundle:ParcelOrder')->findAll();
		foreach($orders as $order)
		{
			$receivers[]=$this->getDoctrine()->getRepository('AppBundle:AddressData')->find($order->getReceiver()->getId());
		}
		return $receivers;
	}
	
	public function getReceiverAction($id)
	{
		$receiver=$this->getDoctrine()->getRepository('AppBundle:AddressData')->find($id);
		return $receiver;
	}
}