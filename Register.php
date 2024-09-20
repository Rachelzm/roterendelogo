<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTERENDE LOGO</title>
    <style>
        body {
            background-color: #f2bfd7;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .logo-box {
            width: 300px;
            padding: 20px;
            border: 3px solid #CF7280;
            border-radius: 10px;
            text-align: center;
            margin: 0 auto;
            margin-top: 60px;   
        }

        img {
            max-width: 100px;
            margin-bottom: 20px;
            animation: rotateLogo 5s infinite linear;
        }

        @keyframes rotateLogo {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"], input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 3px solid #CF7280;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }

        button {
            padding: 10px;
            background-color: #cd6388;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #bd275e;
        }

        #result p {
            font-family: 'Courier New', Courier, monospace;
            font-size: 18px;
            color: #2a2a2a;
        }

        /* Hamburger menu styling */
        .menu {
            display: none;
            position: absolute;
            top: 60px;
            right: 0;
            background-color: #CF7280;
            width: 200px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .menu.active {
            display: block;
            opacity: 1;
        }

        .menu a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
            text-align: center;
        }

        .menu a:hover {
            background-color: #A35D68;
            border-radius: 12px;
        }

        .menu-btn {
            position: fixed;
            top: 15px;
            right: 15px;
            cursor: pointer;
            z-index: 1001;
            border-radius: 12px;
            transition: transform 0.5s ease;
        }

        .menu-btn div {
            width: 30px;
            height: 3px;
            background-color: #CF7280;
            margin: 6px 0;
            border-radius: 12px;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        .menu-btn.active div:nth-child(1) {
            transform: rotate(50deg) translate(5px, 6px);
        }

        .menu-btn.active div:nth-child(2) {
            opacity: 0;
        }

        .menu-btn.active div:nth-child(3) {
            transform: rotate(-50deg) translate(5px, -6px);
        }

    </style>
</head>
<body>

<div class="menu-btn" onclick="toggleMenu()">
    <div></div>
    <div></div>
    <div></div>
</div>

<div class="menu">
    <a href="Home.html">Home</a>
    <a href="Gegevens.html">Gegevens</a>
</div>

<div class="logo-box">
    <img src="octopuslogo.png" alt="Logo">
    <form id="userForm">
        <input type="text" id="name" placeholder="Naam" required>
        <input type="number" id="age" placeholder="Leeftijd" required>
        <button type="submit">Versturen</button>
    </form>

    <div id="result"></div>
</div>


<script>
    function toggleMenu() {
        var menuBtn = document.querySelector('.menu-btn');
        var menu = document.querySelector('.menu');
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
    }
    // menu word zichtbaar/onzichtbaar als je erop klikt mgv active 

    document.getElementById('userForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // pagina word niet herlaad als je iets invult

        var name = document.getElementById('name').value;
        var age = document.getElementById('age').value;

        var resultDiv = document.getElementById('result');
        resultDiv.innerHTML = '<p><strong>Naam:</strong> ' + name + '</p>' + '<p><strong>Leeftijd:</strong> ' + age + '</p>';

        localStorage.setItem('name', name);
        localStorage.setItem('age', age);
    });
</script>

</body>
</html>
