<?php

/* STATIC METHOD DEMO */
//Note: no instance of tm is necessary nor does process need not be called 
//STOPWORD REMOVAL

//Stopword removal
$text = "The quick brown fox jumped over the lazy dog";
echo $text;
$words = explode(" ",strtolower($text));
printa(TextMiner::removeStopWords($words));
        
?>