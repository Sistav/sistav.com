<?php
$title = 'Links';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';

$data       = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/data/links.json'), true);
$categories = $data['categories'] ?? [];
?>
<body class="bg-[#0a0a0a] text-white min-h-screen">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main class="pt-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
        <h1 class="text-2xl font-semibold mb-3">Links</h1>
        <p class="text-neutral-400 text-sm mb-16">A collection of interesting and useful website</p>

        <div class="space-y-12">
            <?php foreach ($categories as $cat): ?>
            <section>
                <h2 class="text-xs text-neutral-300 uppercase tracking-widest mb-5"><?= htmlspecialchars($cat['name']) ?></h2>
                <ul class="space-y-4">
                    <?php foreach ($cat['links'] as $link):
                        $domain = preg_replace('/^www\./', '', parse_url($link['url'], PHP_URL_HOST));
                    ?>
                    <li>
                        <a href="<?= htmlspecialchars($link['url']) ?>" target="_blank" rel="noopener" class="group">
                            <span class="flex items-baseline gap-2">
                                <span class="text-neutral-300 text-sm group-hover:text-white transition-colors"><?= htmlspecialchars($link['title']) ?></span>
                                <span class="text-neutral-500 text-xs"><?= $domain ?></span>
                            </span>
                            <?php if (!empty($link['note'])): ?>
                            <span class="block text-neutral-500 text-xs mt-0.5"><?= htmlspecialchars($link['note']) ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <?php endforeach; ?>
        </div>
    </div>
</main>

</body>
</html>
