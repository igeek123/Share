<html>
<head>
<title>Profile</title>
</head>
<body>
<?php echo form_open_multipart('user/profile_upload');?>
<Table>
<tr>
<td>Name 
		<?php 
				$this->load->library('UI');
				$return=UI::handle_UI('{username}','text');	// {this contains parse value that we send to UI function for pre-populated input}
		?>
</td>
</tr>
<tr>
<td>Email 
		<?php 
				$this->load->library('UI');
				$return=UI::handle_UI('{email}','readonly');
		?>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><?php if(isset($error)) { echo $error;} ?></td>
</tr>
<tr>
<td>Change picture 
		<?php 
				$this->load->library('UI');
				$return=UI::handle_UI('userfile','file');
		?>
</td>
</tr>
<tr>
<td style='padding-left:95px;'>&nbsp;<img src='<?php echo base_url();?>uploads/{pic}' width='100' height='100' border='0'></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><input type="submit" id='submit' value="Update Profile" /></td>
</tr>



</body>
</html>