<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-areas: 
              "header"
              "content-body"
              "footer"
            ;
        }

        .header {
            grid-area: header;
            height: 8vh;
            background: #eee;
        }

        .content-body {
            grid-area: content-body;
            min-height: 82vh;
        }

        .footer {
            grid-area: footer;
            height: 10vh;
            background: gray;
        }
    </style>
</head>
<body>
    <div class="header">
        CRUD with Codeigniter
    </div>
    <div class="content-body">
        <div class="headline">
            <h3>Add User</h3>
        </div>
        <input type="text">
    </div>
    <div class="footer">

    </div>
</body>
</html>