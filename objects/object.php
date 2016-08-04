<?php namespace synchrotalk\connector\objects;

/*
  Object represents single instance of content (profile/message/image/video)
 */

require_once('abstract_object.php');
require_once('owner.php');
require_once('timestamp.php');

class object extends abstract_object
{
  public /* owner */ $owner;
  public /* timestamp */ $created, $updated;
}
