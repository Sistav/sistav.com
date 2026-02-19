<?php
$title = 'Contact';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body class="bg-[#0a0a0a] text-white min-h-screen">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main class="pt-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
        <h1 class="text-2xl mb-4">Contact</h1>
        <p class="text-neutral-300 text-sm mb-16 text-center">Get in touch. Feel free to send me gifs.</p>
        <ul class="space-y-4">
            <li>
                <a href="mailto:admin@sistav.com" class="group">
                    <span class="flex items-baseline gap-2">
                        <span class="text-neutral-300 text-sm group-hover:text-white transition-colors">Email</span>
                        <span class="text-neutral-500 text-xs">admin@sistav.com</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="https://github.com/sistav" target="_blank" rel="noopener" class="group">
                    <span class="flex items-baseline gap-2">
                        <span class="text-neutral-300 text-sm group-hover:text-white transition-colors">GitHub</span>
                        <span class="text-neutral-500 text-xs">sistav</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="https://fosstodon.org/@Sistav" target="_blank" rel="noopener" class="group">
                    <span class="flex items-baseline gap-2">
                        <span class="text-neutral-300 text-sm group-hover:text-white transition-colors">Mastodon</span>
                        <span class="text-neutral-500 text-xs">@Sistav</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/NotSistav" target="_blank" rel="noopener" class="group">
                    <span class="flex items-baseline gap-2">
                        <span class="text-neutral-300 text-sm group-hover:text-white transition-colors">Twitter</span>
                        <span class="text-neutral-500 text-xs">@NotSistav</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</main>
</body>
</html>
