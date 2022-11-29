User External Invite
========

This module provides functionality similar to GitHub's project invitations. 
Backdrop users with the "invite new user" permission can send invitations 
to any email address inviting the recipent to join the site with a specific 
role. If the invited user ignores the invitation, it expires. Not having 
accounts with default passwords improves site security and active user 
tracking. The module assumes you are using external authentication like 
SAML, LDAP or GoogleAuth and that users receiving the invite email can 
already log into the website as an authenticated user.

Upon receiving the invitation email, a user is directed to the user login 
page. Upon successful authentication, the elevated role is automatically 
granted. 

This approach is helpful at large organizations where a someone's username 
is often a lesser known combination of letters and numbers like kere7580. 


Installation
------------

- Install this module using the official Backdrop CMS instructions at
  https://docs.backdropcms.org/documentation/extend-with-modules.

- Visit the configuration page under Administration > Configuration > People >
  Invite (admin/config/people/user-external-invite/) and enter the required information.


Issues
------

Bugs and Feature Requests should be reported in the Issue Queue:
https://github.com/backdrop-contrib/user_external_invite/issues.


Current Maintainers
-------------------

- [Tim Stalker](https://github.com/johnquest)
- [Kevin Reynen](https://github.com/kreynen)


Credits
-------

- Ported to Backdrop CMS by [Tim Stalker](https://github.com/johnquest) and [Kevin Reynen](https://github.com/kreynen).
- Originally written for Drupal by [Kevin Reynen](https://www.drupal.org/u/kreynen) and [Alex Finnarn](https://www.drupal.org/u/afinnarn).
- Based on [Some Other project](https://github.com/example).
- Sponsored by [University of Colorado](https://www.cu.edu).


License
-------

This project is GPL-2.0 software.
See the LICENSE.txt file in this directory for complete text.

