<?php 
require_once(dirname(__FILE__)."/config.php");
require_once(dirname(__FILE__)."/../include/pub_datalist_dm.php");
CheckRank(0,0);
setcookie("ENV_GOBACK_URL",GetCurUrl(),time()+3600,"/");
$sql = "Select * From #@__memberstow where uid='".$cfg_ml->M_ID."' order by addtime desc";
$dlist = new DataList();
$dlist->Init();
$dlist->pageSize = 20;
$dlist->SetSource($sql);
require_once(dirname(__FILE__)."/templets/mystow.htm");
$dlist->Close();
?>