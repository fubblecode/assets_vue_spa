<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400, 700" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body class="font-sans">
       <div id="app">
       <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 5px no-repeat;">
            <h1>
                <img alt="Laracasts" src="/images/logo.svg">
            </h1>
        </header>

           <div class="container px-8 pb-10">
            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-4">The Brand</h5>

                        <ul class="list-reset">
                            <li class="text-sm pb-4"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/colors">Colors</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/typography">Typography</router-link></li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>

                        <ul class="list-reset">
                            <li class="text-sm pb-4"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/illustrations">Illustrations</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/loaders-and-animations">Loaders & Animations</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li>
                        </ul>
                    </section>

                    <div>
                        <h5 class="uppercase font-bold mb-4">Stats</h5>

                        <ul class="list-reset">
                            <li class="text-sm pb-4"><router-link class="text-black" to="/site-stats">Site Stats</router-link></li>
                            <li class="text-sm pb-4"><router-link class="text-black" to="/achievments">Achievments</router-link></li>
                        </ul>
                    </div>
                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>

           </div>
       </div>

    <script src="/js/app.js"></script>
    </body>
</html>
