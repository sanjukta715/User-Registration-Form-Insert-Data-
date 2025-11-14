# Experiment 2: User Registration (PHP + MySQL)

## Objective
Create an HTML registration form and insert user data into MySQL using PHP.

## Files
- register.html – User input form
- register.php – Handles POST request & inserts data securely
- db_connect.php – Database connection file
- users.sql (optional)

## Setup
1. Import `users.sql` or ensure your table has:
   - id (INT, Primary Key)
   - name (VARCHAR)
   - email (VARCHAR)
   - password (VARCHAR)

2. Configure `db_connect.php`:
   - Host: localhost
   - User: root
   - Password: (your MySQL password)
   - DB name: experiment1_db or experiment2_db

## Run
Open in browser:

