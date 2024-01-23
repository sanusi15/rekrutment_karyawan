<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        .table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .table td,
        #table th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #table tbody tr td {
            padding: 2px;
        }


        .table th {
            color: white;
        }

        .tocenter {
            text-align: center;
        }

        .pl {
            padding-left: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .txtsmall {
            font-size: 11px;
        }

        .tableFoot {
            position: absolute;
            bottom: 0;
            margin-bottom: 120px;
        }

        .tableFoot tr {
            text-align: center;
        }

        .tableFoot tr td:nth-child(2) {
            padding-bottom: 80px;
        }
    </style>
</head>

<body>
    <div style="position: relative;">
        <table class="tableHead" width="100%">
            <tr>
                <td rowspan="2" width="10%">
                    <img src="<?= base_url('assets/img/dashboard/logoP.png'); ?>" height="50px" alt="logo">
                </td>
                <td width="90%" colspan="3" class="tocenter tittle">Laporan Daftar Pelamar Kerja <br>PT. MULTI TALENT UNIVERSAL</td>
            </tr>
            <tr>
                <td colspan="3" class="tocenter txtsmall">Tanggal :<?= $date1; ?> s/d <?= $date2; ?></td>
            </tr>
            <tr>
                <td colspan="4" height="10px"></td>
            </tr>
        </table>
        <table class="table" width="100%">
            <tr>
                <td class="tocenter txtsmall">No</td>
                <td class="tocenter txtsmall">Posisi Lamar</td>
                <td class="tocenter txtsmall">Nama Pelamar</td>
                <td class="tocenter txtsmall">No KTP</td>
                <td class="tocenter txtsmall">Email</td>
                <td class="tocenter txtsmall">Jenis Kelamin</td>
                <td class="tocenter txtsmall">Status Nikah</td>
                <td class="tocenter txtsmall">Kewarganegaraan</td>
                <td class="tocenter txtsmall">Agama</td>
                <td class="tocenter txtsmall">Alamat Domisili</td>
                <td class="tocenter txtsmall">Status Lamaran</td>
            </tr>
            <?php $i = 1;
            foreach ($daftar as $d) : ?>
                <tr>
                    <td class="tocenter txtsmall"><?= $i++; ?></td>
                    <td class="txtsmall"><?= $d['posisi']; ?></td>
                    <td class="txtsmall"><?= $d['nama_lengkap']; ?></td>
                    <td class="txtsmall"><?= $d['no_ktp']; ?></td>
                    <td class="txtsmall"><?= $d['email']; ?></td>
                    <td class="txtsmall"><?= $d['gender'] == 'lk' ? 'Laki-Laki' : 'Perempuan'; ?></td>
                    <td class="txtsmall"><?= $d['status_kawin']; ?></td>
                    <td class="txtsmall"><?= $d['kewarganegaraan']; ?></td>
                    <td class="txtsmall"><?= $d['agama']; ?></td>
                    <td class="txtsmall"><?= $d['alamat_domisili']; ?></td>
                    <td class="txtsmall"><?= $d['status_lamaran']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <table class="tableFoot" width="100%">
            <tr>
                <td>Menyetujui</td>
                <td></td>
                <td>Mengetahui</td>
            </tr>
            <tr>
                <td>HRD</td>
                <td></td>
                <td>Manajer</td>
            </tr>
        </table>
    </div>
</body>

</html>