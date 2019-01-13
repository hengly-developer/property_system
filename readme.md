## Installation

First clone project with the following command:

    git clone git@git.sinet.com.kh:phearaeun/meta-property-mgt.git <Your project name>
    
Then, run composer install

    composer install
    
After that run copy .env.example to .env and configure your database setting
Next, run the migration:

    php artisan migrate