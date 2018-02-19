<?php
    $x = 0; 
    while(1) {
	$string =  file_get_contents('http://bot.id-follower.com/gene/?code=LrLo8214mh');
        $hasil = json_decode($string);
        $email = $hasil->inviteCode;
                if($hasil->inviteCode === null)
        {
        echo ('GAGAL')."\n";
        } else {  
        echo $string."\n";
        $myFile = "gene.txt";
        $fh = fopen($myFile, 'a') or die ("can't open file");
        fwrite($fh, "/".$hasil->inviteCode.  "\r\n");
        fclose($fh);
    }
}
?>