<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>I Can Fix Your Website</title>
		<meta name="description" content="Web design and development that helps your business grow, with performance, clarity, and ownership up front">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/kelpui@1/css/kelp.css">
        <script type="module" src="https://cdn.jsdelivr.net/npm/kelpui@1/js/kelp.js"></script>

        <x-feed-links />

        <link rel="stylesheet" href="/css/fonts.css">
        <style>
            @layer kelp.theme {
                :root {
                    --font-size-base: 150%;
                    --font-primary: "Satoshi", sans-serif;
		            --font-secondary: "Satoshi", sans-serif;
                }
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 0.25rem;
            }

            .logo svg {
                width: 2rem;
                height: auto;
            }
        </style>
	</head>
	<body>
        <header class="container">
            <nav class="navbar">
                <a class="logo" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                    </svg>
                    I Can Fix Your Website</a>
                <ul>
                    <li><a href="/blog">Blog</a></li>
                    <li><a class="btn primary" href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>
		<main>
            {{ $slot }}
        </main>

        <footer class="container margin-start-6xl margin-end-4xl">
            <div class="split">
                <p>&copy; Phil Stephens 2025-{{ date('Y') }}</p>
                <p><a href="https://www.linkedin.com/company/i-can-build-your-website/">LinkedIn</a></p>
                <p>Made with <a href="https://kelpui.com">Kelp</a></p>
            </div>
        </footer>
	</body>
</html>
