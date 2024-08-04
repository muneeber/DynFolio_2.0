<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./output.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .text-primary {
            color: #8b8a91;
        }

        .text-info {
            color: #4f4f52;
        }

        .text-highlight {
            color: #fff;
        }

        .bg-body {
            background-color: #14131a;
        }

        .bg-btnHighlight {
            background-color: #2bd576;
        }

        .bg-cardPrimary {
            background-color: #1c1b23;
        }
    </style>
</head>

<body class=" bg-[#14131a]">
    <div class="flex">
        <aside class="hidden lg:flex h-screen fixed w-screen  sm:w-[300px] z-30">
            <div class=" toggle flex flex-col lg:m-5 w-full">
                <div class="hidden lg:flex  gap-2 p-5 pt-0">
                    <div class=" size-4 bg-green-400 rounded-full"></div>
                    <div class=" size-4 bg-green-400 rounded-full"></div>
                </div>
                <div
                    class=" flex relative flex-col h-full p-5 text-[#8b8a91] bg-[#1c1b23] rounded-lg w-full  overflow-y-auto pb-20 md:pb-5">
                    <div class="block lg:hidden p-5 z-10 text-primary absolute right-0 top-0 cursor-pointer text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-primary">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </div>
                    <a class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-home">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Home
                    </a>
                    <a class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-flame">
                            <path
                                d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z">
                            </path>
                        </svg>
                        Trending
                    </a>
                    <a class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-code">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                        Snippets
                    </a>
                    <a class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="https://www.instagram.com/ezsnippet/"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-video">
                            <path d="m22 8-6 4 6 4V8Z"></path>
                            <rect width="14" height="12" x="2" y="6" rx="2" ry="2"></rect>
                        </svg>
                        Videos
                    </a>
                    <div class="mt-5">Socials</div>
                    <a target="_blank"
                        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="https://www.instagram.com/ezsnippet/"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="#b5179e" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg> Instagram</a>
                    <a target="_blank"
                        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="https://github.com/nwaliaez"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="#2a9d8f" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github">
                            <path
                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                            </path>
                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                        </svg> Github</a>
                    <a target="_blank"
                        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="https://www.youtube.com/channel/UCWYz4W6m1toUP7x0M1od3fA"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#e63946" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-youtube">
                            <path
                                d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17">
                            </path>
                            <path d="m10 15 5-3-5-3z"></path>
                        </svg> Youtube</a>
                    <a target="_blank"
                        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="https://stackoverflow.com/users/20331641/neeraj-walia"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#f77f00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-layers">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg> Stack overflow</a>
                    <a target="_blank"
                        class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="https://www.linkedin.com/in/ezSnippet/"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="#0277b5" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg> Linkedin</a>
                </div>
            </div>
        </aside>
        <main class=" flex-1 pl-0 lg:pl-[300px]  ">
            <nav class="flex sticky shadow-md top-0 z-20 bg-body p-5 text-info justify-between">
                <div></div>
                <div class="flex items-center gap-5">
                    <button disabled=""
                        class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-btnHighlight text-highlight text-xs py-2 px-4">Contact
                        Me <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg></button><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="flex lg:hidden cursor-pointer hover:text-primary transition-colors">
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg></button>
                </div>
            </nav>
            <div>
                <div class="flex  rounded-lg w-full  bg-[url('./images/cover.jpeg')] bg-no-repeat bg-cover">
                    <div
                        class=" flex justify-center md:rounded -ld  overflow-hidden md:px-10 py-5 bg-blur backdrop-filter backdrop-blur-md w-full gap-2 md:gap-10">
                        <div class="">
                            <img alt="Neeraj Walia" loading="lazy" width="120" height="120" decoding="async"
                                class="object-cover border-4 border-white rounded-full shadow-md"
                                style="color:transparent"
                                src="https://ez-snippet.vercel.app/_next/image?url=%2Fimages%2FprofilePic.jpeg&w=128&q=75">
                        </div>
                        <div class="flex md:flex-1 flex-col justify-center gap-4">
                            <div class="flex justify-between items-center gap-5 ">
                                <div class="text-3xl flex flex-col font-bold text-highlight">Neeraj Walia<div
                                        class="text-sm font-thin flex justify-between items-center">@ezSnippet<a
                                            class="block md:hidden" target="_blank"
                                            href="https://instagram.com/ezSnippet">
                                            <button
                                                class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-cardPrimary text-primary font-semibold text-xs p-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-instagram">
                                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                                </svg></button></a></div>
                                </div><a class="hidden md:block" target="_blank"
                                    href="https://instagram.com/ezSnippet"><button
                                        class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-cardPrimary text-primary font-semibold text-xs py-2 px-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-instagram">
                                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                        </svg><span class="hidden md:block">Follow me on Instagram</span></button></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex flex-col gap-10 lg:px-10">
                    <section class="grid gap-8 p-5 mt-5 md:p-0">
                        <div class="text-xl font-medium text-zinc-200">Projects</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl::grid-cols-4 gap-5"><a
                                target="_blank" href="https://github.com/nwaliaez/discord-clone">
                                <div
                                    class="flex flex-col overflow-hidden gap-3 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                                    <img alt="spotify" loading="lazy" width="700" height="700" decoding="async"
                                        data-nimg="1" class="aspect-video object-cover" style="color:transparent"
                                        src="https://ez-snippet.vercel.app/_next/image?url=%2Fprojects%2Fdiscord-clone.jpeg&w=750&q=75">
                                    <div class="flex flex-col px-4 py-2 h-24">
                                        <div class="flex font-bold">Discord Clone</div>
                                        <div class="flex text-info text-xs">Next.js 13, React Hook Form, Zustand,
                                            Shadcn, Typescript</div>
                                    </div>
                                </div>
                            </a><a target="_blank" href="https://github.com/nwaliaez/spotify-clone">
                                <div
                                    class="flex flex-col overflow-hidden gap-3 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                                    <img alt="spotify" loading="lazy" width="700" height="700" decoding="async"
                                        data-nimg="1" class="aspect-video object-cover" style="color:transparent"
                                        src="https://ez-snippet.vercel.app/_next/image?url=%2Fprojects%2Fspotify-clone.gif&w=750&q=75">
                                    <div class="flex flex-col px-4 py-2 h-24">
                                        <div class="flex font-bold">Spotify Clone</div>
                                        <div class="flex text-info text-xs">Next.js 13, React Hook Form, Zustand, Radix
                                            UI, Typescript, Tailwind CSS</div>
                                    </div>
                                </div>
                            </a><a target="_blank" href="https://github.com/nwaliaez/eCommerce">
                                <div
                                    class="flex flex-col overflow-hidden gap-3 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                                    <img alt="spotify" loading="lazy" width="700" height="700" decoding="async"
                                        data-nimg="1" class="aspect-video object-cover" style="color:transparent"
                                        src="https://ez-snippet.vercel.app/_next/image?url=%2Fprojects%2Famazon-clone.jpeg&w=750&q=75">
                                    <div class="flex flex-col px-4 py-2 h-24">
                                        <div class="flex font-bold">Amazon Clone</div>
                                        <div class="flex text-info text-xs">NodeJs, Express, Mongoose, Next.js 13, Next
                                            Auth, React Hook Form, Typescript, Tailwind CSS</div>
                                    </div>
                                </div>
                            </a><a target="_blank" href="https://github.com/nwaliaez/dalleClone">
                                <div
                                    class="flex flex-col overflow-hidden gap-3 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                                    <img alt="spotify" loading="lazy" width="700" height="700" decoding="async"
                                        data-nimg="1" class="aspect-video object-cover" style="color:transparent"
                                        src="https://ez-snippet.vercel.app/_next/image?url=%2Fprojects%2Fdalle-clone.webp&w=750&q=75">
                                    <div class="flex flex-col px-4 py-2 h-24">
                                        <div class="flex font-bold"> DALL·E Clone</div>
                                        <div class="flex text-info text-xs">OpenAI, Nodejs, Express, Mongoose, ReactJS,
                                            Tailwind CSS</div>
                                    </div>
                                </div>
                            </a></div>
                    </section>
                    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-5 mt-5 md:p-0">
                        <div class="col-span-2 p-6 md:col-span-2 lg:col-span-3">
                            <div class="text-xl font-medium mt-2 text-zinc-200 mb-5">What I know</div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                                <div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
                                    <div class="text-primary font-medium text-lg tracking-wider">Frontend</div>
                                    <div class="flex flex-wrap gap-2">
                                        <div class="rounded-md bg-body text-xs text-primary p-2">HTML</div>
                                        <div class="rounded-md bg-body text-xs text-primary p-2">CSS</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
                                            Tailwind</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-yellow-500/60">
                                            Javascript</div>
                                        <div class="rounded-md bg-body text-xs text-primary p-2">Typescript</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
                                            React Js</div>
                                        <div class="rounded-md bg-body text-xs text-primary p-2 border border-black/60">
                                            Next Js 13</div>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
                                    <div class="text-primary font-medium text-lg tracking-wider">Backend</div>
                                    <div class="flex flex-wrap gap-2">
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-green-500/60">
                                            Node Js</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-gray-500/60">
                                            Express Js</div>
                                        <div class="rounded-md bg-body text-xs text-primary p-2">BUN Js</div>
                                        <div class="rounded-md bg-body text-xs text-primary p-2">Elysia</div>
                                        <div class="rounded-md bg-body text-xs text-primary p-2">Next Auth</div>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
                                    <div class="text-primary font-medium text-lg tracking-wider">Database</div>
                                    <div class="flex flex-wrap gap-2">
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
                                            MySql</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-emerald-500/60">
                                            MongoDB</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
                                            PostgreSQL</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-red-500/60">
                                            Redis</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-yellow-500/60">
                                            Elastic Search</div>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
                                    <div class="text-primary font-medium text-lg tracking-wider">Devops</div>
                                    <div class="flex flex-wrap gap-2">
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
                                            Docker</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-blue-500/60">
                                            Kubernetes</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-orange-500/60">
                                            GIT</div>
                                        <div class="rounded-md bg-body text-xs text-primary p-2">Jenkins</div>
                                        <div class="rounded-md bg-body text-xs text-primary p-2">Ansible</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-purple-500/60">
                                            Terraform</div>
                                        <div
                                            class="rounded-md bg-body text-xs text-primary p-2 border border-yellow-500/60">
                                            AWS</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid bg-cardPrimary gap-6 p-6 shadow-lg">
                            <div class="text-xl font-medium mt-2 text-zinc-200">More projects</div>
                            <div class="grid grid-cols-1 gap-4 rounded-lg"><a target="_blank"
                                    href="https://github.com/nwaliaez/ezClothing">
                                    <div class="flex items-center gap-1 text-primary rounded-lg"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shirt">
                                            <path
                                                d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z">
                                            </path>
                                        </svg>
                                        <div class="flex flex-1 flex-col px-4 py-2">
                                            <div class="flex text-sm font-medium">Ez Clothing</div>
                                            <div class="flex text-info text-xs ">Next.js 13, Drizzle, PostgreSql,
                                                Docker, ShadCn</div>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </div>
                                </a><a target="_blank" href="https://github.com/nwaliaez/HardhatLottery">
                                    <div class="flex items-center gap-1 text-primary rounded-lg"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket">
                                            <path
                                                d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z">
                                            </path>
                                            <path d="M13 5v2"></path>
                                            <path d="M13 17v2"></path>
                                            <path d="M13 11v2"></path>
                                        </svg>
                                        <div class="flex flex-1 flex-col px-4 py-2">
                                            <div class="flex text-sm font-medium">Ethereum Lottery</div>
                                            <div class="flex text-info text-xs ">Solidity, Ethers, Hardhat, Chai</div>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </div>
                                </a><a target="_blank" href="https://github.com/nwaliaez/filetransfer-webrtc">
                                    <div class="flex items-center gap-1 text-primary rounded-lg"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                            <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                        </svg>
                                        <div class="flex flex-1 flex-col px-4 py-2">
                                            <div class="flex text-sm font-medium">File Sharing App</div>
                                            <div class="flex text-info text-xs ">Node js, Express, Web Sockets, WebRTC,
                                                ReactJs</div>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </div>
                                </a><a target="_blank" href="https://snake-nwaliaez.vercel.app/">
                                    <div class="flex items-center gap-1 text-primary rounded-lg"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-gamepad2">
                                            <line x1="6" x2="10" y1="11" y2="11"></line>
                                            <line x1="8" x2="8" y1="9" y2="13"></line>
                                            <line x1="15" x2="15.01" y1="12" y2="12"></line>
                                            <line x1="18" x2="18.01" y1="10" y2="10"></line>
                                            <path
                                                d="M17.32 5H6.68a4 4 0 0 0-3.978 3.59c-.006.052-.01.101-.017.152C2.604 9.416 2 14.456 2 16a3 3 0 0 0 3 3c1 0 1.5-.5 2-1l1.414-1.414A2 2 0 0 1 9.828 16h4.344a2 2 0 0 1 1.414.586L17 18c.5.5 1 1 2 1a3 3 0 0 0 3-3c0-1.545-.604-6.584-.685-7.258-.007-.05-.011-.1-.017-.151A4 4 0 0 0 17.32 5z">
                                            </path>
                                        </svg>
                                        <div class="flex flex-1 flex-col px-4 py-2">
                                            <div class="flex text-sm font-medium">Snake Game</div>
                                            <div class="flex text-info text-xs ">Next.js 13, Tailwind CSS, Typescript
                                            </div>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </div>
                                </a></div>
                        </div>
                    </section>
                    <section class="grid gap-5 p-5 md:p-0">
                        <div class="text-xl font-bold text-highlight">Web3</div>
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl::grid-cols-5 gap-5">
                            <div class="flex flex-col gap-3"><a target="_blank" href="/">
                                    <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="Solidity"
                                            loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                                            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                            sizes="100vw"
                                            src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fweb3%2Fsolidity.jfif&w=3840&q=75">
                                        <div class="progress-bar">
                                            <div class="h-full bg-btnHighlight" style="width:90%"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid gap-2 px-2">
                                    <div class="text-highlight font-bold">Solidity</div>
                                    <div class="flex gap-2 md:gap-10"><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg>1,128</a><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-history">
                                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                <path d="M3 3v5h5"></path>
                                                <path d="M12 7v5l4 2"></path>
                                            </svg>1 day ago</a></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3"><a target="_blank" href="/">
                                    <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="Hardhat"
                                            loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                                            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                            sizes="100vw"
                                            src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fweb3%2Fhardhat.jpeg&w=3840&q=75">
                                        <div class="progress-bar">
                                            <div class="h-full bg-btnHighlight" style="width:80%"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid gap-2 px-2">
                                    <div class="text-highlight font-bold">Hardhat</div>
                                    <div class="flex gap-2 md:gap-10"><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg>1,128</a><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-history">
                                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                <path d="M3 3v5h5"></path>
                                                <path d="M12 7v5l4 2"></path>
                                            </svg>1 day ago</a></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3"><a target="_blank" href="/">
                                    <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="Metamask"
                                            loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                                            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                            sizes="100vw"
                                            src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fweb3%2Fmetamask.webp&w=3840&q=75">
                                        <div class="progress-bar">
                                            <div class="h-full bg-btnHighlight" style="width:90%"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid gap-2 px-2">
                                    <div class="text-highlight font-bold">Metamask</div>
                                    <div class="flex gap-2 md:gap-10"><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg>1,128</a><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-history">
                                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                <path d="M3 3v5h5"></path>
                                                <path d="M12 7v5l4 2"></path>
                                            </svg>1 day ago</a></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3"><a target="_blank" href="/">
                                    <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="Chainlink"
                                            loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                                            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                            sizes="100vw"
                                            src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fweb3%2Fchainlink.png&w=3840&q=75">
                                        <div class="progress-bar">
                                            <div class="h-full bg-btnHighlight" style="width:80%"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid gap-2 px-2">
                                    <div class="text-highlight font-bold">Chainlink</div>
                                    <div class="flex gap-2 md:gap-10"><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg>1,128</a><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-history">
                                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                <path d="M3 3v5h5"></path>
                                                <path d="M12 7v5l4 2"></path>
                                            </svg>1 day ago</a></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3"><a target="_blank" href="/">
                                    <div class="relative aspect-video rounded-lg overflow-hidden"><img
                                            alt="OpenZeppelin" loading="lazy" decoding="async" data-nimg="fill"
                                            class="object-cover"
                                            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                            sizes="100vw"
                                           src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fweb3%2Fopenzeppelin.png&w=3840&q=75">
                                        <div class="progress-bar">
                                            <div class="h-full bg-btnHighlight" style="width:70%"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid gap-2 px-2">
                                    <div class="text-highlight font-bold">OpenZeppelin</div>
                                    <div class="flex gap-2 md:gap-10"><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg>1,128</a><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-history">
                                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                <path d="M3 3v5h5"></path>
                                                <path d="M12 7v5l4 2"></path>
                                            </svg>1 day ago</a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="grid gap-5 p-5 md:p-0">
                        <div class="text-xl font-bold text-highlight">Others</div>
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl::grid-cols-5 gap-5">
                            <div class="flex flex-col gap-3"><a target="_blank" href="/">
                                    <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="Rest API"
                                            loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                                            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                            sizes="100vw"
                                            src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fothers%2Frest.png&w=3840&q=75">
                                        <div class="progress-bar">
                                            <div class="h-full bg-btnHighlight" style="width:90%"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid gap-2 px-2">
                                    <div class="text-highlight font-bold">Rest API</div>
                                    <div class="flex gap-2 md:gap-10"><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg>1,128</a><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-history">
                                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                <path d="M3 3v5h5"></path>
                                                <path d="M12 7v5l4 2"></path>
                                            </svg>1 day ago</a></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3"><a target="_blank" href="/">
                                    <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="SOAP API"
                                            loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                                            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                            sizes="100vw"
                                           src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fothers%2Fsoap.jpg&w=3840&q=75">
                                        <div class="progress-bar">
                                            <div class="h-full bg-btnHighlight" style="width:70%"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid gap-2 px-2">
                                    <div class="text-highlight font-bold">SOAP API</div>
                                    <div class="flex gap-2 md:gap-10"><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg>1,128</a><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-history">
                                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                <path d="M3 3v5h5"></path>
                                                <path d="M12 7v5l4 2"></path>
                                            </svg>1 day ago</a></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3"><a target="_blank" href="/">
                                    <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="GraphQl"
                                            loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                                            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                            sizes="100vw"
                                           src="https://ez-snippet.vercel.app/_next/image?url=%2Ftech%2Fothers%2Fgraphql.png&w=3840&q=75">
                                        <div class="progress-bar">
                                            <div class="h-full bg-btnHighlight" style="width:70%"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid gap-2 px-2">
                                    <div class="text-highlight font-bold">GraphQl</div>
                                    <div class="flex gap-2 md:gap-10"><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg>1,128</a><a target="_blank"
                                            class="flex items-center text-info text-xs gap-1" href="/"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-history">
                                                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                <path d="M3 3v5h5"></path>
                                                <path d="M12 7v5l4 2"></path>
                                            </svg>1 day ago</a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</body>

</html>