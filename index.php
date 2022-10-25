<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://picsum.photos/seed/1214/1200");
            background-size: cover;
        }

        img {
            transition-duration: 1s;
            cursor: pointer;
        }

        img:hover {
            transform: rotate(2160deg);
            /* opacity: .8; */
        }
    </style>
</head>

<body>
    <main class="container pb-5">

        <form method="POST" action="./detail.php" class="d-flex flex-column align-items-center w-100 mt-5">
            <div class="col-md-5 shadow py-5 px-5 rounded bg-light">
                <h3 class="text-center mt-4">Warung Nasi Barokah</h3>
                <marquee class="text-center">Ayo beli disini di jamin rasa dan kualitas Mantap </marquee>


                <div class="form-group mt-5">
                    <label for="name">Pilih Menu</label>
                    <select class="form-select mt-2" name="name" id="name">
                        <option value="Nasi Goreng">Nasi Goreng</option>
                        <option value="Nasi Bakar">Nasi Bakar</option>
                        <option value="Nasi Liwet">Nasi Liwet</option>
                        <option value="Nasi Kebuli">Nasi Kebuli</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="jumlah">Jumlah</label>
                    <input id="jumlah" name="jumlah" id="" class="form-control mt-2" type="number">
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <span class="btn btn-danger rounded w-25" style="margin-right: 20px;" id="reset">Reset</span>
                    <button class="btn btn-primary rounded w-25" type="submit">Kirim</button>
                </div>

            </div>

        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        document.getElementById("reset").onclick = () => {
            document.getElementById("name").value = "Nasi Goreng"
            document.getElementById("jumlah").value = null
        }
    </script>
</body>

</html>