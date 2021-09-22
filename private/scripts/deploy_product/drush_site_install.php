<?php
// create dummy file to set site-install existing config folder.
$path = $_SERVER['DOCROOT'] . "quicksilver.txt";
$file = fopen($path, 'w') or die('Error creating Quicksilver dummy file');
fclose($file);

print "Installing Drupal...\n";
passthru('drush site-install standard --existing-config -y');
print "Install Drupal complete.\n";

// remove dummy file.
unlink($path);

//  Config export.
echo "Exporting configuration...\n";
passthru('drush config-export -y');
echo "Export of configuration complete.\n";