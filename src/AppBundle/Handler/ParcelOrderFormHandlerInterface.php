<?php
namespace AppBundle\Handler;
use AppBundle\Model\ParcelOrderInterface;
Interface ParcelFormHandlerInterface
{
	public function post(array $parameters);
	public function put(ParcelOrderInterface $parcelorder, array $parameters);
}
