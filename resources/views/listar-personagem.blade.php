@foreach ($personagem as $heroi)
    <h1>Nome do Personagem: {{ $heroi['name'] }}</h1>
    <h1>Poder: {{ $heroi['poder'] }}</h1>
@endforeach

{{ $personagem->links() }}