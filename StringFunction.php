 <?php

//  join, untuk menggabungkan array mennjadi string
var_dump(join(",", [1,2,3,4,5,6,7,8]));

//explode, berfungsi untuk memecah string menjadi array
var_dump(explode(" ", "Adi Wibisono Pramudyaning"));

//strtolower berguna untuk melower kan case (menjadi huruf kecil semua)
var_dump(strtolower("FASHASIHA PRAMUDYANING CAHYA"));

//strtoupper, berfungsi untuk mengubah huruf kecil menjadi huruf kapital
var_dump(strtoupper("adi wibisono"));

//trim, berfungsi untuk menghapus space dibelakang dan didepn saja, tidak bisa jika space nya di tengah tengah
var_dump(trim("     ADI     "));

//substr berguna untuk memotong dan mengambil deta per index
var_dump(substr("Adi Wibisono", 4, 7));