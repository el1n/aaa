<HTML>
<BODY>
<FORM METHOD="<?=(preg_match("/^\/(GET|POST)\//",$_) ? $_[0] : "GET")?>" ACTION="<?=(preg_match("/^(?:\/(?:GET|POST))(https?:\/{2}.*)$/",$_) ? $m[0] : "http://127.0.0.1/")?>">
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
