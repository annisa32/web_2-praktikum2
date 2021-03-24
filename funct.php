<?php

function grade($nilai_akhir)
{
    if (($nilai_akhir >= 0) && ($nilai_akhir <= 40)) {
        return print("E");
    } else if (($nilai_akhir >= 41) && ($nilai_akhir <= 58)) {
        return print("D");
    } else if (($nilai_akhir >= 59) && ($nilai_akhir <= 68)) {
        return print("C");
    } else if (($nilai_akhir >= 69) && ($nilai_akhir <= 85)) {
        return print("B");
    } else if (($nilai_akhir >= 86) && ($nilai_akhir <= 100)) {
        return print("A");
    }
}

function kelulusan($nilai_akhir)
{
    if ($nilai_akhir > 60) {
        return print("LULUS");
    } else {
        return print("TIDAK LULUS");
    }
}

function predikat($nilai_akhir)
{
    switch ($nilai_akhir) {
        case ($nilai_akhir >= 0) && ($nilai_akhir <= 40):
            print("Sangat Kurang");
            break;
        case ($nilai_akhir >= 41) && ($nilai_akhir <= 58):
            print("Kurang");
            break;
        case ($nilai_akhir >= 59) && ($nilai_akhir <= 68):
            print("Baik");
            break;
        case ($nilai_akhir >= 69) && ($nilai_akhir <= 85):
            print("Memuaskan");
            break;
        case ($nilai_akhir >= 86) && ($nilai_akhir <= 100):
            print("Sangat Memuaskan");
            break;
    }
}