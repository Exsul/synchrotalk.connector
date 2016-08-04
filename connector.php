<?php namespace synchrotalk\connector

require_once('synchrotalk.plugin/plugin.php');
require_once('objects/thread.php');
require_once('objects/notification.php');

abstract class connector implements plugin
{
  abstract public /* user */ function sign_in(/* auth or token */ $auth);

  public /* notification[] */ function notifications()
  {}
  public /* user[] */ function contacts()
  {}
  abstract public /* thread[] */ function threads();
  abstract public /* message[] */ function messages( /* string */ $thread_id, /* int */ $skip_pages = 0);


  public /* object */ function message_mark_read( /* string */ $thread_id)
  {}

  public /* object */ function message_send_first( /* user_id */ $to,  /* string or message */ $what )
  {
    return $this->message_send($to, $what);
  }

  abstract public /* object */ function message_send(/* thread_id */ $to, /* string or message */ $what);

  public /* user[] */ function users( /* user_id[] */ $userids )
  {
    $ret = [];
    foreach ($userids as $userid)
      $ret[] = $this->user($userid);

    return $ret;
  }
  abstract public /* user */ function user( /* user_id */ $userid);
  abstract public /* string */ function nickname_to_userid( /* string */ $nickname );
  public /* thread */ function userid_to_thread( /* string */ $user_ref )
  {
    $user_id = $this->nickname_to_userid($nickname);

    foreach ($this->threads() as $thread)
      foreach ($thread->users as $user)
        if ($user->id == $user_id)
          return $thread;
  }
}
