<?php
  session_start();
  include 'header.php';
?>


      <!-- corpo da página -->
      <div class="container">
       
      <!-- Cadastro de anunciante -->
       <div class="container" id="cadastro">
        <div class="row">
          <div class="col-sm">
            <h1>Seja bem-vindo a Ricoss</h1>  
              <p>Simplifique a forma de anunciar seu imóvel e seja nosso parceiro!</p>
              <p>Cadastre-se e anuncie seu imóvel</p>
              <h3 class="text-center">Anuncie conosco</h3>
              <form id="formContato" class="formAnunciane" name="form" method="post" action="sql_inserir_anunciante.php">
                <!-- <div class="row"><h4>Entre em contato conosco</h4></div> -->
                <?php 
                  if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                  } 
                ?>
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" class="form-control form-input" placeholder="Nome Completo" name="nome">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" class="form-control form-input" placeholder="Escolha um nome de usuário" name="usuario">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="email" class="form-control form-input" placeholder="E-mail" name="email">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control form-input" placeholder="Cel: (xx)xxxxx-xxxx" name="celular" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="password" class="form-control form-input" placeholder="Senha" name="senha">
                  </div>
                  <div class="col-md-6">
                    <input type="password" class="form-control form-input" placeholder="Confirmar a senha" name="confirmarSenha">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label class="form-check-label termos" for="aceitarTermos">
                      <a href="#" data-toggle="modal" data-target="#modalAceitarTermos"> Clique aqui </a> para aceitar os <u>termos de uso</u> e a <u>política de privacidade</u>.
                      <span id="aceiteOsTermos"></span>
                    </label>
                    <!-- Modal termos de uso do anunciante-->
                    <div class="modal fade" id="modalAceitarTermos" tabindex="-1" role="dialog" aria-labelledby="modalAceitarTermos" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <!-- Termos de uso anunciante-->
                          <div class="modal-header">                              
                              <img src="img/print.svg" alt="Imprimir" class="btn-imprimir">
                          </div>
                          <div id="div-imprimir">
                            <div class="modal-body">
                              <div class="modal-header">                              
                                <h5 class="modal-title" id="modalAceitarTermos">Termos de uso (Anunciante)</h5>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eaque autem laboriosam minus aliquam neque quidem blanditiis vel! Libero velit, sequi ipsa veritatis placeat facilis quae illo quibusdam labore fuga?</p>

                              <!-- Final termos de uso anunciante -->

                              <!-- Política de privacidade-->
                              <div class="modal-header">                              
                                <h5 class="modal-title" id="modalAceitarTermos">Política de privacidade</h5>
                              </div>
                              <div>
                                <p>Atualizado em 9 de agosto de 2021</p>

                                <p><b>RICOSS NEGÓCIOS IMOBILIÁRIOS EIRELI</b>, com sede na Avenida Paulista, 171, 4º andar, bairro Bela Vista, cidade de São Paulo, SP, CEP 01311-000, inscrita no C.N.P.J./M.F. sob o nº 26.216.713/0001-79, CRECISP 32.029, administradora do sítio virtual https://www.ricoss.com.br e aplicativo Android https://play.google.com/store/apps/details?id=br.com.ricoss (“PLATAFORMA RICOSS”); e todo aquele que acesse a <b>PLATAFORMA RICOSS; CLIENTE, ANUNCIE, SERVIÇOS, INCORPORADOR, CORRETOR, IMOBILIÁRIA, INVESTIMENTO</b> serão denominados <b>“USUÁRIO”</b> ou <b>“USUÁRIOS”</b> ou <b>“ANUNCIANTES”</b> ou em conjunto com a ADMINISTRADORA, “PARTES” da <b>POLÍTICA DE PRIVACIDADE</b>, a ser aceita pelo <b>TITULAR DOS DADOS</b>, para fins de regulamentação do tratamento de dados pessoais.</p>
                                
                                <p><b>A PLATAFORMA RICOSS</b> garante que qualquer informação que as pessoas naturais fornecerem será armazenada com segurança e processadas de acordo com a legislação de proteção de dados pessoais, o Código de Defesa do Consumidor LEI Nº 8.078, DE 11 DE SETEMBRO DE 1990., o Marco Civil da Internet LEI Nº 12.965, DE 23 DE ABRIL DE 2014, a Lei Geral de Proteção aos Dados LEI Nº 13.709, DE 14 DE AGOSTO DE 2018., os Termos de Uso e esta Política de Privacidade.</p>

                                <p><b>CONTROLADOR DE DADOS PESSOAIS, OPERADOR DE DADOS PESSOAIS, ENCARREGADO, INFRAÇÕES E CONTATO:</b> O controlador dos dados tratados na PLATAFORMA é a RICOSS NEGÓCIOS IMOBILIÁRIOS, a qual possui profissionais responsáveis pelo processamento de dados pessoais, interna e externamente, que poderão ser contatados através do e-mail abaixo. Assim sendo, através deste instrumento, a <b>RICOSS NEGÓCIOS IMOBILIÁRIOS</b> designa os seguintes profissionais como encarregados dos dados:</p>
                                <ul>
                                  <li>NOME: Rivamar Colucci</li>
                                  <li>E-MAIL: contato.ricoss@ricoss.com.br</li>
                                  <li>ENDEREÇO: Avenida Paulista, 171, 4º andar, bairro Bela Vista, cidade de São Paulo, SP, CEP 01311-000</li>
                                </ul>

                                <p>As atividades do Encarregado consistirão em: </p>
                                <ol type="a">
                                  <li>aceitar reclamações e comunicações dos titulares dos dados, prestar esclarecimentos e adotar providências;</li>
                                  <li>receber comunicações da autoridade nacional e adotar providências; </li>
                                  <li>orientar os funcionários e os contratados da entidade a respeito das práticas a serem tomadas em relação à proteção de dados pessoais; e </li>
                                  <li>executar as demais atribuições determinadas pelo controlador ou estabelecidas em normas complementares.</li>
                                </ol>

                                <h3>DEFINIÇÕES TERMINOLÓGICAS</h3>
                                <p>Para os efeitos da presente relação todas as palavras e expressões constantes da lista abaixo, deverão ser entendidas conforme o respectivo significado:</p>

                                <p><b> PLATAFORMA: </b>A PLATAFORMA digital adota um modelo de negócios que funcionam por meio de tecnologias. Trata-se de um ambiente online que conecta quem anuncia a quem consome, permitindo uma relação de troca, muito além da simples compra <b>e</b> venda. Atuamos em veicular anúncios, informações advindos de diversas pessoas e empresas que veiculam seus empreendimentos imobiliários imóveis, serviços ou publicidades vinculadas a estes.</p>

                                <p><b>ANUNCIANTE:</b> Trata-se da pessoa física ou jurídica que contrata a PLATAFORMA da <b>RICOSS NEGÓCIOS IMOBILIÁRIOS</b> e disponibiliza os seus empreendimentos imobiliários e imóveis para os corretores interessados em vende-los ou aluga-los a seus clientes. Tal pessoa física ou jurídica, em alguns casos, realizará o cadastro de procuradores, colaboradores para atuar em seu nome na PLATAFORMA, os quais serão considerados titulares de dados pessoais.</p>

                                <p><b>TITULAR DOS DADOS/USUÁRIO:</b> Trata-se de todas as pessoas naturais que utilizarem a PLATAFORMA em nome do ANUNCIANTE ou realizem interação com a PLATAFORMA por serem corretores de imóveis (CORRETOR) ou proprietário do imóvel anunciado.</p>

                                <p><b>RICOSS:</b> Trata-se da proprietária da PLATAFORMA, que desenvolve, mantém e atualiza a tecnologia utilizada para o melhor uso pelo TITULAR DOS DADOS.</p>

                                <p><b>ANÚNCIOS:</b> Tratam-se de anúncios presentes na PLATAFORMA que podem eventualmente colocar “cookies” no seu computador para servir de referência para os anunciantes.</p>

                                <h3>PREÂMBULO</h3>

                                <p>Considerando que para todos os fins legais a <b>RICOSS</b> é a controladora dos dados pessoais, isto é, quem determina quais tratamentos devem ser realizados para os dados pessoais armazenados e utilizados através da PLATAFORMA.</p>

                                <p>Considerando que esta Política de Privacidade explica como nós, da <b>RICOSS</b>, coletamos, armazenamos, tratamos, compartilhamos e usamos as suas informações enquanto TITULAR DOS DADOS quando faz uso da PLATAFORMA. Este documento é necessário para estabelecer as condições para que possamos prestar serviços relevantes e oportunos, <b>em complemento ao previsto nos TERMOS DE USO e na legislação brasileira aplicável.</b></p>

                                <p>Considerando que esta declaração de privacidade define a política de privacidade em relação à PLATAFORMA da <b>RICOSS</b> somente e não se aplica aos Sites de terceiros. Ao acessar ou clicar em um link para um Site de terceiro, leia a política de privacidade do Site de terceiro para entender as políticas aplicáveis para informações pessoais ou dados processados através do referido site.</p>

                                <p>Considerando que a <b>RICOSS</b> coleta informações pessoais, capazes de identificar os USUÁRIOS, quando: a) cadastram-se na PLATAFORMA; b) participam de nossas promoções ou concursos; c) quando entram em contato conosco pelos canais de atendimento.</p>

                                <p><b> CONSENTIMENTO INEQUÍVOCO:</b> Nós da <b>RICOSS</b> colheremos o seu consentimento de forma <b>inequívoca, livre e informada</b> através da aceitação expressa desta Política de Privacidade e anteriormente ao seu cadastro na PLATAFORMA e após a sua atenta leitura, bem como através de avisos na PLATAFORMA, nos casos em que realizemos qualquer alteração neste documento, na finalidade de uso dos dados ou sejamos obrigados por lei a colher consentimentos mais específicos.<b> Em qualquer caso, não haverá marcação prévia da caixa de aceitação pelo TITULAR DOS DADOS e as comunicações a respeito de dados serão de fácil acesso e públicas. Além disto, o seu consentimento será colhido em separado aos Termos de Uso.</b></p>

                                <p><b>ASSIM SENDO, O TITULAR DOS DADOS AUTORIZA EXPRESSAMENTE A RICOSS A REALIZAR O ARMAZENAMENTO, COMPARTILHAMENTO, TRATAMENTO E USO DOS SEUS DADOS PESSOAIS PARA OS FINS IDENTIFICADOS NESTA POLÍTICA DE PRIVACIDADE E DA LEGISLAÇÃO BRASILEIRA, SEJA ATRAVÉS DE TRATAMENTO MANUAL DE DADOS, CAPTADAS POR TRATAMENTO AUTOMÁTICO POR MEIO DA PLATAFORMA E ATRAVÉS DE QUAISQUER OUTROS MÉTODOS QUE POSSAM SER UTILIZADOS LEGALMENTE.</b></p>

                                <p><b>IMPACTOS DA NEGATIVA NO FORNECIMENTO DOS DADOS PESSOAIS: <u>O fornecimento dos dados pessoais de NOME COMPLETO, E-MAIL, CPF E OU CNPJ E OU CRECI OU OAB OU CNAI OU CAU OU CREA OU QUALQUER OUTRO IDENTIFICAÇÃO, QUE SEJA EXIGIDO PARA ATIVIDADE LEGALMENTE MONITORADA POR ÓRGÃO FEDERAL, SENHA, CIDADE/UF são essenciais para o login na PLATAFORMA e fruição das suas funcionalidades.</b></u></p>

                                <p><b>DADOS PESSOAIS COLETADOS E FINALIDADES DO TRATAMENTO:</b> A <b>RICOSS</b> coletará e tratará as seguintes informações pessoais, quer seja por preenchimento manual em formulário eletrônico ou pela captura automática por mecanismos da PLATAFORMA apenas para os propósitos <b>LEGÍTIMOS, ESPECÍFICOS, EXPLÍCITOS E INFORMADOS AO TITULAR </b>abaixo:</p>

                                <h3>USUÁRIO QUE NÃO REALIZA LOGIN NA PLATAFORMA</h3>

                                <table class="tabela">
                                  <tr>
                                    <td><h4>DADO COLETADO</h4></td>
                                    <td><h4>FINALIDADE</h4></td>
                                  </tr>
                                  <tr>
                                    <td><p>Identificação de sessão, histórico de navegação anonimizado, métricas de conversão de produto.</p></td>
                                    <td><p>Utilizados para o monitoramento de acessos anonimizados, avaliação da qualidade da PLATAFORMA, otimização de investimentos em marketing e planejamento de melhorias nesta.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Cidade / UF.</p></td>
                                    <td><p>Utilizado para possibilitar contato comercial pela RICOSS, quando da solicitação pelo usuário.</p></td>
                                  </tr>
                                </table>

                                <h3>USUÁRIO QUE REALIZA LOGIN NA PLATAFORMA</h3>

                                <table class="tabela">
                                  <tr>
                                    <td><h4>DADO COLETADO</h4></td>
                                    <td><h4>FINALIDADE</h4></td>
                                  </tr>
                                  <tr>
                                    <td><p>Nome completo</p></td>
                                    <td><p>Utilizado para fins identificação individual do TITULAR DOS DADOS, concessão de acesso limitado à PLATAFORMA, prestação de suporte técnico, atendimento comercial, realização de enquetes e identificação de contato comercial da RICOSS ou de seus PARCEIROS e ANUNCIANTES, caso o USUÁRIO autorize tal compartilhamento. Por fim, poderá ser utilizado pelos interessados em contato com o USUÁRIO através do seu HOTSITE e para cruzamento de informação com parceiros que possuam justificativa legal para tratamento do seu dado pessoal para fins de apuração de resultados comerciais.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>E-mail</p></td>
                                    <td><p>Utilizado para identificação do TITULAR DOS DADOS, concessão de acesso limitado à PLATAFORMA, envios de senha, realização de enquetes, suporte técnico e envio de informações pertinentes a utilização da PLATAFORMA. Além disso, utilizado para envio de e-mails transacionais (boas vindas, alertas, recuperação de senhas), envio de e-mail marketing (ofertando serviços, anúncios), da RICOSS, atendimento de solicitações comerciais e de integração. Por fim, poderá ser utilizado pelos interessados em contato com o USUÁRIO através do seu HOTSITE e para cruzamento de informação com parceiros que possuam justificativa legal para tratamento do seu dado pessoal para fins de apuração de resultados comerciais.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Telefone</p></td>
                                    <td><p>Utilizado para validação de cadastro na PLATAFORMA, contato comercial pela RICOSS ou pelo ANUNCIANTE caso autorizado pelo USUÁRIO, contato de clientes trazidos pelo HOTSITE e para cruzamento de informação com parceiros que possuam justificativa legal para tratamento do seu dado pessoal para fins de apuração de resultados comerciais.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Respostas de enquetes</p></td>
                                    <td><p>Utilizadas para fins de melhorias da PLATAFORMA.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Dados de configuração do Hotsite</p></td>
                                    <td><p>Estes dados são tratados com a única finalidade de configurar o HOTSITE para o USUÁRIO.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Imobiliária</p></td>
                                    <td><p>Este dado será utilizado com a finalidade de identificação perante cliente do HOTSITE, para segmentação de marketing pela RICOSS e ANUNCIANTE, bem como para cruzamento de dados com parceiros que possuam justificativa legal para tratamento do seu dado pessoal para fins de apuração de resultados comerciais.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Imobiliária</p></td>
                                    <td><p>Este dado será utilizado com a finalidade de identificação perante cliente do HOTSITE, para segmentação de marketing pela RICOSS e ANUNCIANTE, bem como para cruzamento de dados com parceiros que possuam justificativa legal para tratamento do seu dado pessoal para fins de apuração de resultados comerciais.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>CRECI, OAB, CREA, CAU</p></td>
                                    <td><p>Este dado será utilizado para fins de validação de cadastro perante a RICOSS, ao cliente do HOTSITE e à ANUNCIANTES bem como para cruzamento de dados com parceiros que possuam justificativa legal para tratamento do seu dado pessoal para fins de apuração de resultados comerciais.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Senha</p></td>
                                    <td><p>Este dado é armazenado de forma criptografada e utilizado para que seja permitido o acesso do USUÁRIO à sua conta na PLATAFORMA.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Se é profissional autônomo</p></td>
                                    <td><p>Este dado será utilizado com a finalidade de identificação perante cliente do HOTSITE, para segmentação de marketing pela RICOSS e ANUNCIANTE.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Cidade/UF</p></td>
                                    <td><p>Este dado será utilizado com as finalidades de facilitar o uso dos filtros de localidade, segmentação de marketing pela RICOSS e pelo ANUNCIANTE, caso autorizado pelo USUÁRIO, bem como para a configuração de imóveis em seu HOTSITE.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Interesse inferido a partir do histórico de uso da plataforma</p></td>
                                    <td><p>Este dado será utilizado com as finalidades de segmentação de marketing pela RICOSS e pelo ANUNCIANTE, caso autorizado pelo USUÁRIO.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Propostas enviadas via plataforma</p></td>
                                    <td><p>Este dado será utilizado com as finalidades de segmentação de marketing pela RICOSS e para atendimento da proposta pelo ANUNCIANTE.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Autorização de visitas via plataforma</p></td>
                                    <td><p>Este dado será utilizado com as finalidades de segmentação de marketing pela RICOSS e para atendimento da autorização de visitas pelo ANUNCIANTE.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Histórico de navegação identificado com características do user agent/dispositivo utilizado na navegação</p></td>
                                    <td><p>Estes dados serão utilizados com as finalidades de cômputo de interesse em empreendimentos, identificação de violação dos termos de uso, realização de atendimento de suporte técnico, e, caso o USUÁRIO autorize o compartilhamento, para a melhoria no atendimento a proposta pelo ANUNCIANTE.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Avaliação do atendimento do anunciante</p></td>
                                    <td><p>Este dado será utilizado para identificação dos Anunciantes com melhor atendimento aos USUÁRIOS.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Preferências de recebimento de lista de e-mail</p></td>
                                    <td><p>Este dado é utilizado para controle de envio de e-mails./p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Status de recebimento, abertura e engajamento com os e-mails da plataforma</p></td>
                                    <td><p>Tais dados são utilizados para atendimento de suporte técnico, tracking interno para melhoria do produto e de campanhas de marketing da RICOSS NEGÓCIOS IMOBILIÁRIOS</p></td>
                                  </tr>
                                  <tr>
                                    <td><p>Pontuação nos quizzes de empreendimentos</p></td>
                                    <td><p>Este dado é utilizado para premiar e conceder benefícios para os USUÁRIOS, bem como para segmentação de marketing pela RICOSS NEGÓCIOS IMOBILIÁRIOS e pelo ANUNCIANTE.</p></td>
                                  </tr>
                                </table>

                                <h3>USUÁRIO QUE REALIZA LOGIN NA PLATAFORMA VIA FACEBOOK</h3>

                                <table class="tabela">
                                  <tr>
                                    <td><h4>DADO COLETADO</h4></td>
                                    <td><h4>FINALIDADE</h4></td>
                                  </tr>
                                  <tr>
                                    <td><p>Qualificação do perfil de no mínimo duas pessoas; corretor, coordenador, gerente, diretor responsável, sobre escrita de nome de imobiliária e incorporadora. </p></td>
                                    <td><p>Estes dados são utilizados para segmentação de público pelo ANUNCIANTE, melhoria de atendimento pelo ANUNCIANTE e facilitação o contato comercial deste.</p></td>
                                  </tr>
                                </table>

                                <p><b><u>As informações pessoais são fornecidas pelo próprio TITULAR DOS DADOS, seja manualmente e/ou através de captação automática pela PLATAFORMA.</u></b></p>

                                <p>O tratamento automático dos dados será realizado por meio de computação em nuvem, com rotinas semanais de verificação e armazenamento seguro e mediante critérios claros.</p>

                                <p>A <b>RICOSS</b> restringe o acesso às informações sobre o <b>TITULAR DOS DADOS</b> somente para colaboradores e/ou fornecedores que precisam ter conhecimento dessas informações específicas e só fornecerá para esses terceiros as informações necessárias para a prestação do serviço e eles estão proibidos de usar essas informações para qualquer outra finalidade.</p>

                                <p><b>SE A RICOSS OU UMA DE SUAS SUBSIDIÁRIAS OU AFILIADAS OU QUALQUER PARTE DE SUAS EMPRESAS OU OPERAÇÕES TORNAR-SE PROPRIEDADE OU PASSAR A SER CONTROLADA POR OUTROS INDIVÍDUOS OU ENTIDADES, AS INFORMAÇÕES ARMAZENADAS PODERÃO SER TRANSFERIDAS A ELES, QUE DEVERÃO CUMPRIR AS OBRIGAÇÕES AQUI DESCRITAS EM CUMPRIMENTO DA LEI.</b></p>

                                <p><b>DOS DIREITOS DOS TITULARES DOS DADOS:</b> São direitos dos titulares dos dados tratados pela <b>RICOSS;</b></p>

                                <ol type="a">
                                  <li>confirmação da existência de tratamento; </li>
                                  <li>acesso aos dados; </li>
                                  <li>correção de dados incompletos, inexatos ou desatualizados; </li>
                                  <li>anonimização, bloqueio ou eliminação de dados desnecessários, excessivos ou tratados em desconformidade com a legislação; </li>
                                  <li>portabilidade dos dados a outro fornecedor de serviço ou produto, mediante requisição expressa e observados os segredos comercial e industrial, de acordo com a regulamentação do órgão controlador; </li>
                                  <li>eliminação dos dados pessoais tratados com o consentimento do titular; </li>
                                  <li>informação das entidades públicas e privadas com as quais o controlador realizou uso compartilhado de dados; </li>
                                  <li>informação sobre a possibilidade de não fornecer consentimento e sobre as consequências da negativa; </li>
                                  <li>informação sobre a possibilidade de não fornecer consentimento e sobre as consequências da negativa; </li>
                                  <li>opor-se a tratamento realizado com fundamento em uma das hipóteses de dispensa de consentimento, em caso de descumprimento ao disposto na legislação.</li>
                                </ol>

                                <p>O USUÁRIO terá a opção de não mais receber envios de publicidade por e-mail e telefone da <b>RICOSS</b> e de ANUNCIANTES caso opte por parar de receber este tipo de contato. As mensagens publicitárias enviadas por e-mail sempre trarão opção de cancelamento do envio daquele tipo de mensagem por parte da <b>RICOSS</b>.</p>

                                <p><b>ATUALIZAÇÃO E CONFIRMAÇÃO DOS DADOS:</b> O TITULAR DOS DADOS poderá atualizar os seus dados pessoais, a qualquer momento, de forma facilitada, através de solicitação à <b>RICOSS</b> pelo e-mail contato@ricoss.com.br ou através do painel do usuário. O TITULAR DOS DADOS pode obter, a qualquer momento, mediante prazo adequado e solicitação por escrito, a confirmação da existência ou não de seus dados pessoais e a sua comunicação de forma inteligível. Ainda, também pode obter uma indicação da origem dos seus dados pessoais, os objetivos e métodos de processamento, bem como a realizar a atualização, correção e, se estiver interessado, a integração e portabilidade de seus dados pessoais.</p>

                                <p><b>REGISTROS DE ACESSO E DO TRATAMENTO DOS DADOS:</b> A PLATAFORMA registra o log de informações do TITULAR DOS DADOS em banco de dados, bem como todas as alterações destes, sendo possível rastrear a modificação da informação ao longo do tempo. A <b>RICOSS</b> manterá os registros do tratamento dos dados nos termos da legislação aplicável, a qual explicitamos abaixo:</p>

                                <ol type="a">
                                  <li>Manterá os respectivos registros de acesso a aplicações de internet, sob sigilo, em ambiente controlado e de segurança, pelo prazo mínimo e legalmente obrigatório de 6 (seis) meses.</li>
                                  <li>A A RICOSS poderá armazenar todos os registros de acesso e utilização do TITULAR DOS DADOS na PLATAFORMA nos prazos adequados para a realização de eventuais defesas administrativas ou judiciais. poderá armazenar todos os registros de acesso e utilização do TITULAR DOS DADOS na PLATAFORMA nos prazos adequados para a realização de eventuais defesas administrativas ou judiciais.</li>
                                </ol>

                                <p>A <b>RICOSS</b> manterá armazenados todos os dados do TITULAR DOS DADOS que forem utilizados para a sua qualificação e identificação dentro da PLATAFORMA, bem como informações introduzidas como solução de demandas, até que o TITULAR DOS DADOS solicite a exclusão, por meio de ambiente criptografado que atenderá aos padrões de mercado. <b>Contudo, tal solicitação não poderá ser atendida quando houver uma obrigação legal ou judicial que impeça a RICOSS de realizar a exclusão. Em situações desta natureza a RICOSS não poderá ser responsabilizada pelo TITULAR DOS DADOS, uma vez que cumprirá com a legislação.</b></p>

                                <p><b>DO LOCAL DO ARMAZENAMENTO DOS DADOS:</b> As informações tratadas pela <b>RICOSS</b> serão armazenadas e processadas em bancos de dados estabelecidos no Brasil ou nos Estados Unidos da América ou Europa, sejam de propriedade da Ricoss Negócios Imobiliários ou de seus provedores de serviço de armazenamento, desde que sejam compatíveis com a legislação brasileira a respeito da proteção de dados.</p>
                                
                                <p>A <b>RICOSS</b> usa meios de proteção comercialmente e tecnologicamente adequados para o armazenamento dos dados, incluindo-se a contratação de serviços e equipamentos reconhecidos como próprios para esta finalidade.</p>

                                <p><b>ACESSO AOS DADOS PESSOAIS:</b> O TITULAR DOS DADOS poderá acessar a integralidade dos seus dados cadastrais porventura existentes, de forma facilitada, através de menu específico na PLATAFORMA e os seus dados pessoas brutos solicitando-os através do e-mail contato.ricoss@ricoss.com.br. Após a solicitação, a <b>RICOSS</b> os enviará em até 15 (quinze) dias.</p>

                                <p><b><u>TITULAR DOS DADOS MENOR DE IDADE: Não é permitido o uso da PLATAFORMA por menores de idade e a RICOSS se declara o direito de solicitar e conferir documentação do TITULAR DOS DADOS para garantia de idade mínima.</u></b></p>

                                <p><b>COMPARTILHAMENTO DE DADOS:</b> A <b>RICOSS</b> realizará o compartilhamento das informações do TITULAR DOS DADOS apenas com os fornecedores de serviços e ferramentas que necessitem de tal acesso, em conformidade com o permitido na legislação brasileira, bem como com os ANUNCIANTES dos empreendimentos que os CORRETORES se relacionarem pela PLATAFORMA, caso assim o autorizem. Tal compartilhamento de dados ocorrerá somente através da PLATAFORMA ou compartilhamento através de servidores protegidos, por API dos próprios fornecedores, inclusive com perfis de acesso que restringem o nível de informação acessada e mediante criptografia.</p>

                                <p><b>Portanto, o compartilhamento dos dados ocorrerá a partir de uma integração segura entre o banco de dados da RICOSS e do terceiro, bem como com empresas e pessoas que sigam as diretrizes legais e mercadológicas de segurança da informação.</b></p>

                                <p>Assim sendo, para possibilitar a realização de ofertas individualizadas por parte dos ANUNCIANTES, caso o USUÁRIO aceite tal compartilhamento, a <b>RICOSS</b> poderá compartilhar as informações pessoais com os ANUNCIANTES para a realização de contatos comerciais por estes e sobre os empreendimentos imobiliários de interesse do USUÁRIO.</p>
                                
                                <p><b>DADOS ANONIMIZADOS:</b> A <b>RICOSS</b> poderá anonimizar os dados coletados na PLATAFORMA, através da retirada de quaisquer informações que possam permitir a reversão da anonimização com métodos e ferramentas utilizadas no mercado de tecnologia. Os dados anonimizados poderão ser utilizados para fins estatísticos, visando a melhoria dos serviços, estudos acadêmicos, base de convencimento técnico para a venda dos serviços e aquisição de novos clientes, bem como para controle histórico da PLATAFORMA.</p>

                                <p><b>EXCLUSÃO DOS DADOS:</b> O TITULAR DOS DADOS poderá excluir permanentemente os seus dados pessoais que sejam passíveis de exclusão, mediante solicitação para a <b>RICOSS</b> através do e-mail contato@ricoss.com.br. <b>Será exceção à exclusão permanente dos dados os casos em que a RICOSS necessite da guarda obrigatória por lei ou por contrato.</b></p>

                                <p><b>REVOGAÇÃO DO USO DOS DADOS:</b> O TITULAR DOS DADOS poderá revogar o uso dos seus dados de forma facilitada, mediante solicitação para a <b>RICOSS</b> pelo e-mail contato@ricoss.com.br, com exceção às hipóteses legalmente previstas para tratamento de dados pessoais após a revogação. <b>Não será revogado o uso de dados que tenham sido anonimizados, em razão da impossibilidade de identificação do TITULAR DOS DADOS, ou nos casos permitidos pela legislação, como respostas a processos judiciais ou solicitação de autoridades públicas competentes.</b></p>

                                <p><b>PERÍODO DE USO DAS INFORMAÇÕES:</b> As informações que identifiquem o TITULAR DOS DADOS poderão ser utilizadas e tratadas pela RICOSS enquanto o TITULAR DOS DADOS possuir conta ativa na PLATAFORMA, excetuando-se as hipóteses em que haja a revogação de uso e a conta seja mantida ativa ou que a RICOSS deva utilizar nas formas obrigatórias pela legislação, mesmo após a exclusão da conta do TITULAR DOS DADOS.</p>

                                <p>Assim sendo, em razão das guardas obrigatórias previstas na legislação, tais dados pessoais do TITULAR DOS DADOS podem seguir sendo armazenados na PLATAFORMA pelo período legalmente previsto.</p>

                                <p><b>SEGURANÇA DOS DADOS: A RICOSS protege as informações através do uso de criptografia com tecnologia SSL (secure sockets layer) para impedir que as informações sejam interceptadas. Ainda, a RICOSS utiliza as melhores práticas de mercado relativas à segurança das informações e ferramentas para armazenamento e tratamento seguro de dados, tais como a VPN e Firewall nos servidores da RICOSS.</b></p>

                                <p>As informações são armazenadas em Banco de Dados em Cloud. Ainda, a informação e as senhas armazenadas são criptografadas utilizando função de hashing BCrypt com custo 10, garantindo que os dados só possam ser descriptografados através da aplicação que possui a chave e algoritmo correspondente.</p>

                                <p>A troca de informações entre o USUÁRIO e a PLATAFORMA é criptografada e trafega através de certificado de segurança SSL. Ainda, a PLATAFORMA utiliza-se de Tokens com vida útil de 365 dias. A <b>RICOSS</b> realiza armazenamento em instâncias RDS da Amazon que somente podem ser acessada por IPs pré-definidos na mesma VPN.</p>

                                <p>A <b>RICOSS</b> se compromete a adotar e manter as melhores técnicas de segurança para proteção contra acesso, perda ou alteração indevida dos dados e da privacidade do TITULAR DOS DADOS, <b>ficando isenta de responsabilidades por falhas no sistema na hipótese de caso fortuito ou força maior e pela quebra de sigilo das informações pessoais advindas exclusivamente do uso e guarda inadequados da senha pelo TITULAR DOS DADOS, bem como de qualquer ação ou omissão exclusivamente do TITULAR DOS DADOS.</b></p>

                                <p><b>Em sendo constatado que os dispositivos eletrônicos do TITULAR DOS DADOS estavam infectados por vírus, programas espiões ou outros elementos nocivos, ou ainda, que o TITULAR DOS DADOS forneceu indevidamente seus dados secretos para terceiros possibilitando a fraude, a RICOSS está ISENTA de qualquer responsabilidade.</b></p>

                                <p><b>A RICOSS não se responsabiliza por perdas e danos que venham a ser causados ao TITULAR DOS DADOS em decorrência do uso irregular e/ou negligente da PLATAFORMA.</b></p>

                                <p><b>A RICOSS REALIZA O DESENVOLVIMENTO DE SUA PLATAFORMA LEVANDO EM CONSIDERAÇÃO TODOS OS FUNDAMENTOS DE PRIVACIDADES DE DADOS, ESPECIFICAMENTE DE PRIVACY BY DESIGN E PRIVACY BY DEFAULT, DE FORMA QUE A PRIVACIDADE É CONSIDERADA EM TODAS AS ETAPAS DE DESENVOLVIMENTO DA PLATAFORMA E O TITULAR DOS DADOS NÃO PRECISA TOMAR QUALQUER AÇÃO PARA TER OS SEUS DIREITOS RESPEITADOS.</b></p>

                                <p><b>MEDIDAS PREVENTIVAS CONTRA DANOS:</b> A empresa adota, por exemplo, as seguintes medidas para a prevenção de danos aos dados do TITULAR DOS DADOS:</p>

                                <table class="tabela">
                                  <tr>
                                    <td><p><b>COLABORADORES</b></p></td>
                                    <td><p>Assinatura de contrato de confidencialidade das informações, prevendo responsabilidade de uso dos dados. Controle e limitação dos acessos a dados pessoais.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p><b>FORNECEDORES</b></p></td>
                                    <td><p>Assinatura de contrato de confidencialidade das informações, prevendo responsabilidade de uso de dados, bem como seleção cuidadosa de seus contratados.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p><b>SERVIDORES DE ARMAZENAMENTO</b></p></td>
                                    <td><p>Medidas previstas nas cláusulas acima.</p></td>
                                  </tr>
                                  <tr>
                                    <td><p><b>ESTRUTURA ADMINISTRATIVA</b></p></td>
                                    <td><p>Revisão periódica dos processos internos relacionados à proteção de dados, backups, auditorias internas, auditorias de fornecedores de tecnologia, constante atualização dos serviços de proteção de dados, troca frequente de chaves de acessos, tokens e senhas.</p></td>
                                  </tr>
                                </table>

                                <p><b>TRANSFERÊNCIA INTERNACIONAL DOS DADOS:</b> A <b>RICOSS</b> realiza a transferência internacional de dados pessoais do USUÁRIO para os Estados Unidos da América.</p>

                                <p><b>DOS IDENTIFICADORES DE DISPOSITIVO E DOS METADADOS:</b> Quando o TITULAR DOS DADOS usa um dispositivo móvel, como um tablet ou smartphone, para acessar a PLATAFORMA, a <b>RICOSS</b> pode acessar, coletar, monitorar, armazenar em seu dispositivo e/ou armazenar remotamente um ou mais "identificadores de dispositivo”, que identificam o dispositivo móvel do TITULAR DOS DADOS de forma exclusiva. Um identificador de dispositivo pode ser composto por dados armazenados associados ao hardware do dispositivo, dados armazenados associados ao sistema operacional do dispositivo ou outros softwares ou dados enviados ao dispositivo pela <b>RICOSS</b>.</p>

                                <p>Um identificador de dispositivo pode fornecer informações para a <b>RICOSS</b> ou para um parceiro terceirizado sobre a forma como o TITULAR DOS DADOS navega e usa a PLATAFORMA e pode nos ajudar ou ajudar terceiros a fornecerem relatórios ou conteúdo e anúncios personalizados. Alguns recursos da PLATAFORMA podem não funcionar corretamente se o uso ou a disponibilidade desses identificadores de dispositivo estiver prejudicada ou desativada.</p>

                                <p>Os metadados são normalmente dados técnicos associados ao conteúdo do TITULAR DOS DADOS. Por exemplo, metadados podem descrever como, quando e por quem uma parte de Conteúdo do TITULAR DOS DADOS foi coletada e como este conteúdo está formatado.</p>

                                <p><b>USO DE COOKIES:</b> Os “cookies” são pequenos arquivos de dados que ficam armazenados em seu computador e permitem que reconheçamos você como um TITULAR DOS DADOS da PLATAFORMA caso retorne utilizando o mesmo dispositivo eletrônico.</p>

                                <p>Usamos vários “cookies” na PLATAFORMA da <b>RICOSS</b>. Em especial, poderemos enviar um “cookie de sessão” ao seu computador quando você efetuar login na sua conta, inserindo seu endereço de e-mail e senha, se você assim o fizer. Esses cookies permitem que o reconheçamos se você visitar várias páginas em nossa PLATAFORMA durante a mesma sessão, de forma que não precisará reinserir a sua senha várias vezes. Assim que você efetuar logout ou fechar o navegador, os cookies dessa seção irão expirar e não terão mais qualquer efeito.</p>

                                <p>Para desativar os cookies, os navegadores permitem que você o faça alterando suas configurações. Se desejar saber como fazer isso, verifique o menu de ajuda no seu navegador. <b>Observe que a desativação dos cookies poderá restringir seriamente o seu uso da PLATAFORMA</b>.</p>

                                <p><b>NOTIFICAÇÃO DE ALTERAÇÕES: A RICOSS se reserva o direito de modificar ou alterar esta Política de Privacidade a qualquer momento e por qualquer motivo. Quando alterado, a RICOSS providenciará avisos claros do que foi alterado e colherá o consentimento do TITULAR DOS DADOS novamente, quando necessário, de forma livre, informada e inequívoca, bem como republicará o presente documento.</b></p>

                                <p><b>DIVULGAÇÃO AO PODER PÚBLICO:</b> A <b>RICOSS</b> poderá divulgar os dados pessoais do TITULAR DOS DADOS ao poder público apenas nas circunstâncias limitadas, conforme permitido pela legislação de proteção de dados, ou com a sua autorização expressa para:</p>

                                <ol type="a">
                                  <li>ajudar na condução ou cooperação em investigações de fraude ou outras atividades ilegais, onde acreditamos que é razoável e apropriado fazê-lo.</li>
                                  <li>em resposta a uma intimação, mandado, ordem judicial ou conforme exigido por lei.</li>
                                </ol>

                                <p>O poder público é limitado por lei e não poderá utilizar as informações para fins secundários para além dos fins para os quais as informações são compartilhadas.</p>

                                <p><b>NOTIFICAÇÃO SOBRE INFRAÇÕES:</b> Caso o TITULAR DOS DADOS ou terceiro sinta-se lesado em relação a qualquer conteúdo ou ação na PLATAFORMA, deverá encaminhar uma notificação por e-mail, solicitando esclarecimentos e eventual resolução EXTRAJUDICIAL da demanda.</p>

                                <p>A <b>RICOSS</b> se empenhará para esclarecer a demanda, bem como eventualmente resolvê-la da forma mais breve possível, respondendo ao seu endereço de e-mail cadastrado. As notificações deverão ser realizadas por meio exclusivamente eletrônico e, ainda, conter as seguintes informações:</p>

                                <ol type="a">
                                  <li>Identificação do objeto da reclamação;</li>
                                  <li>Identificação do material que supostamente representa a infração ou informações necessárias para a devida identificação da demanda; e</li>
                                  <li>O notificante declara que as informações contidas na notificação são precisas e verdadeiras, sob pena de incorrer nas consequentes responsabilidades cíveis e penais.</li>
                                </ol>

                                <h3>LEI GERAL DE PROTEÇÃO AOS DADOS</h3>

                                <p>1 – PROTEÇÃO DE DADOS (LGPD)</p>
                                <p>1.1 As partes reconhecem a importância do cumprimento da <b>Lei nº 13.709 - Lei Geral de Proteção de Dados - LGPD</b> e comprometem-se a cumprir o que segue abaixo:</p>

                                <p>01 - As partes reconhecem que, em razão do cumprimento das obrigações pactuadas neste contrato, atividades de tratamento de dados pessoais (DADOS) serão realizadas por ambas as Partes, de sorte que reconhecem a necessidade de garantir proteção aos Dados objeto deste contrato e outros que porventura venha a ter conhecimento, nos termos da Lei nº 12.965 de 23 de abril de 2014 (Marco Civil da Internet ou MCI) e Lei nº 13.709 de 14 de agosto de 2018 (Lei Geral de Proteção de Dados  - LGPD), bem como declaram e garantem que todas as obrigações contidas no MCI e na LGPD e que sejam a elas atribuíveis em função desse Contrato serão observadas por ambas as Partes no integral cumprimento desta avença.</p>

                                <p>02 - As Partes comprometem-se a não divulgar, usar indevidamente ou compartilhar qualquer Dado ou informação pessoal de clientes ou de terceiros a que tenham tido acesso, exceto na medida para o estrito cumprimento deste contrato, com exceção aos Dados que foram tornados manifestamente públicos pelo próprio titular, resguardados os direitos do titular e princípios previstos na LGPD.</p>

                                <p>03 - As PARTES declaram que na hipótese de o controlador dos Dados, a finalidade, a forma e duração do tratamento e/ou informações acerca do uso compartilhado de dados pelo controlador serem alterados, providenciarão a notificação dos titulares dos dados.</p>

                                <p>04 - A CONTRATADA na condição de Operadora dos Dados tratados em razão de sua operação nas aplicações, realizará o tratamento dos dados pessoais de acordo com as condições estabelecidas na Política de Privacidade em seu website e/ou aplicativos, respeitando, ainda, a legislação brasileira aplicável ao tratamento de Dados, incluindo, mas não se limitando ao MCI e à LGPD, e as disposições deste contrato.</p>

                                <p>05 - As PARTES não utilizarão os Dados para finalidades diversas daquelas informadas aos respectivos titulares dos Dados e não divulgarão e nem transmitirão nenhum Dado a terceiros sem a autorização prévia, por escrito dos clientes. </p>

                                <p>06 - A CONTRATADA, adotará as medidas de segurança, técnicas e administrativas capazes de proteger os dados dos usuários e clientes das aplicações contra acessos não autorizados e situações acidentais ou ilícitas de destruição, perda, mudança, vazamento ou qualquer forma de processamento inadequado ou ilegal.</p>

                                <p>07 - Cada PARTE será responsável pelo tratamento de Dados por ela executados, sob o presente contrato, mantendo a outra PARTE indene de qualquer danos ou prejuízos decorrentes de qualquer tratamento de Dados realizado em desacordo com esse contrato e/ou a legislação brasileira aplicável.</p>

                                <p>08 - Em caso de subcontratação, cessão dos direitos decorrentes deste contrato ou qualquer outra alteração, as PARTES originárias permanecerão responsáveis pelo tratamento dos Dados, bem como adotará as medidas para que o sucessor respeite e cumpra todas as obrigações aqui pactuadas, respondendo de forma solidária com o seu sucessor.</p>

                                <p>09 - As PARTES deverão notificar uma a outra, por escrito e de forma detalhada nas seguintes hipóteses:</p>

                                <p>I - na ocorrência de qualquer incidente de segurança relacionado aos Dados, com a apresentação de todas as informações e detalhes disponíveis à PARTE notificada, incluindo a identificação de quais Dados foram afetados e as medidas tomadas (e aquelas em vias de serem adotadas) pela PARTE notificante para mitigar os efeitos de tal incidente;

                                <p>II - na existência de qualquer instrução fornecida pela outra PARTE no contexto do tratamento dos Dados pela PARTE notificante que, contrarie as leis aplicáveis ao tratamento de Dados ou qualquer outra disposição legal aplicável à espécie;</p>

                                <p>III - na existência de qualquer fato ou situação específica que razoavelmente impeça a PARTE notificante de cumprir qualquer de suas obrigações contidas neste contrato e/ou nas leis aplicáveis ao tratamento de Dados.</p>

                                <p>IV - As notificações deverão ser enviadas, com maior brevidade possível, mas, sempre no prazo máximo de 72 horas, contadas da ciência do incidente ou fato</p>

                                <p><b>DAS DISPOSIÇÕES GERAIS:</b> Este documento é regido pelas leis do Brasil. Todas as controvérsias decorrentes de ou relacionadas aos Termos de uso devem ser tratadas na jurisdição brasileira, especificamente na Comarca de São Paulo-SP, com exceção às eventuais discussões que possuam foro de competência especial.</p>
                                
                                <p>No caso de qualquer parte destes Termos de uso ser considerada como não executável, isso não deverá afetar o restante destes Termos de uso que deverão permanecer em pleno vigor e efeito.</p>

                                <p>O atraso ou falha em exercer ou impor qualquer direito previsto nestes Termos de uso não deverá ser considerada uma renúncia de tal direito ou operar para barrar o exercício ou imposição deste a qualquer momento ou posterior a isso.</p>
                              </div>
                              <!-- Final Política de privacidade-->
                              
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="aceitarTermos" name="termoUso">
                                <label class="form-check-label" for="aceitarTermos">
                                  Aceitar os termos de uso e política de privacidade
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div> <!-- Final modal dos termos de uso do anunciante -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button name="btnCadAnunciante" type="submit" class="btn btn-dark" onclick="return validarSenha()">Cadastrar</button>
                  </div>
                </div>
              </form>
          </div>
          <div class="col-sm ">
            <img src="img/anunciante.png" class="icone mx-auto d-block img-fluid" alt="Anuncie seu imóvel com a Ricoss">
          </div>
        </div>
      </div> <!-- Final Cadastro de anunciante-->
        
    <?php
      include 'newsletter.php';
    ?>

    </div><!-- final corpo da página -->

<?php
  include 'footer.php';
?>