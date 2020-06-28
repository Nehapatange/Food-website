<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>practice</title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
 
  
</head>
<body>

<header class="text-gray-700 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-teal-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Foogle</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a href="index.html" class="mr-5 hover:text-gray-900">HOME</a>
      <a href="about.html" class="mr-5 hover:text-gray-900">ABOUT</a>
      <a href= "contact.html" class="mr-5 hover:text-gray-900">CONTACT US</a>
      <a href="feedbacks.php" class="mr-5 hover:text-gray-900">FEEDBACKS</a>
    </nav>
    <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">FEEDBACK FORM
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>


<?php


  $servername="localhost";
  $username="root";
  $password="";
  $dbname="feedbacks";


  $conn= new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
  } 

  $sql = "SELECT * FROM feedback";

  $result = $conn->query($sql);

  if($result->num_rows>0){
    
    while($row = $result->fetch_assoc()){
     echo"<html>
           <head>
              <meta name='viewport' content='width=device-width, initial-scale=1'>
              <style>
              * {
                box-sizing: border-box;

              }

              body {
                font-family: Arial, Helvetica, sans-serif;
              }

              /* Float four columns side by side */
              .column {
                float: left;
                width: 25%;
                padding: 20px 20px;
                padding-bottom: 30px;
              }

              /* Remove extra left and right margins, due to padding */
              .row {margin: 0 -5px;}

              /* Clear floats after the columns */
              .row:after {
                content: '';
                display: table;
                clear: both;
              }

              /* Responsive columns */
              @media screen and (max-width: 600px) {
                .column {
                  width: 100%;
                  display: block;
                  margin-bottom: 20px;
                   display: table-cell;

                }
              }

              /* Style the counter cards */
              .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                padding: 16px;
                text-align: center;
                background-color: #f1f1f1;
                 }
  
              </style>
            </head>
            <body>

                
                <div class='column'>
                  <div class='card'>
                    <h3>" . $row['username'] . "</h3>
                    <p>" . $row['message'] . "</p>
                    <p>" . $row['email'] . "</p>
                  </div>
                </div>
              </body>
            </html>

          ";}
  }

  $conn->close();




?>

<footer class="text-gray-700 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-teal-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">foogle</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Foogle —
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">patange.neha16@gmail.com</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

</body>
</html>