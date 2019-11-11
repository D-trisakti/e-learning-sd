<?php

ob_start();
?>
<page>
<html> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>LAPORAN DATA TENAGA PENGAJAR</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/laporan.css" />
    </head>
    <body>

        <div id="title" table table-position="center">
        KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN <br> 
        KOTA CIMAHI <br>
        SEKOLAH DASAR NEGERI 2 CIMAHI
        </div>

    <hr>

    <br>
    <div align="center">
            DAFTAR SISWA
           
</div>

    <div id="isi">
      <table width="100%" border="0.3" cellpadding="0" cellspacing="0" align ="right">
        <thead style="background:#e8ecee">
          <tr class="tr-title">
            <th height="20" align="center" valign="middle">NO.</th>
            <th height="20" align="center" valign="middle">NISN</th>
            <th height="20" align="center" valign="middle">NAMA SISWA</th>
            <th height="20" align="center" valign="middle">KELAS</th>
            
           
          </tr>
        </thead>
        <tbody >
       <?php
        if (!empty($siswa)) {
            $no = 1;
            foreach ($siswa as $data) {
        // menampilkan isi tabel dari database ke tabel di aplikasi
                echo "  <tr>
                    <td width='80' height='13' align='center' valign='middle'>$no</td>
                    <td width='100' height='13' align='center' valign='middle'>$data[nis]</td>
                    <td width='200' height='13' align='center' valign='middle'>$data[nama]</td>
                    <td width='200' height='13' align='center' valign='middle'>$data[kelas]</td>
                    
                    
                    </tr>";
                $no++;
            }
        }
        ?>


        </tbody>
    </table>
    <div id="footer-tanggal">
    </div>
    <div id="footer-jabatan">
        Kepala Sekolah <br>
    </div>

    <div id="footer-nama">
        Lilis Kusmiati S.PD,MM <br>
        NIP :18845221775
    </div>
</div>

</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
</page>

<?php
$filename = "LAPORAN DATA SISWA.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">' . ($content) . '</page>';
// panggil library html2pdf
require_once '././assets/html2pdf_v4.03/html2pdf.class.php';
try {
    $html2pdf = new HTML2PDF('P', 'F4', 'en', false, 'ISO-8859-15', array(10, 10, 10, 10));
    $html2pdf->pdf->SetDisplayMode('fullpage');

    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);

    header("Content-type:application/pdf");

} catch (HTML2PDF_exception $e) {
    echo $e;
}

?>



