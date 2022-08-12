<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>login</title>



    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url(assets/bg_1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        form {
            height: 560px;
            width: 610px;
            background-color: rgb(0, 0, 0);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 40px;
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: left;
        }

        form h4 {
            font-size: 16px;
            font-weight: 330;
            line-height: 21px;
            text-align: left;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input[type=text],
        input[type=password] {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        .container {
            padding: 16px;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color: #ff0000dc;
            color: #ffffff;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="background-image">

    </div>



    <form class="user" method="post" action="<?= base_url('auth'); ?>">
        <h3>Selamat Datang!</h3>
        <h4>Silahkan Log In untuk mengakses dashboard.</h4>

        <?= $this->session->flashdata('message'); ?>


        <div class="container">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Username" name="username" required>
            <?= form_error(
                'username',
                '<small class="text-danger pl-3">',
                '</small>'
            ); ?>
            <label for="pass">Password</label>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <?= form_error(
                'password',
                '<small class="text-danger pl-3">',
                '</small>'
            ); ?>
            <button type="submit">Masuk</button>


        </div>



    </form>
</body>

</html>