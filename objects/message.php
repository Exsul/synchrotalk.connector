<?php namespace synchrotalk\connector\objects;

/*
   Message is container of content. Personal chat, news-feed - everything consists of messages.
 */

require_once('owner.php');
require_once('attachement.php');

class message extends object
{
  public /* owner */ $author;

  public /* attachement[] */ $attachements;

  public /* string */ $text;
}
