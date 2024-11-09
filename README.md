# College Assignment: Database Mini Project

This project is a web-based database management application developed as part of a college assignment using PHP, HTML, CSS, and JavaScript. The application allows users to log in to perform CRUD (Create, Read, Update, Delete) operations on student data. The project uses two databases: one for user authentication and another for storing student records.

## Features

- **User Authentication**: Users can log in with a username and password to access the database.
- **CRUD Operations**: After logging in, users can:
  - **Insert** new student records
  - **Update** existing student records
  - **Delete** student records
  - **Display** all records in the database

## Prerequisites

1. **WAMP Server**: Ensure that you have WAMP Server installed to host the project locally.
2. **Databases**: Two MySQL databases are required:
   - `user_passwords`: Stores usernames and passwords.
   - `student_bca`: Stores student records.

## Database Structure

### 1. User Passwords Database

- **Database Name**: `user_passwords`
- **Table Name**: `u_pass`
- **Columns**:
  - `U_ID`: Unique identifier for each user.
  - `User`: Username for login.
  - `Password`: Encrypted password for login.
  - `active`: Status of the account (e.g., 1 for active, 0 for inactive).

### 2. Student Records Database

- **Database Name**: `student_bca`
- **Table Name**: `student`
- **Columns**:
  - `Name`: Name of the student.
  - `RollNo`: Roll number of the student.
  - `Class`: Class of the student.
  - `Marks`: Marks obtained by the student.

## Installation and Setup

1. **Clone the repository**:
   ```bash
   git clone https://github.com/saksham-09-design/Database_Mini_Project.git
   ```
2. **Start WAMP Server** and ensure MySQL is running.

3. **Database Setup**:
   - Open `phpMyAdmin` or your MySQL interface.
   - Create the `user_passwords` database and add the `u_pass` table with the specified columns.
   - Create the `student_bca` database and add the `student` table with the specified columns.
   - Add some initial data to the `u_pass` table with test usernames and passwords.

4. **Configure Database Connection**:
   - Open the `config.php` file in the project directory.
   - Update the MySQL credentials to match your WAMP Server configuration.

5. **Run the Application**:
   - Place the project files in the `www` directory of WAMP Server.
   - Open a browser and navigate to `http://localhost/database-mini-project`.

## Usage

1. **Login**: Enter a username and password to access the system.
2. **Manage Records**:
   - Navigate to the Insert, Update, Delete, or Display options to manage student records.
   - Follow on-screen instructions for each operation.

## Technologies Used

- **PHP**: Server-side scripting language for backend logic.
- **HTML & CSS**: For structuring and styling the application interface.
- **JavaScript**: For front-end interactivity.
- **MySQL**: Database to store and manage data.
- **WAMP Server**: Local server environment.

## Future Improvements

- Add user roles and permissions.
- Improve UI/UX design.
- Implement search and filtering for student records.
- Enhance data validation and error handling.

---

You can now link directly to the GitHub repository at https://github.com/saksham-09-design/Database_Mini_Project.
