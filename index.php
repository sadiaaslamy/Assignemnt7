<?php
$db = new mysqli ('localhost:3307', 'root', 'root', 'book_store');

/* #1: Insert values
$sql_query = ' INSERT INTO books VALUES (15,"Veronika Decides to Die","Paulo Coelho",1998-02-24, "Portuguese","Psychological Fiction",139,4) ';
$db->query($sql_query);
*/

/* #2 update a column
$sql_query = ' UPDATE books SET price=16 WHERE ID=14 ';
$db->query($sql_query);
*/

/* #3 delete a column
$sql_query = ' DELETE FROM books WHERE ID=3 ';
$db->query($sql_query);
*/

/* #4 show all the information in a table */
$sql_query = ' SELECT * FROM books ';

$result = $db->query($sql_query);


// echo '<pre>';
// var_dump($result);

// $data = $result->fetch_assoc();
$info = $result->fetch_all(MYSQLI_ASSOC);
?>
<html>
    <head>
        <title>BOOKSTORE</title>
            <style>
               .continar{
                padding: 10px;
                width: 900px;
                display: block;
                margin-left: auto;
                margin-right: auto;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                text-align: center;
                margin-top: 50px;
                font-family: 'Orbitron', sans-serif;
               }
               table {
                 border-collapse: collapse;
                 width: 100%;
                }
                th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #DDD;
                }
                .title{
                    color: #588157;
                }
                tr:hover {background-color: #a3b18a;}
                .title:hover{color: black;}
            </style>
     </head>
    <body>
       <div class="continar"> 
        <h2 class="title">Book Details</h2>
        <table>
	          <tr class="title">
		        <th>ID</th>
		        <th>Name</th>
		        <th>Author</th>
		        <th>Published date</th>
		        <th>Language</th>
		        <th>Genres</th>
		        <th>Pages</th>
		        <th>Price(€)</th>
	         </tr>

	    <tbody>
		<?php 
			
			foreach($info as $record){

				echo 	'<tr>
							<td>'. $record['ID'] .'</td>
							<td>'. $record['name'] .'</td>
							<td>'. $record['author'] .'</td>
							<td>'. $record['published_date'] .'</td>
							<td>'. $record['language'] .'</td>
							<td>'. $record['genres'] .'</td>
							<td>'. $record['pages'] .'</td>
							<td>'. $record['price'] .'</td>
						</tr>';
			}
		?>
	    </tbody>
        </table>
       </div>  
    </body>
</html>