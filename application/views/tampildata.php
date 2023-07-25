<!DOCTYPE html>
<html>
<style>
    .u51f372b5df04a0ab7564440de68e2a06 {
        padding: 0px;
        margin: 0;
        padding-top: 1em !important;
        padding-bottom: 1em !important;
        width: 100%;
        display: block;
        font-weight: bold;
        background-color: #eaeaea;
        border: 0 !important;
        border-left: 4px solid #34495E !important;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17);
        -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17);
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17);
        text-decoration: none;
    }

    .u51f372b5df04a0ab7564440de68e2a06:active,
    .u51f372b5df04a0ab7564440de68e2a06:hover {
        opacity: 1;
        transition: opacity 250ms;
        webkit-transition: opacity 250ms;
        text-decoration: none;
    }

    .u51f372b5df04a0ab7564440de68e2a06 {
        transition: background-color 250ms;
        webkit-transition: background-color 250ms;
        opacity: 1;
        transition: opacity 250ms;
        webkit-transition: opacity 250ms;
    }

    .u51f372b5df04a0ab7564440de68e2a06 .ctaText {
        font-weight: bold;
        color: inherit;
        text-decoration: none;
        font-size: 16px;
    }

    .u51f372b5df04a0ab7564440de68e2a06 .postTitle {
        color: #000000;
        text-decoration: underline !important;
        font-size: 16px;
    }

    .u51f372b5df04a0ab7564440de68e2a06:hover .postTitle {
        text-decoration: underline !important;
    }
</style>
</a></div>

<head>
    <title>Rekrutmen Tim Develop Mahkamah Agung RI</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <style>
        body {
            font-family: 'Oswald', sans-serif;
            font-weight: 300;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Data Rekrutmen Tim Develop Mahkamah Agung RI
                    </div>
                    <div class="card-body">
                        <div class="responsive">
                            <table id="list_data" class="table display row-border table-striped compact" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 30px;">No</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Stuan Kerja</th>
                                        <th>Posisi Pilihan</th>
                                        <th>Bahasa Pemrograman</th>
                                        <th>Framework</th>
                                        <th>Database</th>
                                        <th>Tools</th>
                                        <th>Pernah Membuat Mobile Apps</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($record as $dt) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no; ?></td>
                                            <td><?php echo $dt['timestamp']; ?></td>
                                            <td><?php echo $dt['nama']; ?></td>
                                            <td><?php echo $dt['nip']; ?></td>
                                            <td><?php echo $dt['satuan_kerja']; ?></td>
                                            <td><?php echo $dt['posisi_yang_dipilih']; ?></td>
                                            <td><?php echo $dt['bahasa_pemrograman_yang_dikuasai']; ?></td>
                                            <td><?php echo $dt['framework_bahasa_pemrograman_yang_dikuasai']; ?></td>
                                            <td><?php echo $dt['database_yang_dikuasai']; ?></td>
                                            <td><?php echo $dt['tools_yang_dikuasai']; ?></td>
                                            <td><?php echo $dt['pernah_membuat_mobile_apps']; ?></td>
                                            <td><?php echo ('detail'); ?></td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#list_data').DataTable();
            });
        </script>
</body>

</html>