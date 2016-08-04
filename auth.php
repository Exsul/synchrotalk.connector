<?php namespace synchrotalk\connector

require_once('synchrotalk.plugin/plugin.php');

abstract class auth implements plugin
{
  abstract public /* user */ function sign_in( /* string */ $token);

  abstract public /* token */ function direct_auth();

  abstract public /* string[] */ function callback_auth_requirments();
  abstract public /* string[] */ function callback_auth_question(/* string[] */ $requirments);
  abstract public /* token */ function callback_auth_answer(/* string[] */ $requirments);

  abstract public /* string[] */ function supported_authtypes();
  abstract public /* string */ function preferred_authtype();
}
