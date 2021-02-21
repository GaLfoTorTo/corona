@include('layout.header')
<section class="secao1-contato">
    <h1 class="tituloSecao1-contato" >Comentários</h1>
    <p>Caso tenha alguma crítica ou alguma sugestão ou até mesmo um elogío para nos fazer, preencha o formulário a baixo e deixe seu comentário</p>
</section>
<section class="secao2-contato" aling="center">
        
            <form align="center">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="digite seu nome">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="digite seu sobrenome">
                <br />
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Ex: juraildo@email.com">
                <br />
                <label for="confirmacao">Deseja receber sugestões de artigos ?</label>
                <input type="radio" name="confirmacao" id="confirmacao">Sim
                <label for="confirmacao"></label>
                <input type="radio" name="confirmacao" id="confirmacao">Não
                <br />
                <label for="mensagem"></label>
                <textarea type="mensagem" name="mensagem" id="comentario" rows="10"></textarea>
                <br />
                <button id="enviar" type="submit" value="enviar">enviar</button>
            </form>
        
</section>
<section class="secao3-contato">
    <h1 class="tituloSecao3-contato">Contatos</h1>
    <p class="secao3msg-contato">Caso tenhas se interessado no design do site e queira contratar o serviço entre em contato atraves de:</p>
    <ul>
        <li>
            <i class="fas fa-envelope" id="iconContato"></i>
            <p>whilinilsu@email.com</p>
        </li>
        <li>
            <i class="fab fa-instagram" id="iconContato"></i>
            <p>@whilinilsu</p>
        </li>
        <li>
            <i class="fas fa-phone-alt" id="iconContato"></i>
            <p>(61)99999-9999</p>
        </li>
    </ul>
</section>
@include('layout.footer')
