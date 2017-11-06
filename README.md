# Wordpress Boilerplate
For fast project setup

### 1. Download
- create a new empty GIT repo, clone it
(if you are a member of bytabo - digital crew link repo in Trello board)
- Download repo as ZIP and move into repository
- do an initial commit
- do a "npm install"
- do "sudo gem install sass"

### 2. Setup
- set server root to wordpress directory
- integrate sql dump into your database
- put your database settins into wp-config.php
- rename following variables according to your theme name: 
    - Gruntfile.js -> replace "theme" everywhere in this file
    - rename the wordpress/wp-content/themes/theme folder
    - edit themeinfo in Gruntfile.js (line ~ 49)
- run "grunt" and start the watcher

### 3. Configuration
- go to http://localhost/wp-admin, default user is bytabo, default password is tobechanged
- change password of this user
- activate your new theme
- happy coding

### 4. Troubleshooting
- if changes are not displayed or cached very hard, comment the caching lines in the wordpress/.htaccess out