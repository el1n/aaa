<HTML>
<HEAD>
</HEAD>
<BODY>
<P><B>����</B></P>
<?
	foreach(glob("*.*") as $file){
?>
<P><A HREF="./<?=($file)?>"><?=($file)?></A></P>
<?
	}
?>
</BODY>
</HTML>
