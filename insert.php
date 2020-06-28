<?php
	//database info here
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='feedbacks';

	//create and check db connection
	$conn= new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die('Connection failed: '.$conn->connect_error);
	} 

	//create variables for each peice of information to be added to the DB table

	$username = $_POST['username'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	//create sql string
	$sql = "INSERT INTO feedback(username,email,message)
			VALUES('$username','$email','$message')";

	//send query,and check to ensure there are no errors

	if ($conn->query($sql)==TRUE) {
			echo "<html>
					<head>
						<title>practice</title>
						<link href='https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css' rel='stylesheet'>
					</head>
					<body>

					<header class='text-gray-700 body-font'>
					  <div class='container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center'>
					    <a class='flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0'>
					      <svg xmlns='http://www.w3.org/2000/svg' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-10 h-10 text-white p-2 bg-teal-500 rounded-full' viewBox='0 0 24 24'>
					        <path d='M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'></path>
					      </svg>
					      <span class='ml-3 text-xl'>Foogle</span>
					    </a>
					    <nav class='md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center'>
					      <a href='index.html' class='mr-5 hover:text-gray-900'>HOME</a>
					      <a class='mr-5 hover:text-gray-900'>ABOUT</a>
					      <a class='mr-5 hover:text-gray-900'>SERVICES</a>
					      <a href= 'contact.html' class='mr-5 hover:text-gray-900'>CONTACT US</a>
					      <a href='feedbacks.php' class='mr-5 hover:text-gray-900'>FEEDBACKS</a>
					    </nav>
					    <button class='inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0'>FEEDBACK FORM
					      <svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 ml-1' viewBox='0 0 24 24'>
					        <path d='M5 12h14M12 5l7 7-7 7'></path>
					      </svg>
					    </button>
					  </div>
					</header> 
					<h1>Thankyou so much for your precious feedback !!</h1>
					</body>
					</html>";
			}		
	else{
		"Error: " .$sql. "<br>" . $conn->error;
	}

	//close DB connection
	$conn->close();

?>