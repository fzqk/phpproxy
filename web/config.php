<?
#  @package phpproxy
#  @author stephen yabziz(雅步子)<ywyhnchina@163.com>
#  @copyright Copyright (c) 2004
#  @version 2.0 - 21/05/2004 17:55:36 - config.php
#  @access public
#  @homepage http://opentools.uni.cc/mambo
#  @suport http://members.lycos.co.uk/dotop/phpBB2
?>
<?
//是否公开你的phpproxy，如果不公开，则打开phpproxy直接浏览到你的$show_homepage_url
//if you set $is_public=true,anyone can use your phpproxy to surf!
$is_public=true;
//缺省语言
//default language
$default_lang="Chinese";
//如果$is_public设置为false，务必设置$show_homepage_url，否则会出错！
//if $is_public=false,you need specialfied the url;open phpproxy,you will directly browser $show_homepage_url.
$show_homepage_url="http://sourceforge.net";
//是否允许设置代理
//permit users to set proxyhost;
$permit_proxy=true;
$proxy_host="216.17.167.116";
$proxy_port="80";
//是否去掉script
//disabled javascript?
$disabled_js=false;
//禁止的js函数
//list javascript functions that you want to be baned
$disabled_js_funcs="";
//禁止弹出窗口的url
//list urls,eg: $block_popup_url=array("ads.com");that will block any url that contains "ads.com"
$block_popup_url=array();
//不用解析和替换url的文件类型
//list filetypes which do not need to be parsed for changing url
$all_objects = array('.jpg','.jpeg','.gif','.png','.css','.swf','.js','.zip','.gz','.tar','.rar','.exe','.pdf','.xls','.doc','.ppt','.mpg','.mpeg','.mp3','.mid','.midi','.wav','.java','.jar','.class','.xml');
//禁止的文件类型；设置这项可加速网页的下载速度！
//list filetype baned,this may accelerate the speed of browsering
$ban_objects=array();

//下面的一般不必修改
//generally,do not change anything below
$tag_attributes = array("A" => "HREF",
                            "LINK" => "HREF",
                            "IMG" => "SRC",
                            "FORM" => "ACTION",
                            "TD"  =>"BACKGROUND",
                            "BODY"  =>"BACKGROUND",
                            "TABLE"  =>"BACKGROUND",
                            "META" => "URL",
                            "SCRIPT" => "SRC"
                            );

//replace $key($url)
$tag_script = array("open"=> "(",
                    ".action"=> "="
                    //"href"=> "=",
                    );
//replace $key($url)
$tag_style = array("url"=> "("
                   );


?>
