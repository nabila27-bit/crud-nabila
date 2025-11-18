laravel-3role/

├─ app/
│  ├─ Http/
│  │  ├─ Controllers/
│  │  │  ├─ GuruController.php
│  │  │  ├─ MapelController.php
│  │  │  └─ NilaiController.php
│  │  └─ Middleware/
│  │     └─ RoleMiddleware.php
│  └─ Models/
│     ├─ Guru.php
│     ├─ Mapel.php
│     └─ Nilai.php
├─ database/
│  ├─ migrations/
│  │  ├─ xxxx_create_users_table.php
│  │  ├─ xxxx_add_role_to_users_table.php
│  │  ├─ xxxx_create_gurus_table.php
│  │  ├─ xxxx_create_mapels_table.php
│  │  └─ xxxx_create_nilais_table.php
│  └─ seeders/
│     └─ UserSeeder.php
├─ resources/
│  └─ views/
│     ├─ layouts/
│     │  └─ app.blade.php
│     ├─ dashboard.blade.php
│     ├─ guru/
│     │  ├─ index.blade.php
│     │  ├─ create.blade.php
│     │  └─ edit.blade.php
│     ├─ mapel/
│     │  ├─ index.blade.php
│     │  ├─ create.blade.php
│     │  └─ edit.blade.php
│     └─ nilai/
│        ├─ index.blade.php
│        ├─ create.blade.php
│        └─ edit.blade.php
├─ routes/
│  └─ web.php
└─ .env