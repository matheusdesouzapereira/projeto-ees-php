<?php
    session_start();
    include_once 'conexao.php';

    $id_servico = filter_input(INPUT_GET, 'id_servico', FILTER_SANITIZE_NUMBER_INT);
    $seleciona_servico = "SELECT * FROM servicos WHERE id_servico = '$id_servico'";
    $servico_selecionado = mysqli_query($conn, $seleciona_servico);
    $row_servico = mysqli_fetch_assoc($servico_selecionado);

    $date = new DateTime($row_servico['data_cadastro']);

    /* Array's */
    $tituloItem2 = $row_servico['tituloItem2'];
    $tituloItem2_array = (explode(",",$tituloItem2));

    $descricaoItem2 = $row_servico['descricaoItem2'];
    $descricaoItem2_array = (explode(",",$descricaoItem2));
    
    $tituloItem3 = $row_servico['tituloItem3'];
    $tituloItem3_array = (explode(",",$tituloItem3));

    $descricaoItem3 = $row_servico['descricaoItem3'];
    $descricaoItem3_array = (explode(",",$descricaoItem3));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @page {
            margin: 0cm 0cm;
            margin-top: 3cm;
            @bottom-left {
            content: counter(page) "/" counter(pages);
        }
        }

        /** Define now the real margins of every page in the PDF **/
        main {
            margin-left: 1cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: -3cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 1.5cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed; 
            bottom: 0cm; 
            left: 0cm; 
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            background-color: #fff;
            color: black;
            text-align: right;
            line-height: 1.5cm;
            margin-right: 30px;
            margin-left: 30px;
            border-top: solid 3px #071550;
        }
        #content {
            display: table;
        }
        .corpo{
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5;
            text-align: justify;
        }
        .tabela-preco{
            width: 100%;
        }
        .tabela-preco td{
        border: 1px solid #000;
        padding: 10px;
        }
        .direita{
            text-align: right;
        }
        .dados-cadastrais{
            border: 2px solid #000;
            padding-left: 10px;
        }
        .imagem-capa{
            width:42em ;
            margin-left: 4em;
        } 
        .img-cabecalho{
            width: 50em;
        }  
    </style>
    <title>Documento PDF</title>
</head>
<body>
    <div class="capa">
        <img src="files-pdf/capa-proposta.jpg" alt="capa-proposta" class="imagem-capa">
    </div>    
    <!-- Wrap the content of your PDF inside a main tag -->
    <main class="corpo">
        <!-- Itens fixos -->
        <p>E&S Sistemas Elétricos</p>
        <p>contato@eessistemaseletricos.com.br</p>
        <p>Telefone: (11) 971475071 (WhatsApp)</p>
        <p>Data proposta: <?php echo $date->format('d/m/Y'); ?></p>
        <!-- Seriviço -->
        <p>Serviço: <?php echo $row_servico['titulo_servico'] ?>  </p>
        <br>
        <p>Prezados senhores,</p>
        <p>Apresentamos nossa proposta técnica-comercial, para <b><?php echo $row_servico['titulo_servico'] ?></b>.</p>
        
        <!-- Item 1 -->
        <p>1 - Escopo dos Serviços</p>
        <p><?php echo $row_servico['titulo_servico'] ?></p>
        <br>
        <p>1.0 OBJETIVO</p>
        <p><?php echo $row_servico['objetivo']?></p>
        
        <!-- Item 2.0 - Fixo-->
        <p>2.0 ESCOPO DE SERVIÇOS A SER EXECUTADA PELA CONTRATADA</p>
        
        <!-- Item 2.1 em dianta -->
        <?php 
            for($i= 0;$i < count($tituloItem2_array);$i++ ){
                echo "2" .".".$i+0.1 . " - " .  $tituloItem2_array[$i] . "<br>";
                echo $descricaoItem2_array[$i] . "<br>"; 
                echo "<br><br>";
            }
        ?>
        <br>
        <!-- Item 2.0 - Fixo-->
        <p>3.0 ESCOPO TÉCNICO DOS SERVIÇOS:</p>
        <!-- Item 3.1 em diante -->
        <?php 
            for($i= 0;$i < count($tituloItem3_array);$i++ ){
                echo "3" .".".$i+0.1 . " - " .  $tituloItem3_array[$i] . "<br>";
                echo $descricaoItem3_array[$i] . "<br>"; 
                echo "<br><br>";
            }
        ?>
        <br>

        <!-- Item 4.0 - fixo -->
        <p>4.0 INCLUSO NO ESCOPO</p>
        <p>Emissão de ART assinada pelo engenheiro responsável para execução;</p>
        <p>Emissão de ART assinada pelo engenheiro responsável atestando os laudos;</p>
        <p>Mão de obra qualificada e especializada para execução dos serviços;</p>
        <p>Todos os técnicos com certificado de NR-10, os quais deverão ser apresentados quando do envio da documentação;</p>
        <p>Fornecimento de ferramentas e instrumentos de testes aferidos e certificados;</p>
        <p>Fornecimento de transporte, alimentação e hospedagem;</p>
        <p>Fornecimento de EPI`s e uniformes;</p>
        <p>Fornecimento de aspiradores;</p>
        <p>Fornecimento de materiais de limpeza, desengripantes, sílica gel e lubrificantes;</p>
        <p>Gerador 220 Volts - 05 KW para nossos equipamentos de testes;</p>
        <p>Seguir rigorosamente as normas de segurança, relativos a trabalhos em subestações;</p>
        <p>Funcionários para acompanhamento do religamento das subestações;</p>
        <p>Emissão dos relatórios técnicos em mídia eletrônica e papel, anexado a este todos os certificados de calibração e aferição dos equipamentos utilizados para realização das medições elétricas;</p>
        <p>Disponibilização do corpo técnico para realização da integração na contratante no mesmo dia da realização dos trabalhos;</p>
        <br>

        <!-- Item 5 - fixo -->
        <p>5.0 EQUIPE TÉCNICA (POR DIA)</p>
        <p>Engenheiro Eletricista</p>
        <p>Coordenador Técnico</p>
        <p>Técnicos especialistas em ensaios</p>
        <p>Técnicos eletricistas</p>
        <p>Técnico especialista</p>
        <br>

        <!-- Item 6 - Prazo -->
        <p>6.0 DATA DA EXECUÇÃO DOS SERVIÇOS</p>
        <p><?php echo $row_servico['data_execucao']?></p>
        <br>

        <!-- Item 7 - Fixo -->
        <p>7.0 OBRIGAÇÕES DA CONTRATANTE</p>
        <p>Informar documentos necessários para execução dos serviços em Vossas</p>
        <p>instalações;</p>
        <p>Funcionário para acompanhamento dos serviços;</p>
        <p>Liberação das áreas e dos equipamentos envolvidos;</p>
        <p>Liberação para locomoção de veículos no interior da empresa;</p>
        <p>Peças, componentes e serviços fora do atual escopo;</p>
        <p>Ponto de iluminação nas cabines.</p>
        <br>

        <!-- Item 8 e 8.1 - Fixo -->
        <p>8.0 OBSERVAÇÕES GERAIS</p>
        <p>8.1 Relatórios técnicos / laudos</p> 
        <p>Após a execução dos serviços a Empresa contratada enviará à Cocam relatório técnico minucioso quanto a real condição dos equipamentos. O relatório deverá estar acompanhado da ART referente aos serviços realizado.</p> 
        <p>Durante a execução dos serviços, caso seja observada alguma não conformidade, a comunicação deverá ser realizada imediatamente para o responsável pela Manutenção da Cocam, para solução do problema em conjunto com a Empresa contratada.</p> 
        <br>

        <!-- Item 8.2 - Fixo -->
        <p>8.2 Data e tempo de execução:</p> 
        <p>Data a ser definido pela Cocam - A princípio entre setembro e outubro de 2020;</p> 
        <p>01 Dia de 10 horas (Integração + limpeza do busway);</p> 
        <p>01 Dia de 10 horas para manutenção preventiva e corretiva.</p> 
        <br>

        <!-- item 8.1 - Fixo -->
        <p>8.3 Garantia:</p>
        <p>Garantia dos serviços executados de 12 (doze) meses, a contar da data de</p>
        <p>realização do serviço.</p>
        <br>

        <!-- Item 9 - Fixo -->
        <p>9. Elaboração de relatório técnico</p>
        <p>- Descrição das atividades executados</p>
        <p>- Resultado das medições efetuadas</p>
        <p>- Recolhimento de ART</p>
        <br>

        <!-- Item 10 - Fixo -->
        <p>10. FATURAMENTO</p>
        <p>O faturamento se dará pelo Item de Lei 1401, código 07498.</p>
        <p>Com a emissão do pedido de compra a contratante concorda e autoriza o faturamento</p>
        <p>desta forma, ciente que o mesmo não será alterado posteriormente.</p>
        <br>

        <!-- Item 2 - Fixo -->
        <p>2 - Parte Comercial</p>

        <!-- Item 2.1 - Preços - Variável -->
        <p>2.1 - Preços</p>
        <table class="tabela-preco">
            <tr>
                <td><?php echo $row_servico['titulo_servico']?></td>
                <td class="direita">Total: <?php echo $row_servico['preco']?></td>
            </tr>
        </table>
        <!-- <p><b>Serviço de Manutenção preventiva das subestações de energia</b></p>
        <p>Total: <b>R$49.000,00</b></p> -->
        <br>

        <!-- Item 2.2 - Fixo -->
        <p>2.2- Prazo de Execução</p>
        <p>O prazo de execução dos serviços será definido pela contratante juntamente com o departamento de programação da Labor.</p>
        <p>Prazo de entrega do relatório:</p>
        <p>Relatório Técnico será de até 30 dias corridos ( Manutenção)</p>
        <p>Relatório Técnico será de até 15 dias úteis (Termografia)</p>
        <p>Relatório Técnico será de até 20 dias úteis ( Laudos )</p>
        <br>

        <p>2.3-Equipe de Funcionários</p>
        <p>A equipe técnica será definida em conjunto com nosso departamento de programação conforme a complexidade do serviço e disponibilidade do cliente.</p>
        <br>
        
        <p>3- Responsabilidades da Labor</p>
        <p>CONTRATADA - MANUTENÇÃO / MEDIÇÕES / INSTALAÇÕES</p>
        <p>Fornecer equipe técnica treinada para as atividades propostas</p>
        <p>Fornecer funcionarios registrados, uniformizados com EPI's e EPC's</p>
        <p>Fornecer hospedagem, alimentação e transporte a sua equipe.</p>
        <p>Fornecer todos os equipamentos necessários a execução dos serviços.</p>
        <p>Fornecer relatorio técnico das atividades contratadas em 20 dias úteis</p>
        <p>Fornecer documentação da empresa e dos funcionarios, previsto (CND's FGTS INSS ASO, Ficha de registro, PPRA e PCMSO; atest. antecedentes, termo de entrega de EPI's, NR-10 ) copias simples</p>
        <p>Fornecer ART das atividades</p>
        <p>Demais observações vide item 12) Condições Gerais</p>
        <p>Está incluso o pagamento de periculosidade 30% aos técnicos e eletricistas envolvidos nas atividades.</p>
        <br>

        <p>4- Responsabilidades do Cliente</p>
        <p>CONTRATANTE - MANUTENÇÃO / INSTALAÇÃO / MEDIÇÕES</p>
        <p>Fornecer funcionário habilitado que conheça o sistema para fornecer informações necessárias ao desenvolvimento das atividades propostas e acompanhar os serviços.</p>
        <p>Cumprir condições comerciais acordadas em pedido de compras.</p>
        <p>Demais observações ou detalhes acordados vide item condições gerais</p>
        <p>Promover as manobras para desenergização e bloqueio do sistema.</p>
        <p>Promover as manobras para rearme do sistema após termino das atividades</p>
        <p>Zelar pela integridade fisica dos terceiros impedindo energização acidental do sistema ( geradores ou manobras indevidas )</p>
        <br>
        
        <p>5- Serviços Não Inclusos</p>
        <p>Não está previsto a execução de atividades que não fazem parte do escopo desta Oferta</p>
        <br>

        <p>6- Peças e Materiais para Reposição</p>
        <p>Serão cobrados apenas se forem utilizados,</p>
        <p><?php echo $row_servico['pecas_materiais']?></p>
        <br>
    
        <p>7- Integração e Programação dos Serviços</p>
        <p>Não será cobrado valores adicionais quando a integração ocorrer no mesmo dia dos serviços e com no máximo de 01 hora de preleção.</p>
        <p>Integrações especiais com datas diferentes do dia do serviço será mencionado o custo adicional na parte comercial item 2.</p>
        <p>Havendo negociação que altere a condição acima, a mesma estará expressa na parte comercial item 2.</p>
        <br>
        
        <p>8- Garantia</p>
        <p>Os serviços prestados e os materiais fornecidos serão garantidos por um período de 06 meses.</p>
        <p>Os valores garantidos não poderão exceder o valor dos serviços prestados.</p>
        <p>Esta garantia subentende as condições normais de funcionamento dos equipamentos.</p>
        <p>Os serviços que não dependam de intervenção física nos equipamentos da contratante estão insentos de garantia</p>
        <br>

        <p>9- Dados Cadastrais para Emissão do Pedido</p> 
        <div class="dados-cadastrais">
            <p><b> E&S Comércio e Prestação de Serviços em Sistemas Elétricos EIRELI - ME </b><br>
            Rua Orlando Segala, 16 - Guarulhos / SP CEP: 07135-190 <br>
            CNPJ : 28.284.408/0001 - 51 / Inscrição Estadual : 796.614.776.119 <br>
            Dados Bancarios: Banco ITAÚ - Agência 9101 Conta Corrente Nº 70983-1</p> 
        </div>
        <br>
        
        <p>10- Condições de Pagamento</p> 
        <p><?php echo $row_servico['condicoes_pagamento']?></p> 
        <br>
        
        <p>11- Impostos</p> 
        <p>Empresa do Sistema Simples Nacional</p> 
        <p>Recolhe uma única aliquota</p> 
        <p>Não sujeita a retenção de Impostos especificos</p> 
        <p>Insc Municipal 5.258.184-5</p> 
        <br>
        
        <p>12- Condições Gerais</p> 
        <p>O pagamento se dará conforme execução.</p> 
        <p>Não haverá cancelamento parcial ou total do escopo sem acordo previo entre as partes de forma antecipada, solicitamos que os avisos sejam feitos com prazo mínimo de 48 horas.</p> 
        <p>Para cancelamento dos serviços agendados em prazo inferior a 48 horas, será cobrada uma multa de 20% do valor do serviço contratado.</p> 
        <p>Caso nossa equipe encontrar-se a caminho da Contratante, além da multa anteriormente citada, serão cobradas despesas de mobilização como; km dos veículos, horas de viagem/espera dos nossos funcionários as quais serão cobradas conforme abaixo:</p> 
        <p>Tabela HH de 2ª a 6ª feira no horário comercial</p> 

        <?php echo $row_servico['tabela_hh']?>

        <p>Nota: As horas extras e adicional noturno serão cobrados conforme a legislação vigente</p> 
        <p>Preço n/km rodado c/ veículo do labor = R$ 3,00 (Pedágio incluso)</p> 
        <p>Toda e qualquer importância em atraso sofrerá correção até a data de seu efetivo pagamento e sobre o valor daí resultante, multa moratória 2% (dois por centos) ao mês. Para efeito de correção será utilizado o IGP-M-Índice Geral de Preço Mercado.</p> 
        <p>Nenhum pagamento poderá ser atrasado ou suspenso por motivo de reclamações, salvo nosso acordo por escrito.</p> 
        <p>Nos casos onde ocorram atraso nos pagamentos acordados, a Labor poderá a seu critério:</p> 
        <p>- Somar aos prazos contratuais o número de dias de atraso de pagamento do comprador;</p> 
        <p>Colocamos-nos a disposição de V.Sas., para quaisquer esclarecimentos adicionais que fizerem necessários.</p> 
        <br>
        <br>
        <br>
        <br>
        Atenciosamente,
        <br><br>
        E&S Sistemas Elétricos
        <br>
    </main>
    
    <header>
    <img src="files-pdf/cabecalho.jpg" alt="cabecalho" class="img-cabecalho">
    </header> 

    <footer>
        
    </footer>
</body>
</html>
