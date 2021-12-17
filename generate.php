<?php
    class Generate{
        public $qrInfo;
        public $qrSize;
        
    }
    function generateQR($sizeX, $sizeY, $info){
        
        
        
        $API_URL = "https://chart.googleapis.com/chart?cht=qr&";
        $qr_size = "chs=" . $sizeX . "x" . $sizeY . "&";
        $qrInfo = $info;
        $url = $API_URL . $qr_size . "chl=" . strval($qrInfo);

        return $url;
    }
    
    
    
?>