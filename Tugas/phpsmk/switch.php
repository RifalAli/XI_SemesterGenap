<?php 

    // $hari = 1;

    // switch($hari) {
    //     case 1: 
    //         echo 'Minggu';
    //         break;
    //     case 2: 
    //         echo 'Senin';
    //         break;
    //     case 3: 
    //         echo 'Selasa';
    //         break;
    //     default: 
    //         echo 'Hari belum dibuat';
    //         break;
    // }

    $pilihan = 'ubah';

    switch($pilihan) {
        case 'tambah': 
            echo 'Anda memilih tambah';
            break;
        case 'ubah': 
            echo 'Anda memilih ubah';
            break;
        case 'hapus': 
            echo 'Anda memilih hapus';
            break;
        default: 
            echo 'Piilihan belum ada';
            break;
    }

?>