<?php namespace synchrotalk\connector\objects;

/*
  Abstract social network object requiring every resource
  which this connector provide having unique identifier which allows to
  refer this resource in talk to social network servers
 */

class abstract_object
{
  public /* string */ $id;

  public function __construct($id = null)
  {
    $this->id = $id;
  }
}
