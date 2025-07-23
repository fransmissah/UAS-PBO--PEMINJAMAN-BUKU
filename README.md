# 📚 UAS - Aplikasi Manajemen Peminjaman Buku

A Laravel 12 & Filament 3 web application to manage book borrowing activities in a library. Built as a final project for the Object-Oriented Programming course.

## 👤 Author

- **Name:** Frans Dandy Riaudy Missah
- **NIM** 20230801536
- **GitHub:** [fransmissah](https://github.com/fransmissah)

---

## 🚀 Features

- 📖 CRUD for books and borrowings
- 🧾 Relational database using Eloquent ORM
- 🎨 Admin dashboard built with Filament
- 🧠 Automatic timestamping
- 🗃️ Borrowing status management

---

## ⚙️ Tech Stack

- PHP 8.3
- Laravel 12
- Filament 3
- SQLite (development)
- TailwindCSS (via Filament)
- VSCode (recommended editor)

---

## 🔧 Installation Steps

```bash
git clone https://github.com/fransmissah/uas-peminjaman-buku.git
cd uas-peminjaman-buku
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

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

