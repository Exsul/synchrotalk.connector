<?php namespace synchrotalk\connector\objects;

/*
  User is object representing one of the social network customers

  It inherits owner rights, because it its could be owner

  Ownership of multiple users is not currently supported
 */

class user extends owner
{
  public /* string */ $nickname;
  public /* string[] */ $name;

  // Associative array in template of "WxH" => "URI"
  public /* string[] */ $avatars;
}
