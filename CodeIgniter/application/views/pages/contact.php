<div class="body">
<body id="wrapper">
<div class="column2">
	<article class = "contact-content">
		<h2 style ="text-shadow: 1px 2px #aaa; color:#2a2ac0;">Contact Fish Creek</h2>
		<br>Required fields are maked with an asterisk (*).<br/><br/>
			<?php echo form_open('contact/save_contact'); ?>
			<table>
				<tr> 
					<td style ="color : #460da5;"><?php echo form_label('* Name :'); ?></td>
					<td><?php echo form_input(array('id' => 'name', 'name' => 'name','value'=>set_value('name'))); ?></td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('name'); ?></span></td>
				</tr>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* Email :'); ?></td>
					<td><?php echo form_input(array('id' => 'email', 'name' => 'email','value'=>set_value('email'))); ?></td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('email'); ?></span></td>
				</tr>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* Comments :'); ?></td>
					<td><textarea class="form-control" id="comments" name="comments" rows="4"></textarea></td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('comments'); ?></span></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_submit(array('id' => 'submit', 'value' => 'Send Now')); ?></td>
				</tr>
			</table>
		</form>
		<?php if($this->session->flashdata('msg')): ?>
    		<div style='color:green;'><?php echo $this->session->flashdata('msg'); ?></div>
		<?php endif; ?>
	</article>
</div>
</body>
</div>