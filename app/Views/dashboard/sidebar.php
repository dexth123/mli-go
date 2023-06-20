<style>
    .sidebar {
        position: fixed;
        top: 65px;
        left: 0;
        width: 100px; /* Mengatur lebar sidebar */
        height: 100vh; /* Mengatur tinggi sidebar sesuai tinggi layar */
        background-color: #f8f9fa;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 999;
    }

    .content {
        margin-left: 200px; /* Mengatur margin kiri agar konten tidak tertutupi oleh sidebar */
        padding: 20px;
    }

    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 999;
        background-color: #12AD2B;
        color: #fff;
        padding: 10px 20px;
    }

    .navbar .navbar-brand {
        color: #fff;
        font-weight: bold;
    }
</style>

<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item sidebar-item">
            <a class="nav-link" href="/dashboard/profile"><i class="far fa-user"></i></a>
        </li>
        <li class="nav-item sidebar-item">
            <a class="nav-link" href="/dashboard/order"><i class="fa-solid fa-basket-shopping"></i></a>
        </li>
        <li class="nav-item sidebar-item">
            <a class="nav-link" href="/dashboard/product"><i class="fa-solid fa-store"></i></a>
        </li>
        <li class="nav-item sidebar-item">
            <a class="nav-link" href="/dashboard/logout"><i class="fas fa-sign-out-alt"></i></a>
        </li>
    </ul>
</div>

