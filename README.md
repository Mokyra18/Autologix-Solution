# Autologix Solution
Autologix Solution is a comprehensive web-based platform designed for managing car purchases at dealerships and car stores. This solution simplifies the entire purchasing process, from inventory management to customer interactions, ensuring a seamless experience for both dealers and customers.

## Installation

* clone the repo and `cd` into it
* `composer install`
* Rename or copy `.env.example` file to `.env`
* `php artisan key:generate`
* generate the symbolic link `php artisan storage:link`

### Database

* Set your database credentials in your `.env` file
* migrate and seed the normal way with `php artisan migrate --seed`

### Mail

You need to configure your **Mail** credentials in your '.env' file, in order to enable the registration process and checkouts. if you are using the gmail service
make sure the [less secure app access](https://myaccount.google.com/lesssecureapps) is turned on.

* Set your mail credentials in your `.env` file

### Notes
Preview demo : http://autologixsolution.pandawadev.cloud/ <br>
admin account : admin@gmail.com, password : admin123 

## Screenshots

### home page
<kbd>![home page](https://github.com/Mokyra18/Autologix-Solution/blob/main/public/screens/homepage.png)</kbd>
### Cart
<kbd>![cart](https://github.com/Mokyra18/Autologix-Solution/blob/main/public/screens/cart.png)</kbd>
### user order
<kbd>![user profile](https://github.com/Mokyra18/Autologix-Solution/blob/main/public/screens/order_profile.png)</kbd>
### admin dashboard
<kbd>![admin dashboard](https://github.com/Mokyra18/Autologix-Solution/blob/main/public/screens/dashboard_admin.png)</kbd>
