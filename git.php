<?php
    
    // Inclui o cabeçalho do template
require ('_header.php');

?>

<h1>Aprenda mais sobre Git</h1>
				<h3>O que é Git e para que é usado?</h3>
                <p>Git é um sistema de controle de versão de arquivos. Através deles podemos desenvolver projetos na qual diversas pessoas podem contribuir simultaneamente no mesmo, editando e criando novos arquivos e permitindo que os mesmos possam existir sem o risco de suas alterações serem sobrescritas.</p>
                
                <center><img src="img/git.png" alt="imagem ilustrativa"></center>
 do seu projeto, ou branch. Suponha que o seu projeto seja um site html, e você deseja criar uma nova seção no seu código HTML, mas naquele momento você não deseja que estas alterações estejam disponíveis para mais ninguém, só para você. Isso é, você quer alterar o projeto (incluindo vários arquivos nele), mas ainda não quer que isso seja tratado como “oficial” para outras pessoas, então vc cria um branch (como se fosse uma cópia espelho) e então trabalha apenas nesse branch, até acertar todos os detalhes dele. Após isso, você pode fundir seu branch com o projeto original.</p>            
					<p>Outro fator importante do git é a possibilidade de criar, a qualquer momento, vários snapshots

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>