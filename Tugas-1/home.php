<style>
  .ultra-wide-card {
    display: flex;
    align-items: stretch;
    background: #1e1e24;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid #2d2d35;
    transition: all 0.3s ease;
    max-width: 1100px;
    /* Kita buat sangat panjang ke kanan */
    margin: 30px auto;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
  }

  .ultra-wide-card:hover {
    border-color: #0dcaf0;
    transform: scale(1.01);
  }

  /* Area Foto: Kita kasih porsi 40% supaya terlihat jelas */
  .photo-section {
    flex: 0 0 40%;
    position: relative;
    min-height: 350px;
    /* Supaya fotonya tinggi dan lega */
    overflow: hidden;
  }

  .photo-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    transition: transform 0.5s ease;
  }

  .text-section {
    flex: 1;
    padding: 50px;
    /* Padding lebih luas biar kelihatan premium */
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: #1e1e24;            
  }

  .name-banner {
    font-size: 3rem;
    /* Nama makin besar dan jelas */
    font-weight: 900;
    line-height: 1;
    margin-bottom: 10px;
    letter-spacing: -1px;
  }

  .major-highlight {
    color: #0dcaf0;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 0.9rem;
    margin-bottom: 20px;
    display: block;
  }

  .bio-text {
    color: #cbd5e0;
    font-size: 1.15rem;
    line-height: 1.8;
    max-width: 500px;
    /* Membatasi lebar teks agar nyaman dibaca */
  }

  .stats-footer {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #2d2d35;
    display: flex;
    gap: 20px;
  }

  /* Responsif untuk Tablet/HP */
  @media (max-width: 992px) {
    .ultra-wide-card {
      flex-direction: column;
      max-width: 100%;
    }

    .photo-section {
      flex: 0 0 300px;
    }

    .photo-section::after {
      background: linear-gradient(to bottom, transparent, #1e1e24);
    }

    .text-section {
      padding: 30px;
    }
  }
</style>

<div class="ultra-wide-card">
  <div class="photo-section">
    <img src="img/profile.jpg" alt="Rafi Profile">
  </div>

  <div class="text-section">
    <span class="major-highlight">Informatics Engineering Student</span>

    <h1 class="name-banner">
      <span class="text-info">Rafi</span><br>
      <span class="text-white">Nur Tsaqif Akhmad</span>
    </h1>

    <p class="bio-text">
      Halo! Saya mahasiswa di <span class="text-white fw-bold">STT Terpadu Nurul Fikri</span>.
      Sedang menempuh Semester 2 dan sangat bersemangat mengeksplorasi dunia Teknologi terutama
      Web Development & UI UX Designer.
    </p>

    <div class="stats-footer">
      <div class="text-secondary small">
        <i class="bi bi-geo-alt-fill text-info"></i> Depok, West Java
      </div>
      <div class="text-secondary small">
        <i class="bi bi-calendar3 text-info"></i>  Diperbarui 4 menit lalu
      </div>
    </div>
  </div>
</div>