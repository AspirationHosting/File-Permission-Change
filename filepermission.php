<?php
/**
 * File Permission Change
 * By Aspiration Hosting
 * 
 * GitHub URL: https://github.com/AspirationHosting/File-Permission-Change
 */
`find . -type d -exec chmod 755 {} \; && find . -type f -exec chmod 644 {} \;`;
echo "File Permissions All Set!";
?>
