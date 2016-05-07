<?php
class Plan extends Spectrix
{
  public $id;
  public $name;
  public $subplans;
  
  function __construct($plan)
  {
    $this->id = (integer) $plan->attributes()->id;
    $this->name = (string) $plan->Name;
    $this->short_description = (string) $plan->Description;
  }
}