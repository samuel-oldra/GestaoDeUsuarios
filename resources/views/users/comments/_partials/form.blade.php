<div class="w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <textarea name="body" placeholder="Comentário" cols="30" rows="10"
              class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
        {{ $comment->body ?? old('body') }}
    </textarea>
    <label for="visible">
        <input type="checkbox" name="visible"
            @if (isset($comment) && $comment->visible)
                checked="checked"
            @endif
        >
        Visível?
    </label>
    <br/><br/>
    <button type="submit"
            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>
    <a href="{{ route('comments.index', $user->id) }}"
       class="shadow bg-gray-500 hover:bg-gray-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Voltar
    </a>
</div>