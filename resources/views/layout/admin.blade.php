<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard') | Dilesin Admin</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body, html {
      font-family: 'Poppins', sans-serif;
      background-color: #F4F7FC; 
      overflow-x: hidden; 
    }

    /* --- Sidebar (Default Kolaps 100px) --- */
    .sidebar {
      background-color: #FFFFFF; 
      height: 100vh;
      padding-top: 1.5rem;
      color: #333;
      position: fixed;
      width: 100px; /* Default kecil (logo/ikon saja) */
      z-index: 1040;
      /* Transisi untuk 'width', bukan 'margin-left' */
      transition: width 0.3s ease-in-out; 
      margin-left: 0;
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.05); 
      border-right: none;
    }

    /* Brand di sidebar */
    .sidebar .sidebar-brand {
      font-size: 1.5rem;
      font-weight: 600;
      /* (WARNA 1) Ganti brand jadi Pink */
      color: #EC4899; 
      text-align: center; /* Pastikan ikon di tengah */
      padding-left: 0;
    }
    .sidebar-brand-text {
      display: none; /* Sembunyikan teks brand */
    }

    /* Link sidebar */
    .sidebar a {
      color: #9CA3AF; 
      text-decoration: none;
      display: block;
      padding: 15px 0;
      border-radius: 12px;
      margin: 8px 15px;
      transition: all 0.3s;
      font-weight: 500;
      text-align: center; /* Ikon di tengah */
    }
    .sidebar-link-text {
      display: none; /* Sembunyikan teks link */
    }
    .sidebar a i {
      font-size: 1.3rem;
      margin-right: 0 !important; 
    }

    /* (WARNA 2) Style link aktif/hover baru (Pink) */
    .sidebar a.active, .sidebar a:hover {
      background-color: #FCE7F3; /* Latar pink muda */
      color: #EC4899; /* Ikon jadi pink */
    }

    /* --- Main Content --- */
    .main-content {
      margin-left: 100px; /* Sesuaikan dengan sidebar kolaps */
      padding: 0;
      /* Transisi untuk 'margin-left' */
      transition: margin-left 0.3s ease-in-out; 
    }

    /* --- Header --- */
    .header {
      background-color: #FFFFFF;
      border-bottom: 1px solid #EBF2F9;
      padding: 1.25rem 1.5rem;
      font-weight: 600;
      font-size: 20px;
      color: #0f172a;
      box-shadow: none; 
      display: flex;
      align-items: center;
    }
    
    .content-wrapper {
        padding: 1.5rem;
    }

    .btn-toggle-menu {
        background-color: #F4F7FC;
        margin-right: 1rem; 
        border: 1px solid #EBF2F9;
    }
    .btn-toggle-menu:hover {
        background-color: #EBF2F9;
    }
    
    /* --- Footer --- */
    footer {
      text-align: center;
      color: #94a3b8;
      font-size: 14px;
      padding: 20px;
      margin-top: 30px;
      background-color: #FFFFFF;
      border-top: 1px solid #EBF2F9;
      box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.02);
    }

    /* --- STYLE GLOBAL (Soft UI) --- */
    
    /* (WARNA 3) Tombol Primer (Pink) */
    .btn {
        border-radius: 10px;
        font-weight: 500;
        padding: 10px 20px;
    }
    .btn-primary {
      background: linear-gradient(90deg, #EC4899, #BE185D); 
      border: none;
      /* (WARNA 4) Shadow Tombol (Pink) */
      box-shadow: 0 4px 12px rgba(236, 72, 153, 0.3);
    }
    .btn-danger, .btn-info, .btn-warning {
        border-radius: 10px;
    }

    /* Card */
    .card {
        border: none;
        border-radius: 16px; 
        box-shadow: 0 10px 30px rgba(17, 24, 39, 0.07); 
        background: #FFFFFF;
    }
    
    /* Tabel */
    .table {
        border-radius: 12px;
        overflow: hidden;
    }
    .table th {
      background-color: #F9FAFB;
      color: #374151;
      font-weight: 600;
      border-bottom: 1px solid #EBF2F9;
    }
    .table td {
        vertical-align: middle;
    }

    /* --- Logic Responsif --- */

    /* (LOGIKA BARU) Tampilan Desktop (Expand/Collapse) */
    @media (min-width: 993px) {
      /* Saat burger di-klik (sidebar-toggled) */
      body.sidebar-toggled .sidebar {
        width: 250px; /* Sidebar jadi LEBAR */
      }
      body.sidebar-toggled .main-content {
        margin-left: 250px; /* Konten geser */
      }
      
      /* Tampilkan Teks saat expand */
      body.sidebar-toggled .sidebar .sidebar-brand-text,
      body.sidebar-toggled .sidebar .sidebar-link-text {
        display: inline-block; /* Tampilkan teks */
      }
      
      /* Atur ulang style brand & link saat expand */
      body.sidebar-toggled .sidebar .sidebar-brand {
          padding-left: 1.5rem;
          text-align: left;
      }
      body.sidebar-toggled .sidebar a {
        text-align: left; /* Teks jadi rata kiri */
        padding: 12px 20px; /* Padding normal */
      }
      body.sidebar-toggled .sidebar a i {
        font-size: 1.1rem; /* Ikon sedikit mengecil */
        margin-right: 0.5rem !important; /* Beri jarak ke teks */
      }
    }

    /* Tampilan Mobile (Logika Overlay - TIDAK BERUBAH) */
    @media (max-width: 992px) {
      .sidebar {
        margin-left: -100px; /* Sembunyi default */
      }
      .main-content {
        margin-left: 0; 
      }
      body.sidebar-toggled .sidebar {
        margin-left: 0; /* Muncul sebagai overlay */
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        width: 250px; /* Buat lebar saat di mobile */
      }
      body.sidebar-toggled .sidebar-overlay {
        display: block;
      }
      
      /* Saat di mobile, teks langsung tampil */
      body.sidebar-toggled .sidebar .sidebar-brand-text,
      body.sidebar-toggled .sidebar .sidebar-link-text {
          display: inline-block;
      }
      body.sidebar-toggled .sidebar .sidebar-brand {
          padding-left: 1.5rem;
          text-align: left;
      }
      body.sidebar-toggled .sidebar a {
          text-align: left;
          padding: 12px 20px;
      }
      body.sidebar-toggled .sidebar a i {
          font-size: 1.1rem;
          margin-right: 0.5rem !important;
      }
    }
    
    /* --- Overlay (Mobile) --- */
    .sidebar-overlay {
        display: none;
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.5);
        z-index: 1039; 
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h4 class="text-center mb-4 sidebar-brand">
      <i class="fa-solid fa-layer-group"></i>
      <span class="sidebar-brand-text">Dilesin Admin</span>
    </h4>
    
    <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}" title="Dashboard">
      <i class="fa-solid fa-home me-2"></i> 
      <span class="sidebar-link-text">Dashboard</span>
    </a>
    
    <a href="/admin/students" class="{{ request()->is('admin/students*') ? 'active' : '' }}" title="Data Siswa">
      <i class="fa-solid fa-users me-2"></i> 
      <span class="sidebar-link-text">Data Siswa</span>
    </a>

    <a href="/admin/grades" class="{{ request()->is('admin/grades*') ? 'active' : '' }}" title="grade Siswa">
      <i class="fa-solid fa-users me-2"></i> 
      <span class="sidebar-link-text">Grade</span>
    </a>
    
    <a href="#" title="Settings">
      <i class="fa-solid fa-cog me-2"></i> 
      <span class="sidebar-link-text">Settings</span>
    </a>
  </div>

  <div class="main-content">
    <div class="header">
      @yield('title', 'Dashboard')
    </div>
    <div class="content-wrapper">
      @yield('content')
    </div>
    
    <footer>
      © {{ date('Y') }} Dilesin Academy. All rights reserved.
    </footer>
  </div>

  <div class="sidebar-overlay"></div>

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      const toggleBtn = document.createElement('button');
      toggleBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
      toggleBtn.className = 'btn btn-light btn-toggle-menu'; 
      
      const header = document.querySelector('.header');
      if (header) {
        header.prepend(toggleBtn);
      } else {
        document.body.appendChild(toggleBtn);
      }

      const overlay = document.querySelector('.sidebar-overlay');

      const toggleSidebar = () => {
        document.body.classList.toggle('sidebar-toggled');
      };

      toggleBtn.onclick = toggleSidebar;
      
      if (overlay) {
          overlay.onclick = () => {
            document.body.classList.remove('sidebar-toggled');
          };
      }
    });
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  @stack('scripts') 

</body>
</html>