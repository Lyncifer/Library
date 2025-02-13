<!DOCTYPE html>
<html>
<head>
    <title>Top 20 Best Seller Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <img src="banner.jpg" width="100%">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Books</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    <center>
    <br>
    <h2>Top 20 Best Sellers</h2>
    <br>
    <form method="post" action="index.php">
        <select name="urutan">
            <option>Urutkan Berdasarkan
            <option value="no_asc">No (naik) 
            <option value="no_desc">No (turun) 
            <option value="title_asc">Title (A - Z) 
            <option value="title_desc">Title (Z - A) 
            <option value="genre_asc">Genre (A - Z) 
            <option value="genre_desc">Genre (Z - A) 
            <option value="year_asc">Year (naik) 
            <option value="year_desc">Year (turun) 
            <option value="author_asc">Author (A - Z)
            <option value="author_desc">Author (Z - A)
            <option value="nationality_asc">Nationality (A - Z) 
            <option value="nationality_desc">Nationality (Z - A)
            <option value="sold_asc">Sold (naik)
            <option value="sold_desc">Sold (turun)
        </select>
    <input type="submit" name="tombol_urutan" value="Urutkan" class="btn btn-info btn-sm">
    </form>
    <br>
    <form method='POST' action="index.php">
        <input name="cari" placeholder="Keywords...">
        <input type="submit" name="tombol_cari" value="Cari!!" class="btn btn-warning btn-sm"> 
    </form>
    <br>
    <table class=table table-hover style="border: 5px; solid;">
        <tr>
            <td>NO</td>
            <td>TITLE</td>
            <td>GENRE</td>
            <td>PUBLISHED YEAR</td>
            <td>AUTHOR</td>
            <td>AUTHOR NATIONALITY</td>
            <td>SOLD (MILLION EXEMPLAR)</td>
        </tr>
        <?php
            include 'koneksi.php';
            if(isset($_POST['tombol_urutan']))
            {
                $urutan=$_POST['urutan'];
                if($urutan == 'no_asc')
                {$kueri = "select * from buku order by no asc";}
                else if($urutan == 'no_desc')
                {$kueri = "select * from buku order by no desc";}
                else if($urutan == 'title_asc')
                {$kueri = "select * from buku order by title asc";}
                else if($urutan == 'title_desc')
                {$kueri = "select * from buku order by title desc";}
                else if($urutan == 'genre_asc')
                {$kueri = "select * from buku order by genre asc";}
                else if($urutan == 'genre_desc')
                {$kueri = "select * from buku order by genre desc";}
                else if($urutan == 'year_asc')
                {$kueri = "select * from buku order by year asc";}
                else if($urutan == 'year_desc')
                {$kueri = "select * from buku order by year desc";}
                else if($urutan == 'author_asc')
                {$kueri = "select * from buku order by author asc";}
                else if($urutan == 'author_desc')
                {$kueri = "select * from buku order by author desc";}
                else if($urutan == 'nationality_asc')
                {$kueri = "select * from buku order by nationality asc";}
                else if($urutan == 'nationality_desc')
                {$kueri = "select * from buku order by nationality desc";}
                else if($urutan == 'sold_asc')
                {$kueri = "select * from buku order by sold asc";}
                else if($urutan == 'sold_desc')
                {$kueri = "select * from buku order by sold desc";}
                else
            $kueri="select * from buku";
            $go=mysqli_query($koneksi,$kueri); 
            $kolom=mysqli_fetch_array($go);
            do
            {
                echo '<tr>';
                echo '<td>'.$kolom ['no'];
                echo '<td>'.$kolom ['title'];
                echo '<td>'.$kolom ['genre'];
                echo '<td>'.$kolom ['year'];
                echo '<td>'.$kolom ['author'];
                echo '<td>'.$kolom ['nationality'];
                echo '<td>'.$kolom ['sold'];
                echo '<td> <a href="update.php?kunci='.$kolom ['no'].' ">update</a>';
                echo '</tr>';
            }
            while($kolom=mysqli_fetch_array($go));
        }
        else {
            $kueri="select * from buku";
            $go=mysqli_query($koneksi,$kueri); 
            $kolom=mysqli_fetch_array($go);
            do
            {
                echo '<tr>';
                echo '<td>'.$kolom ['no'];
                echo '<td>'.$kolom ['title'];
                echo '<td>'.$kolom ['genre'];
                echo '<td>'.$kolom ['year'];
                echo '<td>'.$kolom ['author'];
                echo '<td>'.$kolom ['nationality'];
                echo '<td>'.$kolom ['sold'];
                echo '<td> <a href="update.php?kunci='.$kolom ['no'].' ">update</a>';
                echo '</tr>';
            }
            while($kolom=mysqli_fetch_array($go));
        }
        ?>
        </center>
</body>
</html>