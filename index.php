<?php
$gif_files = glob($_SERVER['DOCUMENT_ROOT'] . '/assets/gifs/*.gif');
$gifs = array_map(fn($f) => '/assets/gifs/' . basename($f), $gif_files);
$default = !empty($gifs) ? $gifs[0] : '';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body class="bg-[#0a0a0a] text-white min-h-screen">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main class="h-screen flex items-center justify-center pt-16">
    <div id="gif-frame">
        <img id="main-gif" src="<?= htmlspecialchars($default) ?>" alt="" style="display:block;opacity:0;transition:opacity 0.4s ease">
    </div>
</main>

<script>
    var gifs = <?= json_encode($gifs) ?>;
    var img  = document.getElementById('main-gif');

    function sizeGif() {
        if (!img.naturalWidth) return;
        var maxPx = Math.min(window.innerWidth, window.innerHeight) * 0.65;
        var scale = Math.min(maxPx / img.naturalWidth, maxPx / img.naturalHeight);
        img.style.width  = Math.round(img.naturalWidth  * scale) + 'px';
        img.style.height = Math.round(img.naturalHeight * scale) + 'px';
        img.style.opacity = '1';
    }

    img.src = gifs[Math.floor(Math.random() * gifs.length)];
    img.addEventListener('load', sizeGif);
    if (img.complete && img.naturalWidth) sizeGif();
</script>

</body>
