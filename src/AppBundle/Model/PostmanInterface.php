<?php

namespace AppBundle\Model;

interface PostmanInterface
{
    public function setPhone($phone);
    public function getPhone();
    public function setEmail($email);
    public function getEmail();
    public function setCity($city);
    public function getCity();
}