Version 0.1
-------------------------------
* Using 
    servoceoder/richfilemanager ver 2.2.0
* Files adjustment
    1 change name of folder "connectors" to "connector", delete all connector language, but php
    2 delete /index.html and folder /demo
    3 add file  views/interface.php
* Code Changes
    1 connector/application/FmApplication.php
    2 connector/BaseFilemanager.php
        - Alter $this->fm-path, to get "web" folder location, not "web/assets"
    3 connector/filemanager.php
    4 assets/scripts/filemanager.js
        - Added function to check published folder name, and the exact location
    5 source code of index.html write into views/interface.php