<?php namespace synchrotalk\plugin;

if (interface_exists("\synchrotalk\plugin\plugin", false))
  return;

interface plugin
{
  public function init($config);
}
