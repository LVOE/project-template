# Project Template

Installation
------------
1. Fork this repo
2. Clone the newly created repo
3. Update ~/.homestead/Homestead.yaml
4. Run the following in the ~/Homestead directory to provision the server


    ```{r, engine='bash'}
    vagrant up --provision
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
