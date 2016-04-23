<?php

require_once('synchrotalk.plugin/plugin.php');

class connector implements plugin
{
  abstract public log_in($username, $password);
  abstract public sign_in($token);


  abstract public send_message($to, $what);
  abstract public fetch_messages($thread);
  abstract public mark_read($thread);


  abstract public threads();
  abstract public contacts();
}
