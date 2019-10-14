<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/
function convertStringToHyperLink($string){
	$regExUrl = "/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/";
	if(preg_match_all($regExUrl, $string, $url)) {
        foreach($url[0] as $newLinks){
            if(strstr( $newLinks, ":" ) === false){
				$link = 'http://'.$newLinks;
			}else{
				$link = $newLinks;
			}
            $search  = $newLinks;
            $replace = '<a href="'.$link.'" title="'.$newLinks.'" target="_blank">'.$link.'</a>';
            $string = str_replace($search, $replace, $string);
        }
	}
	return $string;
}
?>
