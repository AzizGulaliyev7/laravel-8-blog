@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?id={{ auth()->id() }}" width="40" height="40" class="rounded-full">

                <h2 class="ml-3">
                    Want to participate?
                </h2>
            </header>

            <x-form.field>
                <textarea
                    name="body"
                    class="w-full text-sm focus:outline-none focus:ring"
                    rows="6"
                    placeholder="Leave what you think!"
                    required>
                </textarea>

                <x-form.error name="body" />
            </x-form.field>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-form.button>
                    Submit
                </x-form.button>
            </div>

        </form>
    </x-panel>

@else

    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login" class="hover:underline">Log in</a> to leave a comment
    </p>
@endauth
