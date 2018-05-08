<div class="body">
<body id="wrapper">
<article>
<div class="column2">
<ul >
    <?php
	if(isset($service) && count($service)>0)
{
    foreach($service as $ser)
    {
	echo "<li><strong><span>$ser[servicename]</span></strong></li>";
	echo "$ser[description]";
}
}
?>
</ul>
<div class="column2">

</article>
</body>
</div>