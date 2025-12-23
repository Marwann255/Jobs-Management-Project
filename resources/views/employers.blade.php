<x-layout>
    @foreach ($employers as $employer)
    <img src="{{asset('storage/' . $employer->logo)}}" class="w-50 h-50 border rounded" alt="">
    @endforeach
</x-layout>