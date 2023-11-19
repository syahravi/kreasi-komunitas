# Kreasi Komunitas
## Kreasi Komunitas (Laravel)
### Instalasi Kreasi Komunitas (Laravel)
- git clone ...
- copy file `.env.local` dengan `.env`
- composer i
- npm i
- php artisan migrate
- php artisan storage:link
- npm run dev
- npm run build
### Laravel Stacks
- Laravel breeze
- Tallstack
- Tallstack auth
  - Debugbar
  - Minifier
  - Database

### Laravel Documentations
- Penggunaan *soft delete*.
  - Menampilkan semua data yang belum dihapus.
    - Comment::get();
  - Menampilkan semua data yang belum dihapus dan yang terhapus.
    - Comment::withTrashed->get();
  - Menampilkan semua data yang terhapus.
    - Comment::onlyTrashed()->get();
  - *Restore* data yang terhapus.
    - Comment::onlyTrashed()->find($id)->restore();
## Useful Resources
- Tailwind
  - Tailbits.com
  - Landingfolio.com
- Spatie-permission
