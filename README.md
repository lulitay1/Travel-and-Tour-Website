# Travel-and-Tour-sample-Website 
It uses PHP, HTML, CSS, JavaScript.

## Overview
This is a **Tour and Travel Guide sample Website** built with PHP, HTML, MySQL, CSS, and JavaScript.  
It allows users to browse destinations, view tour packages, and submit booking requests.

## Features
- Browse destinations with images and descriptions
- View tour packages
- Booking form for users
- Dynamic content from MySQL database

## Technologies Used
- PHP 8.x
- MySQL
- HTML, CSS, JavaScript
- XAMPP (local server)

## Setup Instructions
1. Install [XAMPP](https://www.apachefriends.org).  
2. Copy the project folder to `htdocs` (Windows) or `www` (Linux).  
3. Create a MySQL database in **phpMyAdmin** (for example, name it `book_db`).  
4. Edit the database connection in your PHP file book_form.php (currently `$connection = mysqli_connect(...)`) to match your local database credentials and database name.  
5. Open the project in a browser: `http://localhost/your_project_folder`
## Usage
- Users can browse destinations and book tours.  
- Admins can manage destinations and bookings.

## Contributing
Feel free to fork this repository and submit pull requests for improvements.

## License
This project is open-source and free to use.
