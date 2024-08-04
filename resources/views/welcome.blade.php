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
        <livewire:nav/>
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