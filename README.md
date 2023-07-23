# dompixel-shop-assignment
product catalog crud operation

# Technologies
PHP (version 8.1)
Laravel Framework (version 10.15)
Use laravel blade views

# Clone the repository
git clone https://github.com/Chauhan-15/dompixel-shop-assignment.git

# Switch to the repo folder
cd dompixel-shop-assignment

# Install all the dependencies using composer and node
composer install
npm install

# Copy the example env file and make the required configuration changes in the .env file
cp .env.example .env

# Generate a new application key
php artisan key:generate

# Run the database migrations (Set the database connection in .env before migrating)
php artisan migrate

# Start the local development server
php artisan serve
You can now access the server at http://localhost:8000

# Start the vite development server
npm run dev

# command list
git clone https://github.com/Chauhan-15/dompixel-shop-assignment.git
cd dompixel-shop-assignment
composer install
npm install
cp .env.example .env
php artisan key:generate
Make sure you set the correct database connection information before running the migrations Environment variables
php artisan migrate
php artisan serve
npm run dev