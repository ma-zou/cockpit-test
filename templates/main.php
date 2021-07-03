<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$this->e($description)?>">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="/assets/styles/styles.css">
    <title><?=$this->e($title)?></title>
</head>
<body class="index">
    <input type="checkbox" id="navigation_toggler">
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#test">Test</a></li>
            <li><a href="#eine_leistung">Eine Leistung</a></li>
            <li><a href="#ne_andere_leistung">Ne andere Leistung</a></li>
            <li class="has_sub">
                <span>Subnavigation</span>
                <ul class="sub">
                    <li>
                        <a href="#moin">moin</a>
                        <a href="#moinsen">moinsen</a>
                        <a href="#wadehadedudeda">wadehadedudeda</a>
                        <a href="#last">last</a>
                    </li>
                </ul>
            </li>
            <li><a href="#eine_leistung">Eine Leistung</a></li>
            <li><a href="#ne_andere_leistung">Ne andere Leistung</a></li>
        </ul>
    </nav>
    <header>
        <div class="row">
            <div class="col">
                <blockquote class="claim">
                    This is a nicely worded claim
                </blockquote>
            </div>
        </div>
    </header>
    <main>
        <div class="row">
            <div class="col laptop-6">
                <h1>Test Headline</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod quos nisi rerum esse dolores odio, sunt dolorem ullam, eligendi itaque animi blanditiis a sed sapiente alias exercitationem, aut voluptas numquam!</p>
            </div>
            <div class="col laptop-6">
                <ul>
                    <li>jasndkajn asjdnakj daksjndka sdkajnsdkja </li>
                    <li>jasndkajn asjdnakj daksjndka sdkajnsdkja jasndkajn asjdnakj daksjndka sdkajnsdkja</li>
                    <li>jasndkajn asjdnakj daksjndka sdkajnsdkja </li>
                    <li>jasndkajn asjdnakj daksjndka sdkajnsdkja jasndkajn asjdnakj daksjndka sdkajnsdkja jasndkajn asjdnakj daksjndka sdkajnsdkja jasndkajn asjdnakj daksjndka sdkajnsdkja </li>
                    <li>jasndkajn asjdnakj daksjndka sdkajnsdkja jasndkajn asjdnakj daksjndka sdkajnsdkja jasndkajn asjdnakj daksjndka sdkajnsdkja </li>
                    <li>jasndkajn asjdnakj daksjndka sdkajnsdkja </li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#test">Test</a></li>
            <li><a href="#eine_leistung">Eine Leistung</a></li>
        </ul>
    </footer>
    <div id="mobile_bar">
        <ul>
            <li><label for="navigation_toggler">click click</label></li>
        </ul>
    </div>
</body>
<script type="module" src="/assets/javascript/main.js"></script>
</html>