<?php


class Cylinder extends Circle
{
    public $chieuCao;

    public function __construct($banKinh, $mauSac, $chieuCao)
    {
        parent::__construct($banKinh, $mauSac);
        $this->chieuCao = $chieuCao;
    }

    public function tinhTheTich()
    {
        return $this->chieuCao * pi() * pow($this->banKinh, 2);
    }

    public function toString()
    {
        echo 'Ban Kinh : ' . $this->banKinh . '<br>';
        echo 'Mau sac : ' . $this->mauSac . '<br>';
        echo 'Chieu cao : ' . $this->chieuCao . '<br>';
    }
}