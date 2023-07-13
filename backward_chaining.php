<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css" />
  <Style>
    #question {
      background: #e2f2f0;
    }

    #ques {
      color: #002e42;
    }

    #ket {
      color: #002e42;
      margin-bottom: 0;
    }

    .btn {
      border: 2px solid #0bad8e;
      color: #0bad8e;
    }

    .option:hover {
      box-shadow: 0 0 40px 40px #0bad8e inset;
    }

    h1 {
      color: #152D35;
      margin-bottom: 0;
    }

    #hasil {
      color: #152D35;
    }
  </Style>
</head>

<body>

  <div id="content">
    <div id="question">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div id='ket'>
          <h2>Pemeriksaan Keluhan dan Gejala</h2>
        </div>
        <div id="ques">
          <p>G1. Apakah anda mengalami demam?</p>
          <label><input type="radio" value="Iya" name="g1" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g1">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G2. Apakah anda mengalami batuk?</p>
          <label><input type="radio" value="Iya" name="g2" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g2">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G3. Apakah anda mengalami sakit tenggorokan?</p>
          <label><input type="radio" value="Iya" name="g3" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g3">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G4. Apakah anda mengalami hidung tersumbat?</p>
          <label><input type="radio" value="Iya" name="g4" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g4">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G5. Apakah anda mengalami Malaise atau merasa lelah?</p>
          <label><input type="radio" value="Iya" name="g5" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g5">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G6. Apakah anda merasa tidak nyaman?</p>
          <label><input type="radio" value="Iya" name="g6" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g6">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G7. Apakah anda merasa kurang enak badan?</p>
          <label><input type="radio" value="Iya" name="g7" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g7">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G8. Apakah anda mengalami sakit kepala?</p>
          <label><input type="radio" value="Iya" name="g8" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g8">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G9. Apakah anda mengalami nyeri otot?</p>
          <label><input type="radio" value="Iya" name="g9" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g9">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G10. Apakah anda mengalami mual-mual?</p>
          <label><input type="radio" value="Iya" name="g10" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g10">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G11. Apakah anda mengalami muntah-muntah?</p>
          <label><input type="radio" value="Iya" name="g11" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g11">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G12. Apakah anda mengalami diare?</p>
          <label><input type="radio" value="Iya" name="g12" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g12">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G13. Apakah anda kehilangan indera perasa?</p>
          <label><input type="radio" value="Iya" name="g13" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g13">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G14. Apakah anda kehilangan penciuman?</p>
          <label><input type="radio" value="Iya" name="g14" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g14">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G15. Apakah anda mengalami sesak nafas?</p>
          <label><input type="radio" value="Iya" name="g15" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g15">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G16. Apakah nafas anda terasa kurang nyaman?</p>
          <label><input type="radio" value="Iya" name="g16" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g16">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G17. Apakah anda merasa kurang nafsu makan?</p>
          <label><input type="radio" value="Iya" name="g17" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g17">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G18. Apakah anda merasa letih dan lemas?</p>
          <label><input type="radio" value="Iya" name="g18" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g18">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G19. Apakah nafas anda sangat sesak?</p>
          <label><input type="radio" value="Iya" name="g19" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g19">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G20. Apakah anda kesulitan bernafas?</p>
          <label><input type="radio" value="Iya" name="g20" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g20">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G21. Apakah anda merasa nyeri atau sensasi tidak nyaman di dada?</p>
          <label><input type="radio" value="Iya" name="g21" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g21">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G22. Apakah kuku, bibir, dan kulit anda tampak kebiruan dan pucat?</p>
          <label><input type="radio" value="Iya" name="g22" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g22">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G23. Apakah anda membutuhkan bantuan oksigen?</p>
          <label><input type="radio" value="Iya" name="g23" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g23">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G24. Apakah anda mengalami penurunan kesadaran?</p>
          <label><input type="radio" value="Iya" name="g24" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g24">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G25. Apakah anda merasa sering mengantuk?</p>
          <label><input type="radio" value="Iya" name="g25" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g25">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G26. Apakah anda mengalami kebingungan?</p>
          <label><input type="radio" value="Iya" name="g26" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g26">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G27. Apakah anda merasa kesulitan berkonsentrasi?</p>
          <label><input type="radio" value="Iya" name="g27" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g27">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G28. Apakah anda mengalami kesulitan atah bahkan tidak bisa makan dan minum?</p>
          <label><input type="radio" value="Iya" name="g28" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g28">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G29. Apakah anda mengalami koma?</p>
          <label><input type="radio" value="Iya" name="g29" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g29">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G30. Apakah anda mengalami kejang?</p>
          <label><input type="radio" value="Iya" name="g30" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g30">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G31. Apakah anda tidak bisa bernafas sama sekali?</p>
          <label><input type="radio" value="Iya" name="g31" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g31">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G32. Apakah anda merasa sangat lemas?</p>
          <label><input type="radio" value="Iya" name="g32" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g32">Tidak</label>
        </div>
        <br />
        <div id="ques">
          <p>G33. Apakah anda mengalami penurunan tekanan darah secara drastis?</p>
          <label><input type="radio" value="Iya" name="g33" required>Iya</label>
          <label><input type="radio" value="Tidak" name="g33">Tidak</label>
        </div>
        <input class="btn option" type="submit" value="Submit" />
        <a href="index.php" class="btn option">Cancel<a>
      </form>
    </div>

    <div id="image">
      <h1>Deteksi Dini COVID-19 dengan metode Backward Chaining</h1>
      <img src="https://www.asuvictas.com.au/wp-content/uploads/2020/12/work_from_home_covid.png" alt="Covid">

      <div id="hasil">
      </div>
    </div>
  </div>


  <?php
  $ket = "Result :";
  $kategori = "Hasil Pemeriksaan Anda akan Tampil di sini";
  $penanganan = "";
  $hasil = "none";

  if (isset($_POST['g1'])) {
    $g1 = $_POST['g1'];
    $g2 = $_POST['g2'];
    $g3 = $_POST['g3'];
    $g4 = $_POST['g4'];
    $g5 = $_POST['g5'];
    $g6 = $_POST['g6'];
    $g7 = $_POST['g7'];
    $g8 = $_POST['g8'];
    $g9 = $_POST['g9'];
    $g10 = $_POST['g10'];
    $g11 = $_POST['g11'];
    $g12 = $_POST['g12'];
    $g13 = $_POST['g13'];
    $g14 = $_POST['g14'];
    $g15 = $_POST['g15'];
    $g16 = $_POST['g16'];
    $g17 = $_POST['g17'];
    $g18 = $_POST['g18'];
    $g19 = $_POST['g19'];
    $g20 = $_POST['g20'];
    $g21 = $_POST['g21'];
    $g22 = $_POST['g22'];
    $g23 = $_POST['g23'];
    $g24 = $_POST['g24'];
    $g25 = $_POST['g25'];
    $g26 = $_POST['g26'];
    $g27 = $_POST['g27'];
    $g28 = $_POST['g28'];
    $g29 = $_POST['g29'];
    $g30 = $_POST['g30'];
    $g31 = $_POST['g31'];
    $g32 = $_POST['g32'];
    $g33 = $_POST['g33'];
    $k1 = $k2 = $k3 = $k4 = $k5 = $k6 = $k7 = $k8 = $k9 = $k10 = $k11 = $k12 = $k13 = $k14 = $k15 = "none";

    // Rule 20
    if ($k14 == "Iya" || $k15 == "Iya" || $g33 == "Iya") {
      $hasil = "H4";
    } else {
      if ($k15 == 'none') {
        // Rule 19
        if ($g31 == "Iya" || $g32 == "Iya") {
          $k15 = "Iya";
        }
      }
      if ($k14 == 'none') {
        // Rule 18
        if ($g29 == "Iya" || $g30 == "Iya") {
          $k14 = "Iya";
        }
      }
      // Rule 20
      if ($k14 == "Iya" || $k15 == "Iya" || $g33 == "Iya") {
        $hasil = "H4";
      }
    }

    if ($hasil == 'none') {
      // Rule 17
      if ($k9 == "Iya" && $k10 == "Iya" && $k11 == "Iya" && $k12 == "Iya" && $k13 == "Iya" && $g28 == "Iya") {
        $hasil = "H3";
      } else {
        if ($k13 == 'none') {
          // Rule 16
          if ($g26 == "Iya" || $g27 == "Iya") {
            $k13 = "Iya";
          }
        }
        if ($k12 == 'none') {
          // Rule 15
          if ($g24 == "Iya" || $g25 == "Iya") {
            $k12 = "Iya";
          }
        }
        if ($k11 == 'none') {
          // Rule 14
          if ($g18 == "Iya" && $g22 == "Iya") {
            $k11 = "Iya";
          }
        }
        if ($k10 == 'none') {
          // Rule 13
          if ($g21 == "Iya" && $g23 == "Iya") {
            $k10 = "Iya";
          }
        }
        if ($k9 == 'none') {
          // Rule 12
          if ($g19 == "Iya" || $g20 == "Iya") {
            $k9 = "Iya";
          }
        }
        // Rule 17
        if ($k9 == "Iya" && $k10 == "Iya" && $k11 == "Iya" && $k12 == "Iya" && $k13 == "Iya" && $g28 == "Iya") {
          $hasil = "H3";
        }
      }
    }

    if ($hasil == 'none') {
      // Rule 11
      if ($k1 == "Iya" && $k7 == "Iya" && $k8 == "Iya") {
        $hasil = "H2";
      } else {
        if ($k8 == 'none') {
          // Rule 10
          if ($g17 == "Iya" && $g18 == "Iya") {
            $k8 = "Iya";
          }
        }
        if ($k7 == 'none') {
          // Rule 9
          if ($g15 == "Iya" || $g16 == "Iya") {
            $k7 = "Iya";
          }
        }
        if ($k1 == 'none') {
          // Rule 2
          if ($g1 == "Iya" && $g2 == "Iya") {
            $k1 = "Iya";
          }
        }
        // Rule 11
        if ($k1 == "Iya" && $k7 == "Iya" && $k8 == "Iya") {
          $hasil = "H2";
        }
      }
    }

    if ($hasil == 'none') {
      // Rule 8
      if ($k1 == "Iya" && $k2 == "Iya" && $k3 == "Iya" && $k4 == "Iya" && $k5 == "Iya" && $k6 == "Iya" && $g12 == "Iya") {
        $hasil = "H1";
      } else {
        if ($k6 == 'none') {
          // Rule 7
          if ($g13 == "Iya" && $g14 == "Iya") {
            $k6 = "Iya";
          }
        }
        if ($k5 == 'none') {
          // Rule 6
          if ($g10 == "Iya" && $g11 == "Iya") {
            $k5 = "Iya";
          }
        }
        if ($k4 == 'none') {
          // Rule 5
          if ($g8 == "Iya" && $g9 == "Iya") {
            $k4 = "Iya";
          }
        }
        if ($k3 == 'none') {
          // Rule 4
          if ($g5 == "Iya" || $g6 == "Iya" || $g7 == "Iya") {
            $k3 = "Iya";
          }
        }
        if ($k2 == 'none') {
          // Rule 3
          if ($g3 == "Iya" && $g4 == "Iya") {
            $k2 = "Iya";
          }
        }
        // Rule 8
        if ($k1 == "Iya" && $k2 == "Iya" && $k3 == "Iya" && $k4 == "Iya" && $k5 == "Iya" && $k6 == "Iya" && $g12 == "Iya") {
          $hasil = "H1";
        }
      }
    }

    if ($hasil == 'none') {
      // Rule 1
      if ($g1 == "Iya" || $g2 == "Iya" || $g3 == "Iya" || $g4 == "Iya" || $g5 == "Iya" || $g5 == "Iya" || $g7 == "Iya" || $g8 == "Iya" || $g9 == "Iya" || $g10 == "Iya" || $g11 == "Iya" || $g12 == "Iya" || $g13 == "Iya" || $g14 == "Iya") {
        $hasil = "H5";
      }
    }

    if ($hasil == 'none') {
      $hasil = "H5";
    }
  }

  if ($hasil == "H5") {
    $kategori = "Tidak Terdeteksi COVID-19";
    $penanganan = "";
  } elseif ($hasil == "H1") {
    $kategori = "COVID-19 Kategori Gejala Ringan";
    $penanganan = "Dianjurkan untuk menjalani isolasi mandiri selama minimal 10 hari sejak muncul gejala atau hasil tes PCR positif.";
  } elseif ($hasil == "H2") {
    $kategori = "COVID-19 Kategori Gejala Sedang";
    $penanganan = "Dianjurkan untuk mendapatkan perawatan dan pemantauan oleh dokter di rumah sakit.";
  } elseif ($hasil == "H3") {
    $kategori = "COVID-19 Kategori Gejala Berat";
    $penanganan = "Anda harus segera mendapatkan perawatan dokter di rumah sakit, terutama jika anda termasuk kelompok lansia, ibu hamil, atau memiliki riwayat penyakit penyerta, seperti penyakit jantung, asma, diabetes, gangguan ginjal, obesitas, atau kanker.";
  } elseif ($hasil == "H4") {
    $kategori = "COVID-19 Kategori Kritis";
    $penanganan = "Anda perlu mendapatkan penanganan dan perawatan di Unit Perawatan Intensif (ICU) rumah sakit sampai kondisi anda membaik.";
  } elseif ($hasil == "none") {
  }
  ?>

  <script>
    var hasil = document.getElementById("hasil");
    hasil.innerHTML = `<h3>
    <b><?php echo $ket; ?></b></h3>
    <p>
    <b><?php echo $kategori; ?></b>
    <br>
    <?php echo $penanganan; ?>
    </p>`;
  </script>

</body>

</html>