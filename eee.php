<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - E-Commerce</title>
    <!-- Simulate PHP includes with comments -->
    <!-- <?php include "./includes/header.php" ?> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 32px 40px 32px 40px;
        }
        h1 {
            margin-bottom: 24px;
            text-align: left;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .col-md-6 {
            flex: 0 0 48%;
            display: flex;
            flex-direction: column;
        }
        .col-12 {
            flex: 0 0 100%;
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 18px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 120px;
            align-self: flex-start;
        }
        button[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
    <div class="container py-5">
        <h1 class="mb-4">Contact Us</h1>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="contactName" class="form-label">Name</label>
                <input type="text" class="form-control" id="contactName" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="contactEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="contactEmail" name="email" required>
            </div>
            <div class="col-12">
                <label for="contactMessage" class="form-label">Message</label>
                <textarea class="form-control" id="contactMessage" name="message" rows="4" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
    <?php include "./includes/footer.php" ?>
</body>