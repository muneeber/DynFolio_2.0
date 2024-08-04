<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafyz.Dev</title>
    <link href="./output.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html{
            scroll-behavior: smooth;
        }
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
        <livewire:aside/>
       
        <main class=" flex-1 pl-0 lg:pl-[300px]  ">
            <nav class="flex sticky shadow-md top-0 z-20 bg-body p-5 text-info justify-between">
                <div></div>
                <div class="flex items-center gap-5">
                    <a href="#contact"
                        class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-btnHighlight text-highlight text-xs py-2 px-4">Contact
                        Me <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg></a><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24"
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
                <livewire:heroSection/>
               
                <div class="flex flex-col gap-10 lg:px-10">
                <livewire:mainProjects/>
                    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-5 mt-5 md:p-0">
                       <livewire:skills/>
                     <livewire:miniProjects/>
                    </section>
                   
                  <livewire:otherProjects/>
                </div>
            </div>
            <livewire:contactSection>
            </main>
        </div>
        @livewire('notifications')

    </body>
    {{-- <livewire:footer> --}}

</html>