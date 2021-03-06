<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>3D Kalkulator Ratu</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">3D Kalkulator</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Silinder</a>
                        <a class="nav-link" href="#">Kerucut</a>
                        <a class="nav-link" href="#">Bola</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <content>
        <div class="container-fluid utama">
            <div class="bg-light p-5 rounded-lg m-3">
                <h1 class="display-4">3D Kalkulator</h1>
                <p class="lead">Dibuat oleh Ratu Muthmainnah / 1402019091.</p>
                <hr class="my-4">
                <h2><span id="nama">User</span></h2>
                <p>Tugas 3 - Web untuk menghitung silinder, kerucut dan bola</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Menghitung</a>
            </div>

            <div class="card-group">
                <div class="card h-100">
                    <img src="image/tabung.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hitung Silinder</h5>
                        <p class="card-text">Menghitung silinder / tabung untuk mencari volume dan luas.</p>
                        <a href="#silindercalc" data-bs-toggle="collapse" class="btn btn-primary">Show / Hide</a>
                    </div>
                </div>
                <div class="card h-100">
                    <img src="image/kerucut.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hitung Kerucut</h5>
                        <p class="card-text">Menghitung kerucut untuk mencari volume dan luas.</p>
                        <a href="#kerucutcalc" data-bs-toggle="collapse" class="btn btn-primary">Show / Hide</a>
                    </div>
                </div>
                <div class="card h-100">
                    <img src="image/bola.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hitung bola</h5>
                        <p class="card-text">Menghitung bola untuk mencari volume dan luas.</p>
                        <a href="#bolacalc" data-bs-toggle="collapse" class="btn btn-primary">Show / Hide</a>
                    </div>
                </div>
            </div>


            <div class="collapse" id="silindercalc">
                <div class="card card-body">
                    <div id="silinder" class="calculator">
                        <h2>Hitung Silinder</h2>
                        <form>
                            <div class="mb-3">
                                <label for="jarisilinder" class="form-label">Jari-Jari (M)</label>
                                <input type="text" class="form-control" id="jarisilinder">
                            </div>
                            <div class="mb-3">
                                <label for="tinggisilinder" class="form-label">Tinggi (M)</label>
                                <input type="text" class="form-control" id="tinggisilinder">
                            </div>
                            <button onclick="hitungSilinder()" class="btn btn-primary">Hitung</button>

                            <h3>Hasil Perhitungan</h3>
                            <div class="mb-3">
                                <label for="luassilinder" class="form-label">Luas</label>
                                <input type="text" class="form-control" id="luassilinder">
                            </div>
                            <div class="mb-3">
                                <label for="volumesilinder" class="form-label">Volume</label>
                                <input type="text" class="form-control" id="volumesilinder">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="collapse" id="kerucutcalc">
                <div class="card card-body">
                    <div id="kerucut" class="calculator">
                        <h2>Hitung Kerucut</h2>
                        <form>
                            <div class="mb-3">
                                <label for="jarikerucut" class="form-label">Jari-Jari (M)</label>
                                <input type="text" class="form-control" id="jarikerucut">
                            </div>
                            <div class="mb-3">
                                <label for="tinggikerucut" class="form-label">Tinggi (M)</label>
                                <input type="text" class="form-control" id="tinggikerucut">
                            </div>
                            <div class="mb-3">
                                <label for="gariskerucut" class="form-label">Garis Pelukis (M)</label>
                                <input type="text" class="form-control" id="gariskerucut">
                            </div>
                            <button onclick="hitungKerucut()" class="btn btn-primary">Hitung</button>

                            <h3>Hasil Perhitungan</h3>
                            <div class="mb-3">
                                <label for="luaskerucut" class="form-label">Luas</label>
                                <input type="text" class="form-control" id="luaskerucut">
                            </div>
                            <div class="mb-3">
                                <label for="volumekerucut" class="form-label">Volume</label>
                                <input type="text" class="form-control" id="volumekerucut">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="collapse" id="bolacalc">
                <div class="card card-body">
                    <div id="bola" class="calculator">
                        <h2>Hitung Bola</h2>
                        <form>
                            <div class="mb-3">
                                <label for="jarisilinder" class="form-label">Jari-Jari (M)</label>
                                <input type="text" class="form-control" id="jaribola">
                            </div>
                            <button onclick="hitungBola()" class="btn btn-primary">Hitung</button>

                            <h3>Hasil Perhitungan</h3>
                            <div class="mb-3">
                                <label for="luassilinder" class="form-label">Luas</label>
                                <input type="text" class="form-control" id="luasbola">
                            </div>
                            <div class="mb-3">
                                <label for="volumesilinder" class="form-label">Volume</label>
                                <input type="text" class="form-control" id="volumebola">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </content>
    <footer class="mt-auto">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="navbar-nav">
                    <a class="nav-link" href="https://github.com/Ratumuthainnah/tugas3_1402019091"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-github" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg> Github</a>
                    <a class="nav-link" href="https://www.instagram.com/ratumuth/"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg> Instagram</a>

                    <a class="nav-link" href="https://www.youtube.com/channel/UCfFTLAt7gpWxfzX9Nyhzszw"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg> Youtube</a>

                    <a class="nav-link" href="https://tugas3-1402019091.herokuapp.com">Heroku</a>



                </div>
            </div>
        </nav>
    </footer>









    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>

</html>
