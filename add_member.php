<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <link rel="stylesheet" href="add_member.css">
</head>
<body>
<header>
    <nav>
        <button class="back-btn">Back</button>
    </nav>
</header>
<main>
    <section class="add-member-form">
        <h2>Add Member</h2>
        <form action="add_member_handler.php" method="post" enctype="multipart/form-data">
            <div class="input-box">
                <span class="details">Username</span>
                <input type="text" placeholder="Enter your username" required name="userName">
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Enter your email" required name="email">
            </div>
            <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="tel" placeholder="Enter your number" required name="phone">
            </div>
            <div class="input-box">
                <span class="details">Occupation</span>
                <input type="text" placeholder="Enter your occupation" required name="occupation">
            </div>
            <div class="input-box">
                <span class="details">Image</span>
                <input type="file" required name="image">
            </div>
            <div class="button">
                <input type="submit" value="Add Member">
            </div>
        </form>
    </section>
</main>
</body>
</html>
