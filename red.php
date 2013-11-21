<HTML>
<BODY ONLOAD="document.getElementById(1).submit()">
<?
	preg_match("/(?:\/(GET|POST))?\/(https?:\/{2}.*)\??/",urldecode(preg_replace("/\?.*$/","",getenv("REQUEST_URI"))),$_);
?>
<FORM ID="1" METHOD="<?=($_[1] ? $_[1] : "GET")?>" ACTION="<?=($_[2] ? $_[2] : "http://127.0.0.1/")?>">
<?
foreach($_GET as $name =>$value){
?>
<INPUT TYPE="hidden" NAME="<?=($name)?>" VALUE="<?=($value)?>">
<?
}
?>
</FORM>
</BODY>
</HTML>
