<?php
$title = 'Log';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';

$data    = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/data/log.json'), true);
$entries = $data['entries'] ?? [];
$fields  = ['listening', 'watching', 'reading', 'working on', 'thinking'];
?>
<body class="bg-[#0a0a0a] text-white min-h-screen">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main class="pt-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
        <h1 class="text-2xl font-semibold mb-4">Log</h1>
        <p class="text-neutral-300 text-sm mb-16 text-center">What I've been doing recently. Don't expect this to be updated recently</p>

        <div class="space-y-12">
            <?php if (empty($entries)): ?>
            <p class="text-neutral-700 text-sm">Nothing yet.</p>
            <?php endif; ?>

            <?php foreach ($entries as $entry): ?>
            <article>
                <h2 class="mb-5"><?= htmlspecialchars($entry['title']) ?></h2>
                <p class="text-[#a3a3a3] text-xs font-mono mb-6"><?= date('F j, Y', strtotime($entry['date'])) ?></p>
                <dl class="space-y-3">
                    <?php foreach ($fields as $field): ?>
                    <?php if (!empty($entry[$field])): ?>
                    <div class="grid grid-cols-[90px_1fr] gap-4">
                        <dt class="text-neutral-500 text-xs"><?= $field ?></dt>
                        <dd class="text-neutral-200 text-sm"><?= htmlspecialchars($entry[$field]) ?></dd>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </dl>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>

</body>
</html>
