<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://picsum.photos/seed/821/1200");
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

        .w-48 {
            width: 48%;
        }
    </style>
</head>

<body>
    <main class="container pb-5">

        <form action="./index.php" class="d-flex flex-column align-items-center w-100 mt-5">
            <div class="col-md-5 shadow py-5 px-5 rounded bg-light mt-5">

                <h3 class="mt-4 text-center mb-4">Data Pesanan Anda</h3>

                <div class="d-flex justify-content-between mt-2">
                    <div class="w-48">
                        <h6>Menu pilihan Anda</h6>
                    </div>
                    <div class="w-48">
                        <h6><?php
                            $name = $_POST["name"];
                            echo $name;
                            ?></h6>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <div class="w-48">
                        <h6>Harga Menu Anda</h6>
                    </div>
                    <div class="w-48">
                        <h6>
                            <?php
                            $name = $_POST["name"];
                            $jumlah = $_POST["jumlah"];
                            $harga = 0;
                            switch ($name) {
                                case "Nasi Goreng":
                                    $harga = 15000;
                                    break;
                                case "Nasi Bakar":
                                    $harga = 10000;
                                    break;
                                case "Nasi Liwet":
                                    $harga = 13000;
                                    break;
                                case "Nasi Kebuli":
                                    $harga = 25000;
                                    break;
                                default:
                                    $harga = 25000;
                            }
                            $total = $harga * $jumlah;


                            echo 'Rp.', $harga;

                            ?></h6>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <div class="w-48">
                        <h6>Jumlah Menu Anda</h6>
                    </div>
                    <div class="w-48">
                        <h6><?php
                            echo $jumlah
                            ?></h6>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <div class="w-48">
                        <h6>Total Belanja Anda</h6>
                    </div>
                    <div class="w-48">
                        <h6>
                            <?php

                            echo 'Rp.', $harga * $jumlah
                            ?>
                        </h6>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <div class="w-48">
                        <h6>Bonus Untuk Anda</h6>
                    </div>
                    <div class="w-48">
                        <h6>
                            <?php

                            if ($total > 100000 && $name == "Nasi Kebuli") {
                                echo "Es Teler dan Pudding";
                            } elseif ($total > 80000 && $name == "Nasi Goreng") {
                                echo "Es Jeruk";
                            } else {
                                echo "Es Teh Tawar";
                            }
                            ?>

                        </h6>
                    </div>
                </div>
                <button class="btn btn-primary w-100 mt-3">Ulangi Kembali</button>

            </div>

        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>