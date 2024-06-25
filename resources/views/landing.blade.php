<x-layout>
  <x-navbar></x-navbar>
  @foreach ($articles as $article)
      <p>{{$article}}</p>
  @endforeach
</x-layout>
