
<?php 
session_start();
$page_title = 'Home Page';
?>

<?php include 'tpl/header.php'; ?>
<main class="min-h-900">


    <div class="container">
        <section id="top-content">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <h1 class="disply-4">The orange blog</h1>
                    <p>Forum blog for everybody</p>
                    <p>
                        <a href="signup.php" class="btn btn-outline-warning btn-lg">Join Us Now</a>
                    </p>
                </div>
            </div>
        </section>
        <section id="main-content">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <p>Tomkatom is a website that you can just right what ever you want about your self!
                    </p>
                    <p>so let's get started....just click  join us now and you can start righting!
                    </p>
                    
                </div>
            </div>
        </section>
    </div>
</main>

<?php include 'tpl/footer.php'; ?>