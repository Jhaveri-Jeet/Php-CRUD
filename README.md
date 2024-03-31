# PHP CRUD Application

This is a simple CRUD (Create, Read, Update, Delete) application for managing user records. It is built using PHP for server-side scripting, AJAX calls for asynchronous communication between the client and server, and PDO (PHP Data Objects) for database connectivity.

## Features

- **Create**: Add new user records to the database.
- **Read**: View a list of existing user records with pagination support.
- **Update**: Modify existing user records.
- **Delete**: Remove unwanted user records from the database.

## Technologies Used

- **PHP**: Server-side scripting language used for backend logic.
- **PDO (PHP Data Objects)**: PHP extension used for interacting with the database. It provides a consistent interface for accessing different database systems.
- **JavaScript**: Used for handling AJAX requests and DOM manipulation.
- **HTML/CSS**: Frontend markup and styling.
- **MySQL**: Database management system used for storing user records.

## Installation

1. **Clone the Repository**:

   ```bash
   git clone <repository-url>
   ```

2. **Database Setup**:

   - Import the provided SQL file (`database.sql`) into your MySQL database to create the necessary tables and initial data.

3. **Web Server Setup**:

   - Ensure that you have a web server (such as Xampp) installed and running.
   - Place the project files in your web server's document root directory.

4. **Access the Application**:
   - Open a web browser and navigate to the URL where you installed the application.

## Usage

- **Adding a user**: Click on the "Add user" button and fill in the required details in the form. Submit the form to add a new user record.
- **Viewing users**: Navigate to the "users" page to view a list of existing user records. Pagination is provided for easy navigation.
- **Updating a user**: Click on the "Edit" button next to a user record to modify its details.
- **Deleting a user**: Click on the "Delete" button next to a user record to remove it from the database.
