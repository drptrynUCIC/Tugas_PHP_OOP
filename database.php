<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <main role="main">
        <div class="container mt-5">
            <h1>DataTable</h1>
            <p>Ini adalah contoh halaman DataTable website yang saya buat</p>
            <!-- Contoh Tabel Bootstrap -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">SKS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introduction to HTML & CSS</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>JavaScript Fundamentals</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Responsive Web Design</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Introduction to Backend Development </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Database Design & SQL</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>PHP Programming</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Laravel Framework</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>React.js</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Node.js & Express.js</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>RESTful API Development</td>
                        <td>3</td>
                    </tr>
                    <!-- Isi tabel dapat diganti sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </main>
    <!-- Script Bootstrap (diperlukan jQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>