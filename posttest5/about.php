<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Posttest 5 - saban</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' >
</head>
<body>
    <div class="mainpage">
        <nav class="navbar">
            <img src="logo.png" class="logo">
            <ul>
                <li><a href="index.php"><b>Home</b></a></li>
                <li><a href="indexorder.php"><b>Order</b></a></li>
                <li><a href="#"><b>Stats</b></a></li>
                <li><a href="about.php"><b>About Me</b></a></li>
                <li><a id="darkmode-toggle"><b>Change Mode</b></a></li>
            </ul>
        </nav>
		<div class="content">
            <h1>Author</h1>
            <p>Hello, my name is Reihan Al Sya'Ban aka saban. I'm 19 years old, </p>
            <p>currently studying Informatics Engineering at Mulawarman University</p>
            <p>student ID 2109106051. Love football, especially this club that's why i make this</p>
            <a href="https://www.instagram.com/s.banz__/" target="_blank" onclick="ppbox()">Instagram : @s.banz_</a>
        </div>

        <div class="images">
            <img src="logo.png" class="white">
            <img src="logo2.png" class="blue">
        </div>

        <div class="footer">
            <footer>
                <p>Author   @ReihanAlSya'Ban</p>
                <p>2022</p>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
          const darkmodeToggle = document.getElementById('darkmode-toggle')
          darkmodeToggle.addEventListener('click', function() {
            const theme = $('html').attr('data-theme');
            if(theme == 'light') {
              // * CHANGE TO DARK
              $('html').css({'filter': 'invert(1)'})
              $('html').attr('data-theme', 'dark');
              $('ul').addClass('dark-mode');
            } else {
              // * CHANGE TO LIGHT
              $('html').removeAttr('style');
              $('html').attr('data-theme', 'light')
              $('ul').removeClass('dark-mode');
            }
          });
        });
    </script>
    <script>
        
var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
const bio = document.getElementsByClassName('datadiri');
    </script>
    <script>
        function ppbox(){
            alert("Anda akan melanjutkan ke Halaman Lain !!!")
        }
    </script>
</body>
</html>