CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Permissions
 * Usage

INTRODUCTION
------------

Current Maintainers:

 * Devin Carlson http://drupal.org/user/290182

Google Calendar Block is a lightweight module which allows administrators to
create blocks which display Google Calendar events.

Google Calendar Block will never provide advanced Google Calendar integration
such as OAuth user authentication or the ability to create new calendar events
from Drupal. These capabilities are provided by other modules such as Google
Calendar API (https://drupal.org/project/gcal).

REQUIREMENTS
------------

Google Calendar has two dependencies.

Drupal core modules
 * Block

Contributed modules
 * Libraries API - 2.x

INSTALLATION
------------

To install Google Calendar Block:

 * Download the latest version of the ZF1 PHP library
   (https://github.com/zendframework/zf1) and extract it to
   sites/all/libraries or sites/sitename/libraries as you require. The extracted
   folder must be named zf1.
 * Enable Google Calendar Block and all of the modules that it requires.

PERMISSIONS
------------

The ability to create, edit and delete Google Calendar Block blocks relies on
the block module's "Administer blocks" permission.

USAGE
-----

Administrators can visit the Blocks administration page where they can create
new Google Calendar Block blocks and update or delete existing Google Calendar
Block blocks.

Administrators can also position Google Calendar Block blocks as they can with
standard or custom blocks provided by the core Block module.

Each Google Calendar Block block requires a username and unique private
visibility feed + magic cookie combination in order to function.

The required identification information can be found on the settings page for
each calendar. To retrieve the information:

 * Visit Google Calendar (https://www.google.com/calendar), log in and browse to
   the settings page (select the gear icon and choose Settings).
 * From the settings page, select the Calendars tab and then select the calendar
   that you wish to display in the Google Calendar Block block.
 * Look for the Private Address label and select the XML icon. A modal window
   will appear with the private address of the Calendar.
 * The private address is in the form of
   https://www.google.com/calendar/feeds/example@gmail.com/private-123a45678bcd12345e678f12g345hij6/basic
   where example@gmail.com is the user and
   private-123a45678bcd12345e678f12g345hij6 is the visibility.

By default, primary calendars are not shared outside of the domain for Google
Apps users. In order to display the primary calendar of a Google Apps account,
you must set "External Sharing options for primary calendars" to "Share all
information, but outsiders cannot change calendars" or higher. Note that
changing this option may take up to 24 hours to propagate to all users.
