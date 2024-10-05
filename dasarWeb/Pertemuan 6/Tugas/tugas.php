<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="jquery-3.7.1.js"></script>
    <script>
      $(document).ready(function () {
        $("#flip").click(function () {
          $("#kotak2").slideToggle("slow");
        });
      });

      <?php
      $data = [
        [
          "nama" => "Andi",
          "umur" => 15,
          "kelas" => "10A",
          "alamat" => "Malang"
        ],
        [
          "nama" => "Siti",
          "umur" => 16,
          "kelas" => "10B",
          "alamat" => "Batu"
        ],
        [
          "nama" => "Budi",
          "umur" => 15,
          "kelas" => "10A",
          "alamat" => "Dinoyo"
        ],
        [
          "nama" => "Anton",
          "umur" => 25,
          "kelas" => "15A",
          "alamat" => "Dinoyo"
        ]
      ];
      ?>
    </script>
  </head>
  <body>
    <h1>Data Siswa</h1>
    <div id="flip">Click to show database</div>
    <div id="kotak2" style="display: none">
      <table>
        <tr id="header">
          <td>Nama</td>
          <td>Umur</td>
          <td>Kelas</td>
          <td>Alamat</td>
        </tr>
        <?php
        $totalUmur = 0;
        $jumlahSiswa = count($data);
        foreach ($data as $siswa) {
          echo "<tr id='content'>";
          echo "<td>{$siswa['nama']}</td>";
          echo "<td>{$siswa['umur']}</td>";
          echo "<td>{$siswa['kelas']}</td>";
          echo "<td>{$siswa['alamat']}</td>";
          echo "</tr>";
          $totalUmur += $siswa['umur'];
        }
        $rataUmur = $totalUmur / $jumlahSiswa;
        ?>
        <tr id="content">
          <td>Rata - rata</td>
          <td id="rata"><?php echo $rataUmur; ?></td>
        </tr>
      </table>
    </div>
  </body>
</html>
