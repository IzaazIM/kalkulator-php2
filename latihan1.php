<html>
	<body>
		<form action ="" method="POST">
			<table>
				<tr>
					<td><input type="text" name="angkaawal" /><td>
					<td>
						<select name="operator">
							<option value="+">Ditambah</option>
							<option value="-">Dikurang</option>
							<option value="/">Dibagi</option>
							<option value="*">Dikali</option>
						</select>
					<td>
					<td><input type="text" name="angkaakhir" /><td>
					<td><input type="submit" name="submit" /><td>
				</tr>
			</table>
		</form>
		
		
		<?php
			echo $hasil = $_POST['angkaawal'] . $_POST['operator'] . $_POST['angkaakhir'];
			echo "=";
			if($_POST['operator']=="+"){
				echo $hasil = $_POST['angkaawal'] + $_POST['angkaakhir'];
			}elseif($_POST['operator']=="-"){
				echo $hasil = $_POST['angkaawal'] - $_POST['angkaakhir'];
			}elseif($_POST['operator']=="/"){
				echo $hasil = $_POST['angkaawal'] / $_POST['angkaakhir'];
			}elseif($_POST['operator']=="*"){
				echo $hasil = $_POST['angkaawal'] * $_POST['angkaakhir'];
			}
			
		?>
	</body>
</html>