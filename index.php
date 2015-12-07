<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $paper=array('copier'=>"Copier & Multipurpose",'inkjet'=>"Inkjet Printer",
            'laser'=>"Laser Printer",'photo'=>"Photographic Paper");
        while (list($item,$description)=  each($paper))
        {
            echo "$item: $description<br>";
        }
        echo "<br>Date Time<br>";
        echo date("l F jS, Y- h:i:s A", time());
        
        echo "<br>New Line<br>";
        $fh=  fopen("testfile.txt",'w') or die("Failed to create the file.");
        $test=<<<_END
                Hello This is a text file Line1.
                Text File Line 2.
                Text File Line 3.
_END;
        fwrite($fh, $test)or die("Could not write to file.");
        fclose($fh);
        echo "File 'testfile.txt' written successfully";
        echo "<br>Thanks for visiting.";
        ?>
    </body>
</html>
