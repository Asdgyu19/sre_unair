# Role-Based Access Control (RBAC) - SRE UNAIR Admin Panel

## Overview
Sistem Role-Based Access Control telah diimplementasikan untuk memberikan akses yang berbeda berdasarkan role pengguna. Saat ini terdapat dua role utama untuk admin panel:

1. **Admin** (Super Admin) - Akses penuh ke semua fitur
2. **BOEND** (Board of Executive and Development) - Akses terbatas tanpa user management

## Implementasi Teknis

### 1. Middleware Configuration

#### AdminMiddleware.php
- **Lokasi**: `app/Http/Middleware/AdminMiddleware.php`
- **Fungsi**: Mengizinkan akses admin panel untuk role 'admin' dan 'boend'
- **Perubahan**: Dari hanya 'admin' menjadi `['admin', 'boend']`

#### SuperAdminMiddleware.php  
- **Lokasi**: `app/Http/Middleware/SuperAdminMiddleware.php`
- **Fungsi**: Membatasi akses user management hanya untuk role 'admin'
- **Status**: Baru dibuat untuk kontrol granular

### 2. Route Configuration

#### Admin Panel Routes
- **File**: `routes/web.php`
- **Middleware**: `['auth', 'admin']` untuk akses umum admin panel
- **User Management**: Ditambahkan middleware `'superadmin'` tambahan

```php
// Contoh implementasi:
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Routes yang dapat diakses oleh admin dan boend
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('events', EventController::class);
    Route::resource('blog', BlogPostController::class);
    // ... dst
    
    // User Management - hanya untuk super admin
    Route::middleware('superadmin')->group(function () {
        Route::resource('user', UsersController::class);
    });
});
```

### 3. User Interface Modifications

#### Sidebar Navigation
- **File**: `resources/views/layouts/admin.blade.php`
- **Perubahan**: Menu "Manage Users" hanya tampil untuk role 'admin'
- **Conditional Display**: Menggunakan `@if(auth()->user()->role === 'admin')`

#### Dashboard Notifications
- **File**: `resources/views/admin/dashboard.blade.php`
- **Fitur**: 
  - Menampilkan role user di header
  - Notifikasi khusus untuk role 'boend' mengenai pembatasan akses
  - Informasi lengkap untuk role 'admin' tentang akses penuh

### 4. Model Enhancements

#### User Model Methods
- **File**: `app/Models/User.php`
- **Methods baru**:
  - `isBoend()`: Cek apakah user adalah BOEND
  - `hasAdminAccess()`: Cek akses admin panel 
  - `canManageUsers()`: Cek hak manage users

## Access Matrix

| Feature | Admin | BOEND | User |
|---------|-------|-------|------|
| Dashboard | ✅ | ✅ | ❌ |
| Event Management | ✅ | ✅ | ❌ |
| Blog Management | ✅ | ✅ | ❌ |
| Project Management | ✅ | ✅ | ❌ |
| Merchandise Management | ✅ | ✅ | ❌ |
| **User Management** | ✅ | ❌ | ❌ |

## Testing Accounts

### Admin Account
- **Email**: admin@sre.unair.ac.id
- **Password**: password123
- **Role**: admin
- **Access**: Full access termasuk user management

### BOEND Account  
- **Email**: boend@sre.unair.ac.id
- **Password**: password123
- **Role**: boend
- **Access**: Admin panel tanpa user management

## Security Features

### 1. Route Protection
- Middleware `admin`: Proteksi tingkat dasar admin panel
- Middleware `superadmin`: Proteksi tambahan untuk user management
- Automatic 403 Forbidden untuk akses tidak sah

### 2. UI Security
- Dynamic menu berdasarkan role
- Conditional display untuk actions buttons
- Role indicator di dashboard

### 3. Error Handling
- Custom error messages untuk unauthorized access
- Graceful degradation untuk missing permissions

## Implementation Flow

1. **User Login** → Authentication check
2. **Role Verification** → AdminMiddleware check
3. **Route Access** → Additional middleware check (SuperAdminMiddleware untuk user management)
4. **UI Rendering** → Conditional display berdasarkan role
5. **Action Execution** → Final permission check

## Deployment Notes

### Production Considerations
1. **Environment Variables**: Pastikan APP_ENV=production
2. **Cache Configuration**: Run `php artisan config:cache`
3. **Route Caching**: Run `php artisan route:cache` 
4. **Security Headers**: Implementasi additional security headers
5. **Database Indexing**: Index pada kolom 'role' untuk performance

### Monitoring & Logging
- Log semua akses user management
- Monitor failed access attempts
- Track role changes dalam audit log

## Future Enhancements

### Planned Features
1. **Granular Permissions**: Sistem permission yang lebih detail
2. **Role Hierarchy**: Multiple levels dalam setiap role
3. **Dynamic Role Assignment**: Admin dapat mengubah role user
4. **Audit Trail**: Logging aktivitas berdasarkan role
5. **API Access Control**: Extend RBAC ke API endpoints

### Database Schema Extensions
```sql
-- Future permissions table structure
CREATE TABLE permissions (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    resource VARCHAR(50),
    action VARCHAR(50)
);

CREATE TABLE role_permissions (
    role_id INT,
    permission_id INT,
    PRIMARY KEY (role_id, permission_id)
);
```

## Testing Checklist

- [ ] Admin dapat mengakses semua fitur termasuk user management
- [ ] BOEND dapat mengakses admin panel tetapi tidak bisa manage users  
- [ ] Menu user management tidak tampil untuk BOEND
- [ ] Error 403 muncul jika BOEND coba akses URL user management langsung
- [ ] Dashboard menampilkan role dan notifikasi yang sesuai
- [ ] Logout berfungsi untuk semua role
- [ ] Regular user tidak dapat mengakses admin panel

## Support & Maintenance

Untuk support dan maintenance sistem RBAC:
1. Monitor logs untuk error 403 yang tidak diharapkan
2. Regular review akses user berdasarkan role  
3. Update documentation saat ada perubahan role/permission
4. Test security setelah setiap deployment