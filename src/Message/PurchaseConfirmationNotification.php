<?php

namespace App\Message;


class PurchaseConfirmationNotification
{

  public function __construct(private object $order)
  {
    
  }

  // getter method
  public function getOrder(): object
  {
    return $this->order;
  }

}