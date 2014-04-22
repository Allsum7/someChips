<?php

function cetForAnother($id, $name)
{
    $name       = urlencode(iconv('UTF-8', 'GB2312', $name));
    $url        = "http://leehuan.sinaapp.com/cet/bae_post.php?id=" . $id . "&name=" . $name . "&flag=bae";
    $contentStr = file_get_contents($url);
    return $contentStr;
}

function getCet($id, $name)
{
    $post_data         = array();
    $post_data['id']   = $id;
    $post_data['name'] = $name;
    $post_data['name'] = urlencode(iconv('UTF-8', 'GB2312', $post_data['name']));
    $url               = 'http://cet.99sushe.com/searchscore.html';
    $o                 = "";
    foreach ($post_data as $k => $v) {
        $o .= "$k=" . $v . "&";
    }
    $post_data = substr($o, 0, -1);
    $ch        = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //将返回结果赋值给变量 为1 否则为0
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_REFERER, 'http://cet.99sushe.com');
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);  
    //为了支持cookie
    //curl_setopt($ch, CURLOPT_COOKIE, 'searchtime=1462739800');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    $re = curl_exec($ch);
    $re = deal($re);
    curl_close($ch);
    return $re;
}

function deal($html) //提出关键信息
{
  
   $search = "<input.*id='score'.*value='(.*)'/>";
   preg_match($search,$html,$r);
   return $r[1];
}
?>