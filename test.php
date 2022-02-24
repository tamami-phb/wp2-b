#!/usr/bin/php

<?php
  echo "Hai, Selamat Datang!\n";

  #for($i=1; $i<=10; $i++) {
  #  print("Urutan ke-$i\n");
  #}

  $nama = readline("Nama Anda : ");
  print("Anda berkelamin: ");

  $jk = $argv[1];
  if($jk == 1) {
    print("Pria\n");
  } else {
    print("Wanita\n");
  }

  #$output = shell_exec("ls -lart");
  #echo $output;

  #shell_exec("touch index.php");
  #shell_exec("echo '<h1>Hai, Apa kabar</h1>' > index.php");
  print("Senang berkenalan dengan Anda $nama\n");
?>
