<?php
/*output
1. 10+5/2 = 12,5
2. 10~6~3,5
3. 10~6~3,5~50
4. 11~6~-6,5~106
5. 11~5~-10,5
6. 13~4~-6,5
7. 13~4~-5,56
8. 12~3~-5,56
9. 11~4~-5,5~6*/

$a = 15;
$b = 5;
$d = 5;

echo "1.) ".($a-$b)." + ".$b." / ".(($a-$b)/$b)." = ".(($a-$b)+$b/(($a-$b)/$b))."<br>";
echo "2.) ".($a-$b)." ~ ".($b+($b/$d))." ~ ".($b/(($a-$b)/$b)+($b/$d))."<br>";
echo "3.) ".($a-$b)." ~ ".($b+($b/$d))." ~ ".($b/(($a-$b)/$b)+($b/$d))." ~ ".(($a-$b)*$b)."<br>";
echo "4.) ".(($a-$b)+($b/$d))." ~ ".($b+($b/$d))." ~ ".(($b/$d)-(($b/(($a-$b)/$b))+$b))." ~ ".(($a-$b)*($a-$b)+($b+($b/$d)))."<br>";
echo "5.) ".(($a-$b)+($b/$d))." ~ ".$b." ~ ".((($a-$b)/$b)-(($a-$b)+$b/(($a-$b)/$b)))."<br>";
echo "6.) ".($a-(($a-$b)/$b))." ~ ".($b-($b/$d))." ~ ".(($b/$d)-(($b/(($a-$b)/$b))+$b))."<br>";
echo "7.) ".($a-(($a-$b)/$b))." ~ ".($b-($b/$d))." ~ ".((($a-$b)/$b)-(($b/(($a-$b)/$b))+$b));
?>