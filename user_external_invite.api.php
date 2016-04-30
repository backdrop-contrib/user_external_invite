<?php

/**
 * @file
 * Contains hooks provided by the user_external_invite module.
 */


/**
 * Exclude roles that you wouldn't want administrators to be allowed to use in
 * the invite process.
 *
 * @return array
 *   List of roles to exclude.
 *     ['rid'] - Role ID of excluded role
 */
function hook_user_external_invite_excluded_roles($roles) {
  $roles[] = 5;
  return $roles;
}
