<?php

class order
{
public $order_status;
public function createOrder()
{
//Apply logic to create order
$this->order_status = 'Order Created';
return $this;
}
public function sendOrderEmail()
{
//Apply logic for sending email to order
$this->order_status = 'Email Sent';
return $this;
}
public function createShipment()
{
//Apply logic for creating shipment
$this->order_status = 'Shipment Create';
return $this;
}
}

$order1=new order();
echo $order1->createOrder()->sendOrderEmail();
?>