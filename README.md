git init
git branch -M main
git remote add origin https://github.com/firmansyahfebi-8-png/php-intern-test.git


php artisan make:model Employee -m
php artisan make:controller EmployeeController


echo "use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::put('/employees/{id}', [EmployeeController::class, 'update']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);" > routes/api.php


echo "# PHP Intern Test - CRUD Laravel


- Upload foto ke Amazon S3
- Caching data menggunakan Redis dengan key emp_<nomor

- GET /api/employees → List semua employee
- GET /api/employees/{id} → Ambil 1 employee (cache Redis)
- POST /api/employees → Tambah employee (upload foto ke S3)
- PUT /api/employees/{id} → Update employee
- DELETE /api/employees/{id} → Hapus employee
" > README.md


git add .
git commit -m "Initial commit - Laravel CRUD Employee with S3 & Redis"
git push -u origin main
