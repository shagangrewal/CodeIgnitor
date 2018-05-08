	<div class="body">
	<body id=""wrapper">
	<article>
		<div class = "column2" ><p><a href="<?php echo base_url(); ?>contact/contact_view">Contact</a> &nbsp us if you have a question that you would like answered here.<br>
		    <?php
				if(isset($questions) && count($questions)>0)
					{
    					foreach($questions as $q)
    						{
								echo "<dl><dt><span>$q[question]
					  					</span></dt>	<dd>$q[answer]</dd><dl>
					  				  ";
							}
					}
			?>
			<p>
			</div>
	</article>
</body>
</div>