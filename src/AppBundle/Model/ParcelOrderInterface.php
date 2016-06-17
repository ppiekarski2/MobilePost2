<?php
namespace AppBundle\Model;

interface ParcelOrderInterface
{
	public function setParcel(\AppBundle\Entity\Parcel $parcel);
	public function getParcel();
	public function setSender(\AppBundle\Entity\AddressData $sender);
	public function getSender();
	public function setReceiver(\AppBundle\Entity\AddressData $receiver);
	public function getReceiver();
	public function getId();
	public function setTracking($tracking);
	public function getTracking();
}
