<style>
    .contact-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-top: 20px;
    }

    .contact-card {
        background: #1e1e24;
        border: 1px solid #2d2d35;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .contact-card:hover {
        transform: translateY(-10px);
        border-color: #0dcaf0;
        box-shadow: 0 10px 30px rgba(13, 202, 240, 0.1);
    }

    /* Lingkaran hiasan di belakang ikon */
    .icon-box {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        transition: all 0.3s ease;
    }

    .icon-box img {
        width: 45px;
        height: 45px;
        object-fit: contain;
    }

    .contact-card h5 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .contact-card p {
        color: #adb5bd;
        font-size: 0.9rem;
        margin-bottom: 20px;
        /* Memotong teks email yang kepanjangan agar tetap rapi */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .btn-contact {
        background: transparent;
        border: 1px solid #495057;
        color: #fff;
        border-radius: 50px;
        padding: 8px 25px;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-contact:hover {
        background: #0dcaf0;
        border-color: #0dcaf0;
        color: #121212;
        font-weight: 600;
    }
</style>

<div class="container pb-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h2 class="text-white fw-bold">Let's <span class="text-info">Connect</span></h2>
            <p class="text-secondary">Ayo saling terhubung dengan saya!</p>
        </div>
    </div>

    <div class="contact-wrapper">
        <div class="contact-card">
            <div class="icon-box">
                <img src="img/ig.png" alt="Instagram">
            </div>
            <h5>Instagram</h5>
            <p>@rapinrrr</p>
            <a href="https://www.instagram.com/rapinrrr/" target="_blank" class="btn-contact">Kunjungi</a>
        </div>

        <div class="contact-card">
            <div class="icon-box">
                <img src="img/whatsapp.png" alt="WhatsApp">
            </div>
            <h5>WhatsApp</h5>
            <p>089530640076</p>
            <a href="https://wa.me/6289530640076" target="_blank" class="btn-contact">Chat Sekarang</a>
        </div>

        <div class="contact-card">
            <div class="icon-box">
                <img src="img/gmail.png" alt="Email">
            </div>
            <h5>Email</h5>
            <p title="0110225035@student.nurulfikri.ac.id">0110225035@student...</p>
            <a href="mailto:0110225035@student.nurulfikri.ac.id" class="btn-contact">Kirim Pesan</a>
        </div>
    </div>
</div>