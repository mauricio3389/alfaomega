<?php

/**
 * sfGuardAuth actions.
 *
 * @package    alfaomega
 * @subpackage sfGuardAuth
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

require_once(sfConfig::get('sf_plugins_dir').'/sfDoctrineGuardPlugin/modules/sfGuardAuth/lib/BasesfGuardAuthActions.class.php');

class sfGuardAuthActions extends BasesfGuardAuthActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeSignin(sfWebRequest $request)
  {
      parent::executeSignin($request);
  }
}
