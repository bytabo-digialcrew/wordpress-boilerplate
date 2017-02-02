# Wordpress Boilerplate
For fast project setup

### 1. Download
- Download repo and delete .git folder
- create a new empty GIT repo, clone it and move all boilerplate contents (without .git folder) into it
- do an initial commit
- do a "npm install"

### 2. Setup
- set server root to wordpress directory
- integrate sql dump into your database
- put your database settins into wp-config.php
- rename following variables according to your theme name: 
    - Gruntfile.js -> replace "theme" everywhere in this file
    - rename the wordpress/wp-content/themes/theme folder
- run "grunt" and start the watcher

### 3. Configuration
- go to http://localhost/wp-admin, default user is bytabo, default password is tobechanged
- change password of this user
- activate your new theme
- happy coding

### 3. Publishing
- edit .ftppass with your FTP data (root of FTP user must be theme.bytabo.de)
- do a "grunt publish" to deploy on Webserver

### 4. Troubleshooting
- if changes are not displayed or cached very hard, comment the caching lines in the wordpress/.htaccess out