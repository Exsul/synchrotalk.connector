<?php namespace synchrotalk\connector

require_once('synchrotalk.plugin/plugin.php');

abstract class connector implements plugin
{
  public function __construct(/* auth or token */ $auth);

  abstract public /* notification[] */ function notifications();
  abstract public /* users[] */ function contacts();
  abstract public /* threads[] */ function threads();
  abstract public /* message[] */ function messages( /* string */ $thread_id, /* int */ $skip_pages = 0);


  abstract public /* object */ function message_mark_read( /* string */ $thread_id);
  abstract public /* object */ function message_send(/* thread_id */ $to, /* string or message */ $what);


  abstract public /* thread */ function userid_to_thread( /* string */ $user_id );
}
