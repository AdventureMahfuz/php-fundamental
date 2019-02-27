<?php
//color change option in css using variable
$header_footer_bg = '#000';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Fundamental learning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        header, footer {
            background: <?php echo $header_footer_bg; ?>;
        }

        article {
            background: #999999;
        }

        h1 {
            color: #ffffff;
        }

        .content {
            background: #ffffff;
            color: #000000;
            padding: 10px 25px;
            text-transform: capitalize;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-content text-center">
                    <h1>Learning PHP with practice</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <!--VARIABLE SECTION-->
                    <section class="variable">
                        <?php
                        $a = 10;
                        $b = 25;
                        $c = $a + $b;
                        $d = 'yes your are absolutely right';
                        echo 'variable "$a" is equal to ' . '=' . $a . '<br/>';
                        echo 'variable "$b" is equal to ' . '=' . $b . '<br/>';
                        echo 'variable "$a" and variable "$b" is equal to "$c" that is ' . '=' . $c . '<br/>';
                        echo $d;
                        ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</article>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-content text-center">
                    <h1>From Training with live project</h1>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>