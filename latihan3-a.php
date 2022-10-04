<?php
kelas mahasiswa{
     publik  $ nama ;
     publik  $ nim ;

     // dilindungi $nama;
     // dilindungi $nim;
     // Jika Modifier diganti dengan Protected maka akan terjadi error,

     // pribadi $nama;
     // pribadi $nim;
     //property yang bermodifier private hanya bisa digunakan pada class mahasiswa sendiri

     fungsi  __construct (){}
     fungsi  setNama ( $ a ){
          $ ini -> nama = $ a ;
          }
     fungsi  setNim ( $ b ){
          $ ini -> nim = $ b ;
          }
     fungsi  getNama (){
          kembalikan  $ ini -> nama ;
          }
     fungsi  getNim (){
          kembalikan  $ ini -> nim ;
          }
      penghancuran fungsi (){}
}
?>
