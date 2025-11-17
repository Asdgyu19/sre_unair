# 🔐 DAFTAR AKUN LOGIN - SRE UNAIR ADMIN PANEL

## 📊 **TOTAL USER: 4 AKUN**

### 🏛️ **DOMAIN: @sre.unair.ac.id (Testing Accounts)**

#### 👑 Super Admin
- **Email:** admin@sre.unair.ac.id
- **Password:** password123
- **Role:** admin
- **Akses:** Full access (semua fitur + User Management)

#### 🎯 BOEND (Board of Executive & Development)
- **Email:** boend@sre.unair.ac.id  
- **Password:** password123
- **Role:** boend
- **Akses:** Admin panel tanpa User Management

---

### 🏢 **DOMAIN: @sreunair.com (Production Accounts)**

#### 👑 Administrator
- **Email:** admin@sreunair.com
- **Password:** adminsreunivnair2025
- **Role:** admin
- **Akses:** Full access (semua fitur + User Management)

#### 🎯 Anggota BOEND
- **Email:** boend@sreunair.com
- **Password:** sreunivnair2025
- **Role:** boend
- **Akses:** Admin panel tanpa User Management

---

## 🚀 **CARA LOGIN**

1. **Buka:** http://127.0.0.1:8000/login
2. **Pilih salah satu akun dari daftar di atas**
3. **Masukkan email dan password**
4. **Setelah login berhasil, akan redirect ke admin dashboard**

---

## 🛡️ **ROLES & PERMISSIONS**

### **Role: admin (Super Admin)**
✅ Dashboard Access  
✅ Event Management  
✅ Blog Management  
✅ Project Management  
✅ Merchandise Management  
✅ **User Management** (Exclusive)

### **Role: boend (BOEND)**
✅ Dashboard Access  
✅ Event Management  
✅ Blog Management  
✅ Project Management  
✅ Merchandise Management  
❌ User Management (Restricted)

---

## 🔧 **TROUBLESHOOTING**

### Jika Email Tidak Ditemukan:
1. Pastikan menggunakan email yang tepat dari daftar di atas
2. Cek case-sensitive (huruf besar/kecil)
3. Pastikan tidak ada spasi di awal/akhir email

### Jika Password Salah:
1. **Testing accounts:** password123
2. **Production accounts:** 
   - Admin: adminsreunivnair2025
   - BOEND: sreunivnair2025

### Reset Database (jika perlu):
```bash
php artisan migrate:fresh --seed
```

---

## 📱 **QUICK TEST**

**Recommended untuk testing:**
- **Admin:** admin@sre.unair.ac.id / password123
- **BOEND:** boend@sre.unair.ac.id / password123

**Untuk production:**
- **Admin:** admin@sreunair.com / adminsreunivnair2025  
- **BOEND:** boend@sreunair.com / sreunivnair2025