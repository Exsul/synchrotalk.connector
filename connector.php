<?php

require_once('synchrotalk.plugin/plugin.php');

abstract class connector implements plugin
{
  abstract public /* user */ function log_in( /* string */ $username, /* string */ $password);
  abstract public /* user */ function sign_in( /* string */ $token);


  abstract public /* object */ function send_message(/* thread_id */ $to, /* string or message */ $what);
  abstract public /* thread */ function userid_to_thread( /* string */ $user_id );

  abstract public /* message[] */ function fetch_messages( /* string */ $thread_id, /* int */ $skip_pages = 0);
  abstract public /* object */ function mark_read( /* string */ $thread_id);


  abstract public /* threads[] */ function threads();
  abstract public /* users[] */ function contacts();
}
