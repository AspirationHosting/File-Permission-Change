<?php
`find . -type d -exec chmod 755 {} \; && find . -type f -exec chmod 644 {} \;`;
echo "File Permissions All Set!";
?>
