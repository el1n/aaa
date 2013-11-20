<HTML>
<BODY ONLOAD="document.getElementById(1).submit()">
<?
	$q = urldecode(preg_replace("/\?.*$/","",getenv("REQUEST_URI")));
?>
<FORM ID="1" METHOD="<?=(preg_match("/\/(GET|POST)\//",$q,$_) ? $_[1] : "GET")?>" ACTION="<?=(preg_match("/(?:\/(?:GET|POST))?\/(https?:\/{2}.*)\??/",$q,$_) ? $_[1] : "http://127.0.0.1/")?>">
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
