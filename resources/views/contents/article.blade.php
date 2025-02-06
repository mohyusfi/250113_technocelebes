<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <div class="container">
        <h1>'Uang adalah Tuhan', Mengapa?</h1>
        <p>Ditulis oleh Gita Ayu | 6 Januari 2025</p>
        <img src="bwl.jpg" alt="">
        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla temporibus eligendi rerum accusamus ratione
            ducimus sed minus quisquam. Atque nostrum eligendi odio cum facilis voluptates minus consequatur,
            repudiandae maiores placeat.
            <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse illum, blanditiis officia quisquam
            pariatur soluta ipsam facilis consequatur, quis enim ab ratione deserunt architecto unde. Quo quas
            doloremque recusandae iste?
        </h6>
        <hr>
        <h3>Anda menyukai artikel kami? <br> Subscribe situs web kami sekarang!</h3>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <label for="email">Masukan Gmail Anda :</label><br>
                    <input type="email" id="email" name="email" required placeholder="example@gmail.com">
                    <br><button class="btn btn-danger" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: rgb(170, 170, 170);
        }

        .container {
            background-color: white;
            padding: 30px;
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
            font-size: 12px;
            color: gray;
        }

        img {
            display: flex;
            min-height: 300px;
            max-height: 500px;
            width: 90%;
            margin-bottom: 20px;
            justify-self: center;
        }

        h6 {
            margin-left: 30px;
            margin-right: 30px;
            padding-bottom: 50px;
        }

        .card {
            padding: 20px;
            margin-left: 40px;
            color: black;
            width: 300px;
            align-items: center;
            border-radius: 40px;
            background-color: rgb(0, 2, 37);
            box-shadow: 0 0 8px 0 rgb(0, 0, 0);
            border: none;
        }

        h3 {
            padding-bottom: 20px;
            padding-left: 30px;
        }

        label {
            color: white;
            font-size: 20px;
        }

        input {
            margin-top: 20px;
            border: none;
            border-radius: 50px;
            padding: 8px 15px;
        }

        button {
            margin-top: 20px;
            width: 200px;

        }
    </style>
</body>

</html>
