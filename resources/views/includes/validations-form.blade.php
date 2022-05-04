@if($errors->any())
    <ul class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4">
        @foreach($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif