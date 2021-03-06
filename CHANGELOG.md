CHANGELOG
=========

18.10.2013
------------------
* Update skeleton for Bluz ver. 0.2.0

17.10.2013
------------------
* Update skeleton for Bluz ver. 0.1.9
* Fixed #108, flush cache required

11.10.2013
------------------
* Added params to users action for store custom information
* Migrated all modules to new Crud system
* Updated `users_action` table (added `params` field)

08.10.2013
------------------
* Added CHANGELOG.md file (this file)
* Added backbone example /test/backbone
* Added Bluz-Debug headers in Bootstrap
* Added dashboard.css for dashboard layout
* Added achievements to README.md
* Added js/vendor/html5shiv-printshiv.js
* Updated html5shiv scripts to 3.7.0
* Renamed js/main.js to js/config.js
* Renamed js/vendor/html5.js to js/vendor/html5shiv.js
* Removed bluz.ready() method from bluz.js
* Removed styles: left, right, clear, empty
* Removed function "defineArray" (prepare to PHP 5.5 w/out APC)
* Fixed issue with redirect after login (test module)
* Fixed JS codestyle

05.09.2013
------------------
* Replaced Gliphicons with Awesome

05.08.2013
------------------
* Renamed bluz.validate to bluz.form
* Updated Twitter Bootstrap to 3.0RC1

02.08.2013
------------------
* Refactoring Flash Messages

01.06.2013
------------------
* Added Query Builders for Select/Insert/Update/Delete
* Changed behaviour of insert/update/delete in Db\Db (works with Query Builders now)
* Removed methods insert/update/delete from Db\Table

01.05.2013
------------------
* Rename class Auth\AbstractEntity to Auth\AbstractRowEntity
* Rename table acl_usersToRoles to acl_users_roles
* Rename Models\UsersToRoles to UsersRoles
