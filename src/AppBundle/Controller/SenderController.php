<?php
namespace AppBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
class SenderController extends FOSRestController {
	
	public function getSenderAction($id)
	{
		$sender=$this->getDoctrine()->getRepository('AppBundle:AddressData')->find($id);
		return $sender;
	}
	
	public function getSendersAction()
	{
		$orders=$this->getDoctrine()->getRepository('AppBundle:ParcelOrder')->findAll();
		foreach($order as $orders)
		{
			$senders[]=$orders->getSender();
		}
		return $senders;
	}
	
}