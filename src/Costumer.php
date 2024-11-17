<?php

namespace resturendiana\belajar;
class Customer{
    public function __construct(private string $nama)
    {
        
    }
    public function SayHello(string $nama="Guest"){
        return "Halo $nama, Nama Saya adalah $this->nama";
    }
    
}

?>