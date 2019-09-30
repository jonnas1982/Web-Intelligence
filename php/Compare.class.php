<?php
class Compare 
{ 
    // Constructor 
    public function __construct(){} 

    public function hasher($set_x)
    {
        $hased = [];
        foreach ($set_x AS $x)
        {
            array_push($hased, hash('sha1', $x));
        }
        $hashed_1 = min($hased);
        $hased = [];

        foreach ($set_x AS $x)
        {
            array_push($hased, hash('sha256', $x));
        }
        $hashed_2 = min($hased);


        $hased = [];

        foreach ($set_x AS $x)
        {
            array_push($hased, hash('md5', $x));
        }
        $hashed_3 = min($hased);


        $hased = [];

        foreach ($set_x AS $x)
        {
            array_push($hased, hash('sha256', $x));
        }
        $hashed_4 = min($hased);


        $hased = [];

        foreach ($set_x AS $x)
        {
            array_push($hased, hash('gost', $x));
        }
        $hashed_5 = min($hased);


        $hased = [];

        array_push($hased, $hashed_1);
        array_push($hased, $hashed_2);
        array_push($hased, $hashed_3);
        array_push($hased, $hashed_4);
        array_push($hased, $hashed_5);

        return $hased;
    }

    public function check_dub($text1, $text2)
    {
        $l1 = strlen($text1);
        $l2 = strlen($text2);
        $shinglesize = 4;
        $shingles1 = [];
        $shingles2 = [];
        for($i = 0; $i <= max($l1, $l2); $i++)
        {
            if ($i + $shinglesize < $l1)
            {
                $toadd = substr($text1, $i, $i + $shinglesize);
                array_push($shingles1, $toadd);
            }
            if ($i + $shinglesize < $l2)
            {
                $toadd = substr($text2, $i, $i + $shinglesize);
                array_push($shingles2, $toadd);
            }
        }
        
        $hashed1 = $this->hasher($shingles1);
        $hashed2 = $this->hasher($shingles2);

        $overlap_len = sizeof(array_intersect($hashed1, $hashed2));
        $union_len = sizeof($hashed1 + $hashed2); 
        $jaccard = $overlap_len/$union_len*100;

        return $jaccard;
    }
      
} 