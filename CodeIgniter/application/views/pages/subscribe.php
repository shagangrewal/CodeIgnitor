	<div class="body">
	<body id="wrapper">
	<div class="column2">
		<p>Subscribe Fish Creek</p>
		<p>Required fields are maked with an asterisk (*).</p>

			<?php echo form_open('subscribe/save_subscription'); ?>
			<table>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* Client Full Name:'); ?></td>
					<td><?php echo form_input(array('id' => 'client_name', 'name' => 'client_name','value'=>set_value('client_name'))); ?></td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('client_name'); ?></span></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* Address:'); ?></td>
					<td><?php echo form_input(array('id' => 'address', 'name' => 'address','value'=>set_value('address'))); ?></td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('address'); ?></span></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* E-mail:'); ?></td>
					<td><?php echo form_input(array('id' => 'client_email', 'name' => 'client_email','value'=>set_value('client_email'))); ?></td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('client_email'); ?></span></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* Phone:'); ?></td>
					<td><?php echo form_input(array('id' => 'phone', 'name' => 'phone','value'=>set_value('phone'))); ?></td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('phone'); ?></span></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* Password:'); ?></td>
					<td><?php echo form_password(array('id' => 'client_password', 'name' => 'client_password')); ?></td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('client_password'); ?></span></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* Type of Service:'); ?></td>
					<td><span>
					<?php echo "<select name='type_of_service'>";
						echo '<option value="">Service Type</option>';
						if(isset($service) && count($service)>0)
							{
    							foreach($service as $ser)
    							{
									echo "<option value=$ser[serviceid]>$ser[servicename]</option>";
								}
							}
						echo "</select>";
					?></span>
					</td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('type_of_service'); ?></span></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td style ="color : #460da5;"><?php echo form_label('* Pet:'); ?></td>
					<td><span>
					<?php echo "<select name='pet'>";
						echo '<option value="">Pet Name</option>';
							if(isset($pet) && count($pet)>0)
							{
    							foreach($pet as $p)
    							{
									echo "<option value=$p[petid]>$p[petname]</option>";
								}
							}
						echo "</select>";
					?></span>
					</td>
					<td><span style="color:red; font-size: 15px;"><?php echo form_error('pet'); ?></span></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td></td><td><?php echo form_submit(array('id' => 'submit', 'value' => 'Send Now')); ?></td></tr>
			</table>
		</form>
		<?php if($this->session->flashdata('msg')): ?>
    		< style='color:green;'><?php echo $this->session->flashdata('msg'); ?>
		<?php endif; ?>
	</div>
	</body>
	</div>