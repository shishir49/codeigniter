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
            <h3>User List</h3>
            <a href="http://localhost/test/index.php/add-user">Add New User</a>
        </div>
        <div class="list">
            <div class="searchbox">
                <form action="">
                    <input type="text">
                    <button>Search</button>
                </form>
            </div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php 
                    foreach($user_list as $users) { ?>
                        <tr>
                            <td><?php echo $users->id; ?></td>
                            <td><?php echo $users->username; ?></td>
                            <td><?php echo $users->email; ?></td>
                            <td>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer">

    </div>
</body>
</html>