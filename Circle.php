<?php


class Circle
{
    public $banKinh, $mauSac;

    public function __construct($banKinh, $mauSac)
    {
        $this->banKinh = $banKinh;
        $this->mauSac = $mauSac;
    }

    public function getBanKinh()
    {
        return $this->banKinh;
    }

    public function getMauSac()
    {
        return $this->mauSac;
    }

    public function setBanKinh($banKinh)
    {
        $this->banKinh = $banKinh;
    }

    public function setMauSac($mauSac)
    {
        $this->mauSac = $mauSac;
    }

    public function tinhDienTichHinhtron()
    {
        return pow(pi(), 2) * 3.14;
    }

    public function toString()
    {
        echo 'Ban kinh: ' . $this->banKinh . '<br>';
        echo 'Mau sac : ' . $this->mauSac . '<br>';
    }
}

