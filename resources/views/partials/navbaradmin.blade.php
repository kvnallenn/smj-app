<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name">Sentra Medan Jaya</a></div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav_list">
        <li>
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search...">
        </li>
        <li>
            <a href="/admin">
                <i class='bx bx-home'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/admin/pesanan">
                <i class='bx bx-clipboard'></i>
                <span class="links_name">Penjualan</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-message-rounded-dots' ></i>
                <span class="links_name">Pesan</span>
            </a>
        </li>
        <li>
            <a href="/admin/adminproduk">
                <i class='bx bx-package'></i>
                <span class="links_name">Produk</span>
            </a>
        </li>
        <li>
            <a href="/admin/kategoriproduk">
                <i class='bx bxs-box'></i>
                <span class="links_name">Kategori</span>
            </a>
        </li>
        <li>
            <a href="/admin/daftartransfer">
                <i class='bx bxs-wallet'></i>
                <span class="links_name">Daftar Transfer</span>
            </a>
        </li>
    </ul>
    <div class="profile_content fixed">
        <div class="profile">
            <div class="profile_details">
                <img src="/img/assets/logo-admin.png" alt="">
                <div class="name_job">
                    <div class="name"><strong>{{ auth()->user()->name }}</strong></div>
                    <div class="job">
                        Admin
                    </div>
                </div>
            </div>
            <form action="/logout" method="post">
                @csrf
            <button type="submit" class="btn btn-dark"><i class="bx bx-log-out" id="log_out"></i></button>
            </form>
        </div>
    </div>
</div>