<?php namespace synchrotalk\connector\objects;

/*
  User is object representing one of the social network customers

  It inherits owner rights, because it its could be owner

  Ownership of multiple users is not currently supported
 */

require_once('owner.php');

class user extends owner
{
  public /* string */ $nickname;
  public /* string[] */ $name;

  // Associative array in template of "WxH" => "URI"
  public /* string[] */ $avatars;

  public /* string */ $status;
  public /* bool */ $online;
  public /* string */ $platform;

  /* recognizable platforms
    - web
    - mobile web
    - linux
    - mobile linux (including android)
    - macos (commonly osx)
    - ios (ipad / appletv / etc)
    - mobile ios (iphone only)
    - windows
    - mobile windows
    - blackberry
   */
}
