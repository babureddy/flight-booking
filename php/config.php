<?php
$host = "localhost";
$dbname = "flightdb2";
$user = "root";
$password = "root";

// Authentication for creating Github issues from suggested data updates
// https://help.github.com/articles/creating-an-access-token-for-command-line-use/
$GITHUB_REPO = "openflights";
$GITHUB_USER = "YOUR_USERNAME";
$GITHUB_ACCESS_TOKEN = "YOUR_TOKEN";

// Enable non-English locales? (true/false)
// True requires PHP gettext extension, false works only if the extension is *not* installed
$OF_USE_LOCALES = true;

// Allow login via vBulletin cookies? (true/false)
$OF_VBULLETIN_LOGIN = false;

// OpenFlights UID for admin user, used only for special access to airport/airline DBs
$OF_ADMIN_UID = 3;
?>
