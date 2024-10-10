# Task Management App - Core PHP Machine Test

## Overview

This is a simple **Task Management Application** created using **Core PHP**, **Plain SQL Queries**, **HTML5**, and **CSS**. The application allows users to perform basic CRUD (Create, Read, Update, Delete) operations on tasks stored in a **MySQL** database.

## Features

1. **Add a Task**: Users can add new tasks with a title and description.
2. **List Tasks**: All tasks are listed on the main page.
3. **Edit a Task**: Users can edit an existing task's title or description. (Optional)
4. **Delete a Task**: Users can delete tasks from the list. (Optional)

## Technology Stack

- **Backend**: PHP (Core PHP)
- **Database**: MySQL (or any SQL database)
- **Frontend**: HTML5, CSS (basic styling)
- **Database Queries**: Plain SQL (no ORM)

## Prerequisites

Before you can run this application, make sure the following are installed:

- **PHP**: [Download PHP](https://www.php.net/downloads)
- **MySQL**: [Download MySQL](https://dev.mysql.com/downloads/installer/)

## Database Setup

1. Create a new MySQL database called `task_management`.
2. Create a `tasks` table with the following SQL query:
   ```sql
   CREATE TABLE tasks (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       description TEXT,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
