<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <tbody>
        <!-- Pembatas -->
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="img/profilediar.jpg" class="rounded" width="100%">
                </div>
                <div class="col-md-6">
                    Informasi Pribadi
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Informasi Ku</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">Nama Lengkap</div>
                                <div class="col-md-6">: Diar Putri Yani</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">Tempat, Tanggal Lahir</div>
                                <div class="col-md-6">: Cirebon, 16 April</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">Pendidikan</div>
                                <div class="col-md-6">: Mahasiswi</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">Universitas</div>
                                <div class="col-md-6">: Universitas Catur Insan Cendekia</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">Program Studi</div>
                                <div class="col-md-6">: TEKNIK INFORMATIKA - S1</div>
                            </div>
                            <!-- <div class="row">
       <div class="col-md-6">Alamat</div>
       <div class="col-md-6">: Alamat Kita</div>
    </div> -->
                            <div class="row">
                                <div class="col-md-6">Riwayat Pendidikan</div>
                                <div class="col-md">:</div>
                                <div class="col-md-6"></div>
                                <ul>
                                    <li>SDN 1 KOTA CIREBON</li>
                                    <li>SMP 1 KOTA CIREBON</li>
                                    <li>SMA 1 KOTA CIREBON</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                Rengalaman Organisasi
                <div class="list-group">
                    <div class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Himpunan Mahasiswa</h5>
                        <p class="mb-1">Science and Education</p>
                        <small>2022 - 2023</small>
                    </div>
                    <div class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Himpunan Mahasiswa</h5>
                        <p class="mb-1">Bendahara Umum 1</p>
                        <small>2023 - 2024</small>
                    </div>
                    <div class="container">
                        <!-- <>WhatsApp</a> -->
                        <script src="js/scripts.js"></script>
                    </div>
                </div>
            </div>
        </div>
        <!-- pembatas -->
        <div class="container">
            <div class="text-center mb-5">
                <h4></h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <a href="javascript:void(0);" onclick="openWhatsApp('6285864843258')" class="button">
                        <img src="https://seeklogo.com/images/W/whatsapp-icon-logo-6E793ACECD-seeklogo.com.png" width="70px" alt="WhatsApp">
                    </a>
                    <p class="mt-2 mb-0">Nomor WhatsApp</p>
                </div>
                <div class="col-md-3 text-center">
                    <a href="javascript:void(0);" onclick="openInstagram('drptryn')" class="button">
                        <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" width="60px" alt="Instagram">
                    </a>
                    <p class="mt-2 mb-0">Akun Instagram</p>
                </div>
                <div class="col-md-3 text-center">
                    <a href="javascript:void(0);" onclick="openTelegram('drptryn')" class="button">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/2048px-Telegram_2019_Logo.svg.png" width="60px" alt="Telegram">
                    </a>
                    <p class="mt-2 mb-0">Akun Telegram</p>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </tbody>
</body>

</html>