<x-app class="text-gray-600">
    <article class="container py-8">
        <div class="text-center">
            <h1 class="text-xl font-bold sm:text-2xl md:text-3xl">
                Instantly migrate PHPUnit tests to Pest
            </h1>

            <div class="text-gray-600 sm:text-lg md:text-xl">A tool based on <a href="https://packagist.org/packages/pestphp/pest-plugin-drift" target="_blank" rel="nofollow noopener noreferrer" class="text-indigo-400 underline">pestphp/pest-plugin-drift</a> and created by <a href="{{ route('home') }}" class="text-indigo-400 underline">Benjamin Crozat</a></div>
        </div>

        <div class="mt-8">
            <livewire:phpunit-to-pest />
        </div>

        <h2 class="mt-8 font-bold sm:text-lg md:text-xl">What is Pest?</h2>
        <div class="mt-2">Pest is a revolutionary testing framework with a focus on simplicity. It's been meticulously designed to bring back the joy of testing in PHP and go even further than what you can do with PHPUnit.</div>

        <h2 class="mt-8 font-bold sm:text-lg md:text-xl">Why switch to Pest?</h2>
        <div class="mt-2">Switching to Pest brings several benefits to your codebase:</div>
        <ul class="mt-2 list-[circle] pl-3 ml-4">
            <li>Pest is officially supported by Laravel.</li>
            <li class="mt-2">Your tests become more concise and readable.</li>
            <li class="mt-2">The barrier to entry is lower, thanks to reduced boilerplate and a less intimidating syntax.</li>
            <li class="mt-2">In addition to traditionnal testing, Pest can also help you enforce coding standards thanks to <a href="https://pestphp.com/docs/arch-testing" target="_blank" rel="nofollow noopener noreferrer" class="text-indigo-400 underline">its architecture testing helpers</a>.</li>
        </ul>

        <h2 class="mt-8 font-bold sm:text-lg md:text-xl">Is this tool enough to convert my test suite?</h2>
        <div class="mt-2">The <a href="https://packagist.org/packages/pestphp/pest-plugin-drift" target="_blank" rel="nofollow noopener noreferrer" class="text-indigo-400 underline">pestphp/pest-plugin-drift</a> used under the hood of this tool performs a basic conversion, which will help you get started.</div>
        <div class="mt-2">But if you are looking for a miracle solution, I created an even more advanced tool called <a href="https://packagist.org/packages/pestphp/pest-plugin-drift" class="text-indigo-400 underline">Smousss</a>, which is based on artificial intelligence and can convert your test suite way better than any developer.</div>
    </article>

    <div class="mt-8 bg-gray-900 dark:bg-black">
        <x-footer class="text-gray-200" />
    </div>
</x-app>