<!DOCTYPE html>
<html>
<head>
    <title>Top 20 Best Seller Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <center>
    
    <img src="banner.jpg" width="100%">
    <br>
    <h2>Top 20 Best Sellers</h2>
    <br>
    <!-- Interface -->
    <div style="width:75%">
        <?php
        include 'koneksi.php';
        $kueri="select * from buku where no='$_GET[kunci]' ";
        $go=mysqli_query($koneksi,$kueri);
        $kolom=mysqli_fetch_array($go);
        ?>
        <form method="POST" action="update.php">
            <br>No
            <br><input name="no" value="<?php echo $kolom['no'] ?>" class="form-control" readonly>
            <br>Title
            <br><input name="title" value="<?php echo $kolom['title'] ?>" class="form-control" >
            <br>Genre
            <br><input name="genre" value="<?php echo $kolom['genre'] ?>" class="form-control" >
            <br>Year
            <br><input name="year" value="<?php echo $kolom['year'] ?>" class="form-control" >
            <br>Author
            <br><input name="author" value="<?php echo $kolom['author'] ?>" class="form-control" >
            <br>Nationality
            <br><input name="nationality" value="<?php echo $kolom['nationality'] ?>" class="form-control" >
            <br>Sold
            <br><input name="sold" value="<?php echo $kolom['sold'] ?>" class="form-control" >
            <br><input type="submit" name="tombol_update" class="btn btn-info">
        </form>
    </div>
    <!-- Logic -->
    <?php
    if(isset($_POST['tombol_update']))
        {
            $kueri="update buku set
            title='$_POST[title]',
            genre='$_POST[genre]',
            year='$_POST[year]',
            author='$_POST[author]',
            nationality='$_POST[nationality]',
            sold='$_POST[sold]' 
            where
            no='$_POST[no]' ";
            $go=mysqli_query($koneksi, $kueri);
            header(header: 'location:index.php');
        }
    ?>
    <br>
    <a href="index.php">Back</a>
    </center>
    </body>
