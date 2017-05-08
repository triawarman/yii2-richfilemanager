Version 0.2
-------------------------------
* Using servoceoder/richfilemanager ver 2.3.2
* Adjustment files
    a) ReadMe.md of RichFilemanager
        - renamed to RichFilemanager.ReadMe.md
    b) composer.json of RichFilemanager
        - renamed tp RichFilemanager.composer.json
    c) changelog of RichFilemanager
        - renamed to RichFilemanager.changelog
* Changes some code
    a) RichFilemanagerViewAsset.php
    b) views/interface.php

Version 0.1
-------------------------------
* Using servoceoder/richfilemanager ver 2.2.0
* Adjustment files
    a) change name of folder "connectors" to "connector", delete all connector language, but php
    b) delete /index.html and folder /demo
    c) add file  views/interface.php
* Changes some code
    a) connector/application/FmApplication.php
    b) connector/BaseFilemanager.php
        - Alter $this->fm-path, to get "web" folder location, not "web/assets"
    c) connector/filemanager.php
    d) assets/scripts/filemanager.js
        a) Added function to check published folder name, and the exact location