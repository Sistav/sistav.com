<?php
$_nav_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

function _nav_active(string $href): bool {
    global $_nav_path;
    return $href === '/'
        ? ($_nav_path === '/' || $_nav_path === '/index.php')
        : strpos($_nav_path, $href) === 0;
}

$_nav_pages = [
    '/about/'   => 'About',
    '/log/'     => 'Log',
    '/links/'   => 'Links',
    '/contact/' => 'Contact',
];
?>
<nav class="fixed top-0 left-0 right-0 z-50 bg-[#0a0a0a] border-b border-[#1c1c1c]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 flex items-center justify-between h-16">
        <a href="/" class="text-base font-semibold tracking-wide">sistav.com</a>

        <div class="hidden md:flex items-center gap-8 text-base">
            <?php foreach ($_nav_pages as $href => $label): ?>
            <a href="<?= $href ?>" class="<?= _nav_active($href) ? '' : 'text-neutral-400 hover:text-[#e6dfd8]' ?> transition-colors duration-150"><?= $label ?></a>
            <?php endforeach; ?>
        </div>

        <button id="nav-toggle" class="md:hidden text-neutral-400 hover:text-white p-1" aria-label="Toggle menu" aria-expanded="false">
            <svg id="nav-icon-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="nav-icon-close" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <div id="nav-mobile" class="hidden border-t border-[#1c1c1c] bg-[#0a0a0a]">
        <div class="max-w-5xl mx-auto px-4 py-5 flex flex-col gap-5 text-sm">
            <?php foreach ($_nav_pages as $href => $label): ?>
            <a href="<?= $href ?>" class="<?= _nav_active($href) ? '' : 'text-neutral-300 hover:text-[#e6dfd8]' ?> transition-colors text-base"><?= $label ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>
<div id="site-cursor"></div>

<script>
(function () {
    var toggle   = document.getElementById('nav-toggle');
    var mobile   = document.getElementById('nav-mobile');
    var iconOpen = document.getElementById('nav-icon-open');
    var iconClose = document.getElementById('nav-icon-close');
    toggle.addEventListener('click', function () {
        var justHid = mobile.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden', !justHid);
        iconClose.classList.toggle('hidden', justHid);
        toggle.setAttribute('aria-expanded', String(!justHid));
    });
})();
</script>
