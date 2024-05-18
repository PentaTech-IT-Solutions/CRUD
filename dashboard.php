<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<header>
    <nav>
        <button class="add-member-btn">Add Member</button>
    </nav>
</header>
<main>
    <section class="member-list">
        <h2>Members</h2>
        <form action="add_member_handler.php" method="post" enctype="multipart/form-data">
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="name"></td>
                    <td><input type="text" name="email"></td>
                    <td><input type="tel" name="tel"></td>
                    <td><input type="file" name="img_file"></td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
<!--                <tr>-->
<!--                    <td><input type="text" name="name2"></td>-->
<!--                    <td><input type="text" name="email2"></td>-->
<!--                    <td><input type="text" name="tel2"></td>-->
<!--                    <td><img src="#" alt="" name="image2"></td>-->
<!--                    <td>-->
<!--                        <button class="edit-btn">Edit</button>-->
<!--                        <button class="delete-btn">Delete</button>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td><input type="text" name="name3"></td>-->
<!--                    <td><input type="text" name="email3"></td>-->
<!--                    <td><input type="tel" name="tel3"></td>-->
<!--                    <td><img src="" alt="" name="image2"></td>-->
<!--                    <td>-->
<!--                        <button class="edit-btn">Edit</button>-->
<!--                        <button class="delete-btn">Delete</button>-->
<!--                    </td>-->
<!--                </tr>-->
                </tbody>
            </table>
            <button class="add-member-btn" name="submit">Submit</button>
        </form>
    </section>
</main>
</body>
</html>