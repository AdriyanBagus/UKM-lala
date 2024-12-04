<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>padus</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <style>
       body {
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #f4f6f9;
    margin: 0;
    padding: 0;
}

.ukm-detail-container {
    max-width: 850px;
    margin: 40px auto;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 0;
}

.ukm-detail-header {
    background-color: #002266; /* New Dark Blue */
    color: #fff;
    text-align: center;
    padding: 30px 0;
    border-bottom: 5px solid #001d4d; /* Slightly darker shade */
}

.ukm-detail-header h1 {
    font-size: 2.5rem;
    margin: 0;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff; /* White color for the title */
}

.ukm-detail-content {
    padding: 40px 30px;
    background-color: #f9f9f9;
}

.section-title {
    font-size: 1.8rem;
    color: #002266; /* New Dark Blue */
    margin-top: 30px;
    border-bottom: 2px solid #002266; /* New Dark Blue */
    padding-bottom: 10px;
    font-weight: bold;
}

.ukm-detail p {
    line-height: 1.8;
    color: #555;
    font-size: 1rem;
    margin-top: 20px;
    text-align: justify;
}

.ukm-detail ul {
    padding-left: 20px;
    list-style-type: square;
    color: #333;
    font-size: 1.1rem;
}

.ukm-image {
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin-top: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-info {
    text-align: center;
    margin-top: 40px;
    font-weight: bold;
    font-size: 1.1rem;
}

.contact-info a {
    color: #002266; /* New Dark Blue */
    text-decoration: none;
    font-weight: normal;
}

.contact-info a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .ukm-detail-container {
        margin: 20px;
    }

    .section-title {
        font-size: 1.5rem;
    }

    .ukm-detail-content {
        padding: 20px 15px;
    }

    .contact-info {
        font-size: 1rem;
    }
}

    </style>
   </head>
   <body class="main-layout inner_page">
      <div class="header">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-2 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.html"><img src="images/logo.png" alt="Logo" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="{{ url('/') }}">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/about') }}">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/rekomendasi') }}">Rekomendasi</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/recruitment') }}">Recruitment</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/forum') }}">Forum Diskusi</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/contact') }}">Bantuan</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      
       <!-- Main Container -->
    <div class="ukm-detail-container">
        <!-- Header Section -->
        <div class="ukm-detail-header">
            <h1>UKM Paduan Suara</h1>
        </div>

        <!-- Content Section -->
        <div class="ukm-detail-content">
            <!-- Description Section -->
            <div class="description">
                <h2 class="section-title">Tentang UKM Paduan Suara</h2>
                <p>UKM Paduan Suara adalah sebuah klub paduan suara yang memungkinkan mahasiswa mengembangkan kemampuan vokal, berpartisipasi dalam pertunjukan, dan berkompetisi dalam berbagai acara.</p>
            </div>

             <!-- Benefits Section -->
             <div class="benefits">
                <h2 class="section-title">Manfaat Bergabung</h2>
                <ul>
                    <li>Meningkatkan keterampilan vokal</li>
                    <li>Memperluas jaringan sosial</li>
                    <li>Menambah kepercayaan diri melalui penampilan</li>
                </ul>
            </div>

            <!-- Activities Section -->
            <div class="activities">
                <h2 class="section-title">Kegiatan</h2>

                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/images/padus1.JPG" alt="Penampilan Paduan Suara" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Sesi Latihan Mingguan</h5>
                                <p class="card-text">Setiap minggu, anggota UKM Paduan Suara melakukan latihan rutin untuk meningkatkan keterampilan vokal dan persiapan untuk penampilan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/images/padus_activity2.jpg" alt="Penampilan Paduan Suara" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Penampilan Publik dan Konser</h5>
                                <p class="card-text">Anggota UKM Paduan Suara berkesempatan untuk tampil di berbagai acara publik dan konser, menampilkan bakat mereka di depan audiens.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/images/padus_activity3.jpg" alt="Penampilan Paduan Suara" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Kompetisi dan Festival</h5>
                                <p class="card-text">UKM Paduan Suara juga berpartisipasi dalam kompetisi dan festival paduan suara untuk menguji kemampuan mereka di tingkat yang lebih tinggi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <p>Hubungi kami di: <a href="mailto:padus@poltekharber.edu">padus@poltekharber.edu</a></p>
            </div>
        </div>
    </div>

      <!-- Keep the footer section -->
      <footer>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2024 UKM Paduan Suara | All Rights Reserved.</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!-- Scripts -->
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
