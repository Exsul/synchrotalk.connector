<?php namespace synchrotalk\connector\objects;

/*
   Attachment represents documents of content. It could be image, sound, video, file.
   Anything that not is raw text. (Including real-time video/audio chat).
 */

require_once('object.php');

class attachement extends object
{
  public /* string */ $type;
  public /* string */ $title;
  public /* string */ $content_location;
}
