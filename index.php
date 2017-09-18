<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>URL Shorterner</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body class="container">
        <h1>Tiny URLs</h1>
        <blockquote>
            <p>User Stories:</p>
            <ul>
            <li> I can pass a URL as a parameter and I will receive a shortened URL in the JSON response.</li>

            <li>If I pass an invalid URL that doesn't follow the valid http://www.example.com format, the JSON response will contain an error instead.</li>

            <li>When I visit that shortened URL, it will redirect me to my original link.</li>
        </ul>
        </blockquote>

        <form method='post' action='url.php' class='form-group'>
        Enter <input placeholder='https://www.google.com' type='text' name='url' class='form-control'></input><br />
        <button type='submit' class='btn btn-primary'>Submit</button>
        </form>

        <footer class='text-center'>
            <h4>Built by <a href='#'>Twisha Saraiya</a></h4>
        </footer>
    </body>
</html>
