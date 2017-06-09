<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
<h3>Buah</h3>

 <table border="1">
   <tr>
   @foreach($buah as $data)
    <td>{{$data}}</td>
   @endforeach
  </tr>
  </table>

<h3>Komputer</h3>
  <table border="1">
   <tr>
   @foreach($komputer as $data)
    <td>{{$data}}</td>
   @endforeach
  </tr>
  </table>

<h3>Binatang</h3>
  <table border="1">
   <tr>
   @foreach($binatang as $id)
    <td>{{$data}}</td>
   @endforeach
   </tr>
   </table>
</table>
</body>
</html>