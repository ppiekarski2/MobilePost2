namespace AppBundle\Model;

Interface ParcelOrderInterface
{
	public function setCity($city);
	public function getCity();
	public function setPostalCode($postalCode);
	public function getPostalCode();
	public function setStreet($street);
	public function getStreet();
	public function setUsername($username);
	public function getUsername();
	public function setPhone($phone);
	public function getPhone();
	public function setEmail($email);
	public function getEmail();
	public function setWeight($weight);
	public function getWeight();
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
