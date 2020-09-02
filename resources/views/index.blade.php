<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListToDo</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

</head>
<body>
    
    <nav>
        <div class="logo-nav">
            <h2>List-To-Do</h2>
        </div>

        
        
        <ul>
            <li><a href="/">Home</a></li>
        </ul>

        <div class="navbar-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
       
    </nav>


    <div class="main">

            <div class="input-list">
            
                <input type="search" id="search-input" placeholder="Input">
                <button id="input-button"type="submit">Send</button>

            </div>


        <div id="list-category" class="row"></div>


    </div>



    <footer>

        <div class="copy-right">
            <p>Copyright &copy; <span id="date"></span> Develop By @hfdz</p>
        </div>

    </footer>

<script src="{{ asset('js/ltd-script.js') }}"></script>
<script> main(); </script>
</body>
</html>