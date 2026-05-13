<div class="container py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold text-white">Dashboard <span class="text-info">Navigasi</span></h2>
            <p class="text-secondary">Selamat datang, Rafi! Pilih menu di bawah untuk mulai menjelajah.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <a href="index.php?hal=home" class="btn-dashboard">
                <div class="icon-circle bg-primary-subtle text-primary"><i class="bi bi-house-door"></i></div>
                <h5>Home Profile</h5>
                <p>Lihat detail profil dan biografi singkat saya.</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="index.php?hal=about" class="btn-dashboard">
                <div class="icon-circle bg-success-subtle text-success"><i class="bi bi-person-badge"></i></div>
                <h5>About Me</h5>
                <p>Informasi pendidikan dan pengalaman organisasi.</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="index.php?hal=contact" class="btn-dashboard">
                <div class="icon-circle bg-info-subtle text-info"><i class="bi bi-chat-dots"></i></div>
                <h5>Contact Me</h5>
                <p>Hubungi saya melalui WhatsApp, IG, atau Email.</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="index.php?hal=produk_list" class="btn-dashboard">
                <div class="icon-circle bg-warning-subtle text-warning"><i class="bi bi-mortarboard"></i></div>
                <h5>My Studies</h5>
                <p>Kelola dan lihat daftar riwayat pendidikan Anda.</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="index.php?hal=jenis_list" class="btn-dashboard">
                <div class="icon-circle bg-danger-subtle text-danger"><i class="bi bi-layers"></i></div>
                <h5>Level / Jenjang</h5>
                <p>Setting daftar tingkatan pendidikan (SD, SMA, S1).</p>
            </a>
        </div>

        <div class="col-md-4">
            <?php if (!isset($_SESSION['MEMBER'])): ?>
                <a href="index.php?hal=login" class="btn-dashboard border-info">
                    <div class="icon-circle bg-info text-white shadow-sm"><i class="bi bi-box-arrow-in-right"></i></div>
                    <h5 class="text-info">Login System</h5>
                    <p>Masuk ke sistem untuk mengelola data riwayat studi.</p>
                </a>
            <?php else: ?>
                <a href="logout.php" class="btn-dashboard border-danger">
                    <div class="icon-circle bg-danger text-white shadow-sm"><i class="bi bi-power"></i></div>
                    <h5 class="text-danger">Logout</h5>
                    <p>Keluar dari akun <strong>
                            <?= $_SESSION['MEMBER']['username'] ?>
                        </strong> Anda sekarang.</p>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
    .btn-dashboard {
        display: block;
        background: #1e1e24;
        border: 1px solid #2d2d35;
        padding: 30px;
        border-radius: 20px;
        text-decoration: none;
        transition: all 0.3s ease;
        height: 100%;
    }

    .btn-dashboard:hover {
        transform: translateY(-10px);
        border-color: #0dcaf0;
        background: #252b36;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .icon-circle {
        width: 60px;
        height: 60px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .btn-dashboard h5 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .btn-dashboard p {
        color: #8a8a8e;
        font-size: 0.9rem;
        margin-bottom: 0;
        line-height: 1.5;
    }
</style>