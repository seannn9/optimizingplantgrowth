# Optimizing Plant Growth Website

## Dependencies
Ensure you have the following installed:
1. Node.js
2. Laravel Herd (for PHP & Composer)
3. XAMPP (for MySQL)

## Setup the Development Environment
Follow these instructions step-by-step:

### Clone the repository
```sh
git clone https://github.com/seannn9/optimizingplantgrowth.git
cd optimizingplantgrowth
```

### Install Dependencies
```sh
composer install
npm install
```

### Configure Environment
Copy the enviroment example and put your api key
```sh
cp .env.example .env
```

Generate the application key
```sh
php artisan key:generate
```

## Set up Database
Open XAMPP and start Apache and MySQL
```sh
php artisan migrate --seed
```

## Build the Development Server
```sh
npm run build
```

## Add Folder to Laravel Herd
1. Click `Open Sites`
2. Click `Add Site`
3. Choose `Link existing project` then click Next
4. Navigate to the root folder of the project and select `optimizingplantgrowth` folder.
5. Wait for the process to finish
6. Go to the url `http://optimizingplantgrowth.test`
