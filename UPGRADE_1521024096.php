<table border='1'>
<tr>
	<th rowspan="2">INPUT</th>
	<th colspan="5">OUTPUT</th>
	</tr>
<tr>
	<th>A</th>
	<th>E</th>
	<th>I</th>
	<th>U</th>
	<th>O</th>
</tr>
<tr>
	<td>
	<?php
		$yunnus="MUHAMMAD YUNNUS WAHYU UTOMO";
		echo $yunnus;
	?>
	</td>
	<td>
	<?php		
		$huruf = substr_count($yunnus, "A");
		echo $huruf;
		?>
		</td>
	<td>
	<?php		
		$huruf = substr_count($yunnus, "E");
		echo $huruf;
		?>
		</td>
	<td>
	<?php		
		$huruf = substr_count($yunnus, "I");
		echo $huruf;
		?>
		</td>
	<td>
	<?php		
		$huruf = substr_count($yunnus, "U");
		echo $huruf;
		?>
		</td>
	<td>
	<?php		
		$huruf = substr_count($yunnus, "O");
		echo $huruf;
		?>
		</td>
	
	</tr>
	</table>
	