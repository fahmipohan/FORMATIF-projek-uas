<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Beranda <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Berita <i
                            class="ion-ios-arrow-forward"></i></span>
                </p>
                <h1 class="mb-0 bread">Berita</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container" id="berita">
        <div class="row">
            <?php
            $sql_k = "SELECT `id_berita`,`judul`,`isi`,`tanggal`,`cover` FROM `berita`
            ORDER BY `judul`";
            
            $query_k = mysqli_query($koneksi, $sql_k);
            $no = 1;
            while ($data_k = mysqli_fetch_row($query_k)) {
              $id_berita = $data_k[0];
              $judul = $data_k[1];
              $isi = $data_k[2];
              $tanggal = $data_k[3];
              $cover = $data_k[4];
              $tanggal = date('d-m-Y', strtotime($tanggal));
              $isipdk = substr($isi, 0, 50);
            ?>

            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="" class="img w-100" style="background-image: url(images/image_1.jpeg);"></a>
                    <div class="text p-3">
                        <div class="meta mb-2">
                            <div><a href="index.php?include=detilberita">
                                    <?php echo $tanggal; ?>
                                </a>
                            </div>
                        </div>
                        <h2><a href="index.php?include=detilberita">
                                <?php echo $judul; ?>
                            </a>
                        </h2>
                        <p><?php echo $isipdk; ?></p>
                        <p><a href="index.php?include=detilberita&data=<?php echo $id_berita; ?>"
                                class="btn btn-light w-100">Read More</a></p>
                    </div>
                </div>
            </div>
            <?php $no++;
            } ?>
        </div>
    </div>
    </div>

    <div class=" row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>