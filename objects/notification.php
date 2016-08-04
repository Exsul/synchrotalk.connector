<?php namespace synchrotalk\connector\objects;

/*
  Notification is object referencing to some event happened in the past

  This part is not designed well, advices are welcomed
 */

require_once('user.php');
require_once('message.php');

class notification extends object
{
  public /* optional string */ $thread_id;
  public /* optional message */ $message;

  public /* optional user */ $friend_request;

  public /* optional string */ $extra_string;
}
