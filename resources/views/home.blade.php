<x-app
    title="Learn about Laravel and its ecosystem."
>
    <x-section class="mt-16 text-center">
        <x-slot:title tag="h1" class="container font-bold text-center text-3xl/none md:text-4xl/none lg:text-5xl/none">
            <div class="flex items-center justify-center gap-4 mt-8 md:gap-8">
                <x-icon-laravel class="h-10 md:h-[3.25rem]" />
                <x-icon-livewire class="h-10 mx-2 md:h-12" />
                <x-icon-alpinejs class="h-6 mr-1 md:h-8" />
                <x-icon-tailwind-css class="h-8 mr-1 md:h-12" />
                <x-icon-vuejs class="h-10 md:h-12" />
            </div>

            <div class="mt-8">Learn about Laravel and its&nbsp;ecosystem.</div>
        </x-slot:title>

        <p class="container mt-2 text-xl/tight md:text-2xl/tight lg:text-3xl/tight">
            Join more than <span class="font-semibold text-transparent bg-gradient-to-r from-indigo-300 to-indigo-400 bg-clip-text">30,000</span> readers and skyrocket your web&nbsp;development&nbsp;skills.
        </p>

        <x-sponsors class="mt-16">
            <x-slot:title>I'm grateful for my sponsors!</x-slot:title>
        </x-sponsors>
    </x-section>

    <x-section class="container mt-32">
        <x-slot:title class="text-center">
            Popular articles
        </x-slot:title>

        <ul class="grid gap-16 mt-8 md:grid-cols-2">
            <li>
                <x-post-template
                    title="Your sponsored article here"
                    description="Talk about your business, stay on top of everything for a week, and get a valuable link for life."
                />
            </li>

            @foreach ($popular as $post)
                <li>
                    <x-post :post="$post" />
                </li>
            @endforeach
        </ul>
    </x-section>

    @if ($categories->isNotEmpty())
        <x-section class="container mt-32">
            <x-slot:title class="text-center">
                A variety of topics
            </x-slot:title>

            <ul class="grid gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3 md:gap-16">
                @foreach ($categories as $category)
                    <li class="h-full">
                        <x-home.category :category="$category" />
                    </li>
                @endforeach
            </ul>
        </x-section>
    @endif

    <x-section class="container mt-32">
        <x-slot:title class="text-center">
            Latest articles
        </x-slot:title>

        <ul class="grid gap-16 mt-8 md:grid-cols-2">
            <li>
                <x-post-template
                    title="Your sponsored article here"
                    description="Talk about your business, stay on top of everything for a week, and get a valuable link for life."
                />
            </li>

            @foreach ($latest as $post)
                <li>
                    <x-post :post="$post" />
                </li>
            @endforeach
        </ul>
    </x-section>

    <div class="container mt-32">
        <x-newsletter-form />
    </div>

    <x-section id="about" class="container mt-32 lg:max-w-screen-md scroll-mt-8">
        <x-slot:title class="text-center">
            About Benjamin Crozat
        </x-slot:title>

        <x-prose class="mt-8">
            {!! Str::markdown(file_get_contents(resource_path('markdown/about.md'))) !!}
        </x-prose>
    </x-section>
</x-app>
