<?php

require_once('synchrotalk.plugin/plugin.php');

class connector implements plugin
{
  abstract public function log_in($username, $password);
  abstract public function sign_in($token);


  abstract public function send_message($to, $what);
  abstract public function fetch_messages($thread);
  abstract public function mark_read($thread);


  abstract public function threads();
  abstract public function contacts();
}
