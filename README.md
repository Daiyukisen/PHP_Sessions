#  PHP Session Demo Projects

This repository contains three mini PHP applications that demonstrate practical uses of **sessions** in PHP. These examples are designed for IT students and educators to understand how session management works in real-world scenarios.

## 📦 Included Projects

### 1️⃣ Login System
A basic authentication system using PHP sessions to track login status and restrict access to protected pages.

**Files:**
- `login.php`
- `dashboard.php`
- `logout.php`

**How it works:**
- User logs in with hardcoded credentials (`admin` / `1234`)
- Session variables `$_SESSION['logged_in']` and `$_SESSION['username']` are set
- Protected pages check session status before granting access

---

### 2️⃣ Booking Form with Summary
A multi-page booking form that stores user input in session variables and displays a confirmation summary.

**Files:**
- `booking.php`
- `confirm.php`
- `summary.php`

**How it works:**
- User submits booking details (name, date, room type)
- Data is stored in `$_SESSION['booking']`
- Summary page retrieves and displays the session data

---

### 3️⃣ Visitor Counter
A simple counter that tracks how many times a user has visited the page during their session.

**File:**
- `counter.php`

**How it works:**
- Session variable `$_SESSION['visits']` is initialized and incremented
- Displays visit count on each page refresh

---

## ⚙️ Setup Instructions

### Prerequisites
- [XAMPP](https://www.apachefriends.org) or any local PHP server

### Installation
1. Clone or download this repository
2. Move the folder to your local server directory:
   - **Windows:** `C:\xampp\htdocs/PHP_Sessions`
3. Start Apache using the XAMPP Control Panel

### Access in Browser
Open your browser and navigate to:
http://localhost/PHP_Sessions/login.php
- Log in using `admin` / `1234`
- Access the dashboard
  
http://localhost/PHP_Sessions/booking.php
- Make a booking
- View booking summary
  
http://localhost/PHP_Sessions/counter.php
- Track visits using `counter.php`

---

## 📚 Educational Use

This project is ideal for:
- Classroom demonstrations
- Student assignments
- Learning session-based state management in PHP
