<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) . ' — sistav.com' : 'sistav.com' ?></title>
    <link rel="icon" href="/assets/favicon/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/assets/favicon/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { cream: '#e0d5c0' }
                }
            }
        }
    </script>
    <style>
        /* Global text softening */
        body { color: #e6dfd8 !important; background-color: #0b0a09 !important; }

        /* Headings */
        h1 {
            font-family: 'DM Serif Display', Georgia, serif !important;
            font-weight: 400 !important;
            font-size: 2.25rem !important;
            color: #e6dfd8;
            letter-spacing: -0.01em;
            text-align: center;
        }
        article h2 {
            font-family: inherit !important;
            font-weight: 400 !important;
            font-size: 0.75rem !important;
            color: #d4d4d4 !important;
            letter-spacing: 0.1em !important;
            text-transform: uppercase !important;
            text-align: left !important;
        }

        /* Gif frame */
        #gif-frame {
            display: inline-block;
            padding: 14px;
            border: 2px solid #6b6b6b;
            box-shadow:
                inset 0 1px 0 rgba(255,255,255,0.05),
                0 4px 8px  rgba(0,0,0,0.55),
                0 16px 40px rgba(0,0,0,0.75),
                0 40px 90px rgba(0,0,0,0.35);
        }

        /* Grain overlay */
        body::after {
            content: '';
            position: fixed;
            inset: 0;
            z-index: 9998;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.5' numOctaves='6' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
            opacity: 0.07;
        }

        /* Custom cursor */
        * { cursor: none !important; }
        #site-cursor {
            position: fixed;
            top: 0; left: 0;
            width: 5px;
            height: 5px;
            background: #ffffff;
            border-radius: 50%;
            pointer-events: none;
            z-index: 99999;
            transform: translate(-50%, -50%);
            transition: width .2s ease, height .2s ease, opacity .2s ease;
            opacity: 0;
        }
        #site-cursor.visible  { opacity: 1; }
        #site-cursor.expanded { width: 22px; height: 22px; opacity: 0.3; }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var cursor = document.getElementById('site-cursor');
            if (!cursor || !window.matchMedia('(hover: hover)').matches) return;

            document.addEventListener('mousemove', function (e) {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top  = e.clientY + 'px';
                cursor.classList.add('visible');
            });

            document.addEventListener('mouseleave', function () {
                cursor.classList.remove('visible');
            });

            document.addEventListener('mouseover', function (e) {
                if (e.target.closest('a, button, [role="button"]'))
                    cursor.classList.add('expanded');
                else
                    cursor.classList.remove('expanded');
            });
        });
    </script>
</head>
