<?php namespace synchrotalk\connector;

if (class_exists("\synchrotalk\connector\auth", false))
  return;

require_once('synchrotalk.plugin/plugin.php');

abstract class auth implements \plugin
{
  abstract public function sign_in( /* string */ $token);

  public /* string[] */ function direct_auth_requirments() {}
  public /* token */ function direct_auth($requirments) {}

  public /* string[] */ function callback_auth_requirments() {}
  public /* string[] */ function callback_auth_question(/* string[] */ $requirments) {}
  public /* token */ function callback_auth_answer(/* string[] */ $requirments) {}

  public /* string[] */ function redirect_auth_requirments() {}
  public /* string */ function redirect_auth_question($requirments) {}
  public /* token */ function redirect_auth_answer(/* string[] */ $requirments) {}

  public /* string[] */ function supported_authtypes() {}
  abstract public /* string */ function preferred_authtype();
}
