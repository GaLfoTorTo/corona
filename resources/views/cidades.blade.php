
@include('layout.header')
<section class="secao1-cidades">
    <h1 class="tituloSecao1-cidades">Estados em alta de mortes</h1>
    <p>Antes de falarmos sobre cidades em si, quais estão em alta de contaminações e mortes, devemos resaltar os estados do Brasil e suas médias de mortes</p>
    <img src="../../public/img/mapa.png" class="mapa">
    <figure>
        <img src="../../public/img/estados1.png" class="estado1">
        <img src="../../public/img/estados2.png" class="estado2">
        <img src="../../public/img/estados3.png" class="estado3">
        <img src="../../public/img/estados4.png" class="estado4">
    </figure>
</section>
<section class="secao2-cidades">
    <div class="cardTituloAlta">
        <h3 class="tituloAlta">Os estados com maiores porcentagens na alta de mortes até o momento são:</h3>
    </div>
    <div class="alta">
        <p><b>Roraima:</b> com 135% de aumento na taxa de mortes, 78.394 casos confirmados e 1.024 casos de mortes.</p>
        <p><b>Acre:</b> com 73% de aumento na taxa de mortes, 53.892 casos confirmados e 940 casos de mortes.</p>
        <p><b>Bahia:</b> com 61% de aumento na taxa de mortes, 639.227 casos confirmados e 10.928 casos de mortes.</p>
        <p><b>Ceará:</b> com 55% de aumento na taxa de mortes, 408.555 casos confirmados e 10.868 casos de mortes.</p>
        <p><b>Pará:</b> com 53% de aumento na taxa de mortes, 351.472 casos confirmados e 8.087 casos de mortes.</p>
    </div>
    <div class="cardTituloEstabilidade">
        <h3 class="tituloEstabilidade">Os estados com estabilidade na porcentagens de mortes até o momento são:</h3>
    </div>
    <div class="estabilidade">
        <p><b>Santa Catarina:</b> com -12% de aumento na taxa de mortes, 622.727 casos confirmados e 6.804 casos de mortes.</p>
        <p><b>Pernambuco:</b> com +11% de aumento na taxa de mortes, 284.840 casos confirmados e 10.744 casos de mortes.</p>
        <p><b>Rio Grande do Norte:</b> com -11% de aumento na taxa de mortes, 157.422 casos confirmados e 3.424 casos de mortes.</p>
        <p><b>Espírito Santo:</b> com -10% de aumento na taxa de mortes, 312.614 casos confirmados e 10.744 casos de mortes.</p>
        <p><b>Sergipe:</b> com -10% de aumento na taxa de mortes, 146.558 casos confirmados e 2.893 casos de mortes.</p>
    </div>
    <div class="cardTituloQueda">
        <h3 class="tituloQueda">Os estados com queda na porcentagens de mortes até o momento são:</h3>
    </div>
    <div class="queda">
        <p><b>Amazônas Catarina:</b> com -30% de aumento na taxa de mortes, 299.495 casos confirmados e 10.181 casos de mortes.</p>
        <p><b>Tocantins:</b> com -33% de aumento na taxa de mortes, 107.832 casos confirmados e 1.461 casos de mortes.</p>
        <p><b>Rio de Janeiro:</b> com -20% de aumento na taxa de mortes, 564.513 casos confirmados e 31.701 casos de mortes.</p>
    </div>
</section>
<section class="secao3-cidades">
    <h2 class="tituloSecao3-cidades">As cidades brasileiras menos (e mais) vulneráveis à covid-19</h2>
    <p>
        Colina, no interior do estado de São Paulo, é a cidade brasileira menos vulnerável à covid-19, doença causada pelo coronavírus, segundo o Índice de Vulnerabilidade dos Municípios (IVM), criado pelo Instituto Votorantim nesta semana para mapear o cenário da pandemia no país. O estudo, liberado com exclusividade para EXAME, coloca São Bernardo do Campo, cidade da região metropolitana de São Paulo, no segundo lugar seguida de Nova Lima, em Minas Gerais. Mas o que faz de uma cidade mais ou menos vulnerável? Número de leitos disponíveis na UTI e de respiradores são indicadores importantes, mas não são os únicos. Além desses, o IVM considera fatores como a proporção da população idosa, o PIB per capita e a situação fiscal da cidade. O Índice varia de 0 a 100: quanto mais alto o valor, maior é a vulnerabilidade. É possível ver em que situação está seu município viajando pelo mapa do Brasil <a href="http://ivm.votorantim.rarolabs.com/" >.<b>aqui.</b></a>
    </p>
    <img src="../../public/img/leitos.jpg" class="imgSecao3-cidades">
</section>
<section class="secao4-cidades" >
    <div class="listaMaisVul">
        <h4>Top 10 cidades mais vulneraveis </h4>
        <ol>
            <li>
                <p>Mojuí dos Campos - PA</p>
            </li>
            <li>
                <p>Wanderley - BA</p>
            </li>
            <li>
                <p>Ibirataia - BA</p>
            </li>
            <li>
                <p>Sítio do Quinto - BA</p>
            </li>
            <li>
                <p>Jussiape - BA</p>
            </li>
            <li>
                <p>Delmiro Gouveia - AL</p>
            </li>
            <li>
                <p>Ubaitaba - BA</p>
            </li>
            <li>
                <p>São Francisco - MG</p>
            </li>
            <li>
                <p>São Raimundo Nonato - PI</p>
            </li>
            <li>
                <p>Faro - PA</p>
            </li>
        </ol>
    </div>
    <div class="listaMenosVul">
        <h4>Top 10 cidades menos vulneraveis </h4>
        <ol>
            <li>
                <p>Colina (SP)</p>
            </li>
            <li>
                <p>São Bernardo do Campo (SP)</p>
            </li>
            <li>
                <p>Nova Lima (MG)</p>
            </li>
            <li>
                <p>Flores da Cunha (RS)</p>
            </li>
            <li>
                <p>Colômbia (SP)</p>
            </li>
            <li>
                <p>Cuiabá (MT)</p>
            </li>
            <li>
                <p>Extrema (MG)</p>
            </li>
            <li>
                <p>Porto Reral (RJ)</p>
            </li>
            <li>
                <p>Olímpia (SP)</p>
            </li>
            <li>
                <p>Gavião Peixoto (SP)</p>
            </li>
        </ol>
    </div>
</section>
<section class="secao5-cidades">
    <h2 class="tituloSecao5-cidades">Estatisticas Covid-19 no Distríto Federal </h2>
    <p class="subTitulo-cidades">Veja nos gráficos abaixo as médias móveis de mortes e casos de coronavírus no Distrito Federal.</p>
    <div class="cardMortes">
        <h3>Mortes por Covid-19 por dia</h3>
        <p>O apice de mortes registrados em um unico dia no DF foram de 44 mortes no dia 21/08/2020</p>
        <img src="../../public/img/graficoMortes.png">
    </div>
    <div class="cardMortes">
        <h3>Total de Mortes</h3>
        <p>O Total de mortes registrados no DF ate o momento são de 4.708 mortes.</p>
        <img src="../../public/img/totalMortes.png">
    </div>
    <div class="cardMortes">
        <h3>Mortes por Covid-19 por dia</h3>
        <p>O apice de casos registrados em um unico dia no DF foram de 2.093 casos no dia 28/07/2020</p>
        <img src="../../public/img/mediaCasos.png">
    </div>
    <div class="cardMortes">
        <h3>Total de casos</h3>
        <p>O Total de casos registrados no DF até o momento são de 288.229 casos</p>
        <img src="../../public/img/totalCasos.png">
    </div>
</section>
@include('layout.footer')