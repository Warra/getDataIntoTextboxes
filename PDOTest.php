<?php
$username = 'root';
$password = '';
$cState = 0;
$aState = 0;

try{
$cState = 0;
$aState = 0;	
$conn = new PDO ('mysql:host=localhost;dbname=todo',$username, $password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt=$conn ->prepare ('SELECT Todo from todo WHERE completedstate =:completedstate AND archivedstate =:archivedstate');
$stmt->bindParam(":completedstate", $cState,PDO::PARAM_INT);
$stmt->bindParam(":archivedstate", $aState,PDO::PARAM_INT);

$stmt ->execute();
$stmt ->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch()){
	echo json_encode($row['Todo']) ;
}

}catch(PDOException $e){
	echo 'ERROR: '.$e->getMessage();
}



//$tasks = $db->query($dbSelectSql)->fetchAll(PDO::FETCH_ASSOC);
//$stmt->execute();
// $stmt->execute(array(
// 	'todo' => $todo
// 	));
//$result = $stmt.fetch(PDO::FETCH_OBJ);
// $stmt->execute(array(

// 	));
// $row = $stmt->fetch(PDO::FETCH_OBJ)
// echo "task 1 is".$row; 



// $stmt->execute(array(
// 	'task'=>$t
	
// 	));

// while($row = $stmt->fetch()){
// 	$jsonrow = json_encode($row);
// 	echo($jsonrow);
// }








// $tasks = $stmt ->fetchAll(PDO::FETCH_ASSOC);
//  echo json_encode([
//     "tasks"  => $tasks
//   ]);

?>