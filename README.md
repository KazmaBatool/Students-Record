# Students Record Table - PHP & MySQL

This is a simple PHP project that demonstrates how to:

- Automatically create a MySQL database (`testdb`) if it doesn't exist
- Create a `students` table with 10 fields
- Insert sample student data
- Display the table in a presentable HTML format
- Handle everything in **one PHP file** (`dp.php`) without needing phpMyAdmin or manual SQL

---

## 💻 Features

1. **Automatic Database & Table Creation**
   - If `testdb` database or `students` table doesn't exist, they are automatically created.

2. **Drop & Recreate Table**
   - The table is dropped if it exists to ensure a fresh start every time you run `dp.php`.

3. **Sample Data Insert**
   - Inserts 4 sample student records automatically, avoiding duplicates.

4. **HTML Table View**
   - Table is styled with CSS for a professional look:
     - Alternate row colors
     - Hover effect
     - Centered content
     - Responsive width

5. **All-in-One PHP File**
   - No separate SQL or PHP files required
   - Easy to run and deploy

---

## 🛠 Technology Stack

- **Backend:** PHP 7+  
- **Database:** MySQL / MariaDB  
- **Server:** Laragon / XAMPP (Any local server)  
- **Frontend:** HTML + CSS (for table styling)

---

## ⚡ How to Run

1. Start Laragon (Apache + MySQL)  
2. Save `db.php` in:


C:\laragon\www\db.php


or any folder inside `www`  
3. Open in your browser:
http://localhost/db.php

4. You will see the **Students Record Table** with all sample data.

> ✅ Everything is automatic — no phpMyAdmin or console needed.

---

## 📌 Table Structure (`students`)

| Field       | Type             | Description                  |
|-------------|-----------------|------------------------------|
| id          | INT, AutoInc    | Primary key                  |
| name        | VARCHAR(100)    | Student name                 |
| email       | VARCHAR(100)    | Student email                |
| phone       | VARCHAR(20)     | Contact number               |
| gender      | VARCHAR(10)     | Male/Female                  |
| course      | VARCHAR(50)     | Enrolled course              |
| city        | VARCHAR(50)     | City of student              |
| age         | INT             | Age of student               |
| semester    | VARCHAR(20)     | Current semester             |
| created_at  | TIMESTAMP       | Record creation timestamp    |

---

## 📂 File Structure

db.php
README.md

> Everything is handled in **db.php**.

---

## ⚡ Notes

- First time running `dp.php` will automatically create the database & table.  
- On every refresh, the table is dropped and recreated to prevent errors.  
- Perfect for learning PHP-MySQL integration in one file.

---
