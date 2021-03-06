<?php

$aliases = 'dgive';

if(!function_exists('CMD_defaultgive')) {
  function CMD_defaultgive($MCL, $user, $params = array())
  {
    if(count($params) && is_numeric($params[0])) {
      // set default give amount
      $MCL->_getUser($user)->settings->defaultGive = $params[0];
      $MCL->pm($user, 'Your default give amount was set to > ' . $params[0] . ' <!');
    } else {
      if(isset($MCL->_getUser($user)->settings->defaultGive)) {
        // print current user decided default give amount
        $MCL->pm($user, 'Your default give amount is > ' . $MCL->_getUser($user)->settings->defaultGive . ' <!');
      } else {
        // print current default give amount
        $MCL->pm($user, 'Your default give amount is > ' . $MCL->config->defaultGiveAmount . ' < (system default)!');
      }
    }
  }
}
