# 📚 UAS Pemrograman Berbasis Objek – Aplikasi Peminjaman Buku

A Laravel 12 + Filament 3 web application to manage book inventory and borrowing records. Built as a final project for the Object-Oriented Programming (PBO) course.

## 👤 Author
**Frans Dandy Riaudy Missah** 20230801536

## 🔗 Live Repository
[https://github.com/fransmissah/UAS-PBO--PEMINJAMAN-BUKU](https://github.com/fransmissah/UAS-PBO--PEMINJAMAN-BUKU)

---

## ⚙️ Features
- Manage books (CRUD)
- Manage borrowings (CRUD)
- Borrower name, book relation, return date
- Book stock system (connected)
- Built with Laravel 12 & Filament 3

---

## 🛠️ Installation Steps

```bash
git clone https://github.com/fransmissah/UAS-PBO--PEMINJAMAN-BUKU.git
cd UAS-PBO--PEMINJAMAN-BUKU
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve


---

## 🔑 Admin Login

> **Default credentials (seeded):**
> 
> - **Email:** `admin2@example.com`
> - **Password:** `Annette08`

If not working, you can create a new admin using Tinker:

```bash
php artisan tinker
\App\Models\User::create([
    'name' => 'Frans',
    'email' => 'admin2@example.com',
    'password' => bcrypt('Annette08'),
]);
```

---

## 🧪 Testing

You can test:

- Creating books
- Borrowing a book (with book_id relation)
- Marking return status

---

## 🌐 Deployment Notes

This app is currently set to run on localhost via:

```bash
php artisan serve
```

To deploy online, consider:
- Laravel Forge
- Vercel + Laravel API
- GitHub Pages (for frontend only)

---

## 📄 License

This project is for educational purposes only and is **not licensed** for commercial use.

