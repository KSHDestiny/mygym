## Installation

1. To use the application, you must have the following installed:
    - Docker
    - WSL2 (if using Windows OS)
2. Clone this repository into your local machine using the terminal (Mac), CMD (Windows), or a GUI tool like SourceTree.
3. Navigate into your project directory
    ```
    cd <your-project-name>
    ```
4. Install project dependencies using the following command:
    ```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
    ```
    When using the laravelsail/phpXX-composer image, you should use the same version of PHP that you plan to use for your application (81, 82 etc).
5. Create the .env file from the example file
    ```
    cp .env.example .env
    ```
6. Open the .env file and change the database configuration to the following
    ```
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=<your-project-name>
    DB_USERNAME=root
    DB_PASSWORD=
    ```
7. Start Sail in the background
    ```
    sail up -d
    ```
8. Generate application key
    ```
    sail artisan key:generate
    ```
9. Migrate database tables
    ```
    sail artisan migrate --seed
    ```
10. Install dependencies
    ```
    npm update && npm install && npm run dev
    ```
11. Go to localhost on your browser to view the application

### if you are not familiar with sail command and want to run php artisan, run

    ```
    sail exec -it laravel.test bash
    ```

laravel.test will differ based on your docker image and can check using `sail ps`
