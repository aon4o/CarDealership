<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brands INDEX</title>
</head>
<body>
	<a href="/">Back to Main</a>
	<h1>Brands</h1>
	<form action="/" method="get">
		<input type="hidden" name="search" value="true" />
		Search by name: <input type="text" name="name" />
		<input type="submit" value="Search" />
	</form>
	<hr></hr>
	<a href="brands/create">Create new</a></br>









    <table><tr>
            @foreach ($rows[0] as $columnName => $value)
            <th>  $columnName </th>
            @endforeach
            </tr>
        @foreach ($rows as $row)
            <tr>
            @foreach ($row as $value)
                        @if($id==null)
                            echo '<td><a href="show.php?id=' . $row['id'] . '">'. htmlspecialchars($value) . '</a></td>';
                        @else
                            <td>htmlspecialchars($value)</td>
                        @endif
            <td><a href="edit.php?id=' . $row['id'] . '">Edit</a>
                <td> <form action="delete.php" method="post"> <input type="hidden" name="id" value="' . $row['id'] . '"> <input type="submit" value="Delete" > </form> </td>
            @endforeach
            </tr>
        @endforeach
    </table>










</body>
</html>
