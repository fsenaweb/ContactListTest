# Example integration Laravel and Vue.js


###### Code of integration between Laravel (API) code and Vue.js (CLI) for construction of a simple contact list.

##### Resources:

- Laravel
- Vue
  - VueRouter
  - Axios
  - VueX
  - Jest (don't implemented yet)

## Setup
After the repository clone, 2 directories will be displayed (backend and frontend), each one has its settings, which will be explained below:
### Backend:

You will need to check the settings in the docker-compose.yml file and set the variables of your choice, or leave it as is, after that, run the **docker-compose command**:
``` bash
$ docker-compose up -d
```

This command will create the containers. It will then install the necessary dependencies to start the development server. The development environment will be available at *http://localhost:8000* (or any other port you configure). You can use the Docker Machine's IP (*http://192.168.99.100* by default) depending on your operating system. To access PHPMyAdmin, it will be available at *http://localhost:8080* and you can use the credentials that are in the docker-compose.yml file.

## Use

#### Starting the development server
After using the command `docker-compose up -d` your application will be available at `localhost: 8000`.

#### Access to Laravel commands
* Initially you have to execute the container that contains the laravel data: `docker exec -it {CONTAINER_ID} bash`  

With the container open, execute the command `composer install`, after this command, execute the migrations (with the fictitious data "seed") from laravel `php artisan migrate --seed`

Ready, the api will be ready for operation.

###Frontend:

The front is not running in the container, so it is important to have node.js, npm (or yarn) installed on the machine to execute the commands below:

The front process is much simpler. After opening the `frontend` directory, install the dependencies:

```
yarn install
or
npm install
```

**Create the `.env` file from the .env.example file and enter the necessary information for the application. It is important to create this file, otherwise the application may not work correctly.**

After creating the .env file and installing the dependencies, the application can be run in development mode:

```
yarn serve
or
npm run serve
```
Or if you prefer, you can do the build (which will be in the / dist folder) of the application:

```
yarn build
or
npm run build
```

The application will be available at http: // localhost: 8080 (or on port 8081 if the first is being used).

