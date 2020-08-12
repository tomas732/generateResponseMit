<!DOCTYPE html>
<html>
<body>

<h1>Generate MIT response</h1>
<form action="generaResponse.php" method="POST">
<table>
<tr><td><label>Key: </label></td><td><input type="text" name="key" value="5dcc67393750523cd165f17e1efadd21" size="32" /></td></tr>
<tr><td><label>Nro Orden: </label></td><td><input type="text" name="orden" value=""/></td></tr>
<tr><td><label>Siebel: </label></td><td><input type="text" name="siebel" value=""/></td></tr>
<tr><td><label>Respuesta: </label></td><td><select name="response"> <option value="approved">approved</option><option value="denied">denied</option> <option value="error">error</option> </select></</td></tr>
<tr><td><label>Folio pago: </label></td><td><input type="text" name="foliocpagos" value=""/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Generar"/></td></tr>
</table>
</form>

<hr/>
<br>


</body>
</html>