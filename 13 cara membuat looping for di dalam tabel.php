<form>
		<table border="1" cellspacing="0">
			<tr>
<th>NO</th>
<th>BUAH</th>
<th>SAYUR</th>
			</tr>
 
<?php  for ($no = 1, $i=10, $a=100; $i<=100, $a<=1000  ; $i+=10, $a+=100) { ?>
 
			<tr>
<td> <?php echo $no; ?></td>
<td><?php echo $i; ?></td>
<td><?php echo $a; ?></td>
			</tr>
 
		<?php $no++; } ?>
 
		</table>
	</form>
