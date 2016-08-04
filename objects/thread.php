<?php namespace synchrotalk\connector\objects;

/*
  Thread aiming to represent single chat board. It could be personal messages, comments
    under content, user newsfeed, profile wall page, etc.

  Thread could support nested messages via message attachments, but it's not welcomed.
  It is just not designed for that. Make your own object, if i lacking this functionality.
 */

require_once('object.php');
require_once('message.php');
require_once('owner.php');

class thread extends object
{
  public /* string */ $title;

  public /* owner[] */ $users;

  public /* bool */ $is_muted;

  public /* message[] */ $last_messages;
}
