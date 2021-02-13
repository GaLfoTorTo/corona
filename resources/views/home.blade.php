<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
        <title>Home</title>
    </head>
    <body>
        <main class="container">
            @include('layout.menu')
            <div class="secao1">
                <img class="icon" src="../../public/img/iconeCorona.png" alt="">
                <h1 class="tituloSecao1">O que é coronavírus</h1>
                <p class="paragrafoSecao1">Os coronavírus são uma grande família de vírus comuns em muitas espécies 
                    diferentes de animais, incluindo camelos, gado, gatos e morcegos. Raramente, 
                    os coronavírus que infectam animais podem infectar pessoas, como exemplo do 
                    MERS-CoV e SARS-CoV. Recentemente, em dezembro de 2019, houve a transmissão 
                    de um novo coronavírus (SARS-CoV-2), o qual foi identificado em Wuhan na China 
                    e causou a COVID-19, sendo em seguida disseminada e transmitida pessoa a pessoa.
                    A COVID-19 é uma doença causada pelo coronavírus, denominado SARS-CoV-2, que 
                    apresenta um espectro clínico variando de infecções assintomáticas a quadros 
                    graves. De acordo com a Organização Mundial de Saúde, a maioria (cerca de 80%)
                    dos pacientes com COVID-19 podem ser assintomáticos ou oligossintomáticos 
                    (poucos sintomas), e aproximadamente 20% dos casos detectados requer atendimento 
                    hospitalar por apresentarem dificuldade respiratória, dos quais aproximadamente 
                    5% podem necessitar de suporte ventilatório.</p>
            </div>
            <div class="secao2"></div>
        </main>
    </body>
</html>
