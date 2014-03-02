function pulldata(){

var count =0;
$.ajax({
	url:'pdotest2.php',
	datatype:'json',
	success: function(data){
		$.each(data,function()
		{
			$("tb".concat((count+1).toString())).val(data);
			count++;
			
		}
	)}
		//alert(data);
})
}



    // $.getJSON("PDOTest2.php", function(data){
    // 	$.each(data, function()
    // 	{
    // 		$("tb1").val(this["Todo"]);
    // 	})
    // })




	//document.write("asdasd");
	// var task = $('input#textbox1').val();
	// alert(task);
	// var tb1 = document.createElement("input");
	// tb1.type = "text";
	// tb1.id = "tb1";
	// document.body.appendChild(tb1);


	// $.post('PDOTest.php', {todo}), function(data){
	// 	alert(data);
	// }
	// $('#tb1').val("hello");

	// $.ajax({
	// 	dataType: "json",
	// 	url:"PDOTest.php",
	// 	data: "data"
	// 	success: function(todo){
	// 		$('#tb2').val(todo.responseText);
	// 	}
	// }) 
 	//    $('#tb1').val("hello");

//test
//put text into textbox
// function pulldata()
// {
// 	var tb1 = document.createElement("input");
// 	tb1.type = "text";
// 	tb1.id = "tb1";
// 	document.body.appendChild(tb1);
// 	$('#tb1').val("hello");
// }

 // $.getJSON("PDOTest2.php", function(data){
 // 	document.write(data.todo[1]);
 // });
