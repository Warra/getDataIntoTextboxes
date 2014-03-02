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
$todos = $stmt->fetchAll();



foreach($todos as $todo){
	
	echo json_encode($todo['Todo']);
	//array_push($result, array('Todo' => $todo));
	//echo json_encode(array("result" =>$result));
	//echo $todo['Todo'];
}

}catch(PDOException $e){
	echo 'ERROR: '.$e->getMessage();
}


// $result = array();


// while($row = $stmt->fetch()){
// 	echo json_encode($row['Todo']) ;


	// array_push($result, array('Todo' =>$row
	//echo json_encode($row['todo']);
		// ));

	// echo json_encode(array("result" => $result));
