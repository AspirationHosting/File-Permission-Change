<?php
`find . -type d -print0 | xargs -0 chmod 0755 && find . -type f -print0 | xargs -0 chmod 0644`;
echo "File Permissions All Set for Magento!";
?>
