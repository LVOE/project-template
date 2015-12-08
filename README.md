# Project Template

Installation
------------
1. Fork this repo
2. Clone the newly created repo
3. Add the upstream remote to git and disable pushing

    ```{r, engine='bash'}
    git remote add upstream https://github.com/LVOE/project-template.git
    git remote set-url --push upstream no-pushing
    ```


3. Update ~/.homestead/Homestead.yaml
4. Run the following in the ~/Homestead directory to provision the server


    ```{r, engine='bash'}
    vagrant up --provision
    ```

5. Add the following to your /etc/hosts file


    ```{r, engine='bash'}
    192.168.10.10 project-name.app
    ```
    
5. SSH into the server, then run the following in the project directory


    ```{r, engine='bash'}
    composer install
    npm install
    ```
    
6. Update the url in config/app.php
7. Copy .env.example to .env, and change the DB_DATABASE value to the correct database name
8. Generate a new APP_KEY


    ```{r, engine='bash'}
    php artisan key:generate
    ```
    
9. Setup Run/Debug configurations for PHPUnit, Remote Debugging and Gulp
10. Run the copy-assets and compile Gulp tasks
11. Setup the scss filewatcher
