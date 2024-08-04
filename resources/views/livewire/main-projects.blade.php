<div>
    {{-- In work, do what you enjoy. --}}
    <section class="grid gap-8 p-5 mt-5 md:p-0">
        <div class="text-xl font-medium text-zinc-200">Projects</div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl::grid-cols-4 gap-5">
            @foreach ($main as $project)
                
            <a
                target="_blank" href="{{ $project->backLink }}">
                <div
                    class="flex flex-col overflow-hidden gap-3 bg-white text-zinc-800 rounded-lg overflow-ellipsis">
                    <img alt="spotify" loading="lazy" width="700" height="700" decoding="async"
                        data-nimg="1" class="aspect-video object-cover" style="color:transparent"
                        src="{{ Storage::url($project->image) }}">
                    <div class="flex flex-col px-4 py-2 h-24">
                        <div class="flex font-bold capitalize">{{ $project->name }}</div>
                        <div class="flex text-info text-xs">{{ $project->desc }}</div>
                    </div>
                </div>
            </a>
            @endforeach
            {{-- <a
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
        </a> --}}
            </div>
    </section>
</div>
