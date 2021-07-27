<body onload="time()">
<script type="text/javascript">
	function time()	{
		today=new Date();
		h=today.getHours();
		m=today.getMinutes();
		s=today.getSeconds();
		document.getElementById('txt-date').innerHTML=h+":"+m+":"+s;
		setTimeout('time()',500);
	}
</script>

<?php
	
	//echo time() . '<b>';
	//echo date ('D, d \d\e M \d\e Y H:i A') . '<br>';
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
	echo strftime('%A, %d de %B de %Y', time()) . '<br>';
	   
	echo ('<b>Hora: </b><span id="txt-date"></span>');
	
?>