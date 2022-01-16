<div class="header text-center">
    <h3 class="p-5">Lapor Hoaks</h3>
    <div class="bodyhead"> </div>
</div>
<div class="mx-3" style="color: white">
    <h5 >Panduan Melapor</h5>
    <p>Laporkan Hanya Berita Yang Menurut Anda Adalah</p>
    <p>Berita Bohong Atau Hoaks</p>
    <p>Hoaks : Berita/informasi Yang Keliru Secara Fakta</p>
    <h5 class="pt-3">Panduan Melapor</h5>
    <form style="color: black" action="<?php echo site_url('Welcome/status_laporan')?>">
    <div>
        <label for="exampleInputEmail1">Nama Anda</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="pt-1">
        <label for="exampleInputPassword1">Email Anda</label>
        <input type="email" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="pt-1">
        <label for="exampleInputEmail1">Judul Laporan</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="pt-1">
        <label for="exampleInputPassword1">Teks Hoaks</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
    <div class="pt-1">
        <label for="exampleInputPassword1">Pesan Dari</label>
        <input class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="pt-1">
        <label for="exampleInputEmail1">Dari Mana Anda Mendapatkan Berita</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto mt-3">
        <button type="submit" class="btn btn-light rounded-pill mb-2" type="button">Kirim Laporan</button>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="<?= site_url('Welcome/')?>" class="btn btn-light rounded-pill mb-2" type="button">Kembali</a>
    </div>
    </form>
</div>        
 
