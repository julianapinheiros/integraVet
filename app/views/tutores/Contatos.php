<!DOCTYPE html>
<html>

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>IntegraVet - Contatos</title>
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/contatos.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/rodape.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script defer="defer" src="../jsPadrao/menu.js"></script>

</head>
<body>
    <!-- Menu -->
    <div class="topnav" id="myTopnav">
        <a href="../tutores/Default.html" class="active">Home</a>
        <a href="../tutores/Contatos.php">Contatos</a>
        <a href="../tutores/SaibaMais.html">Saiba Mais</a>
        <a href="../PrincipalPadrao/Login.php" id="login">Login
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
        </a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>

    <div class="container introducao mt-5">
        <div class="row apresentacao">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="col-12 mb-3 mt-4">
                    <h1>Seja um Hemocentro Cadastrado!</h1>
                </div>
                <div class="col-12 mb-4">
                    <h3>Integração e Incentivo a Doação Sanguínea para Cães e Gatos.</h3>
                </div>
                <div class="col-12">
                    <span>Encontre instituições cadastradas e agende a doação de sangue do seu pet.<br>
                        Seu pet pode salvar vidas!</span>
                </div>
                <div class="col-12 mt-4">
                    <span>Possui estoque de bolsas de sangue? Atua na área de transfusão de sangue animal?<br>
                    Clique em "Acessar" e cadastre-se para acessar nossos recursos.</span>
                </div>
                <div class="col-12 mt-3">
                    <a href="../PrincipalPadrao/Cadastro.php" class="button__apresentacao">Acessar</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                <div class="apresentacao__image">
                    <img src="../imagens/imagem_apresentacao1.png" />
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row titulo">
            <div class="col-12 text-center">
                <h1>Faça a diferença hoje. Entre em contato com uma instituição!</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row apresentacao">     
            <form action=""  method="GET">  
                <div class="row">     
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 filtro">
                        <label for="Procedimento">Procedimento</label>
                        <select id="Procedimento" name="Procedimento">
                            <option value="" selected disabled>Selecione o procedimento</option>
                            <option value="Banco de sangue" <?= isset($_GET['Procedimento']) == true ? ($_GET['Procedimento'] == 'Banco de sangue' ? 'selected': '') :''  ?>>Banco de Sangue</option>
                            <option value="Coleta" <?= isset($_GET['Procedimento']) == true ? ($_GET['Procedimento'] == 'Coleta' ? 'selected': '') :''  ?>>Coleta de Sangue</option>
                            <option value="Estoque de Bolsas" <?= isset($_GET['Procedimento']) == true ? ($_GET['Procedimento'] == 'Estoque de Bolsas' ? 'selected': '') :''  ?>>Estoque de Bolsa</option>
                            <option value="Transfusão" <?= isset($_GET['Procedimento']) == true ? ($_GET['Procedimento'] == 'Transfusão' ? 'selected': '') :''  ?>>Transfusão</option>
                        </select>                
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 filtro">
                        <label for="uf">Estado  </label>
                        <select id="uf" name="uf">
                            <option value="" selected disabled>Selecione o estado</option>                    
                            <option value="SP" <?= isset($_GET['uf']) == true ? ($_GET['uf'] == 'SP' ? 'selected': '') :''  ?>>São Paulo</option>
                            <option value="RJ" <?= isset($_GET['uf']) == true ? ($_GET['uf'] == 'RJ' ? 'selected': '') :''  ?>>Rio de Janeiro</option>
                            <option value="ES" <?= isset($_GET['uf']) == true ? ($_GET['uf'] == 'ES' ? 'selected': '') :''  ?>>Espirito Santo</option>
                            <option value="MG" <?= isset($_GET['uf']) == true ? ($_GET['uf'] == 'MG' ? 'selected': '') :''  ?>>Minas Gerais</option>         
                        </select>
                    </div>
                </div>

                <div class="botao col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>   
            </form>          
        </div>        
    </div>

    <div class="container tabela mt-2" style="overflow-x:auto;">
        <div class="row apresentacao">
            <div class="col-12">
                <?php

                    if (isset($_GET['uf']) && $_GET['Procedimento'] != '')
                    {
                        include_once('C:\xampp\htdocs\integraVet\app\config.php');

                        $uf = $_GET['uf'];
                        $procedimento = $_GET['Procedimento'];
                        
                        $result = mysqli_query($mysql,
                        "SELECT 
                            ic.instituicao_nome,
                            ic.trabalhamos_com,
                            ic.telefone,
                            ic.logradouro,
                            ic.numero,
                            ic.bairro
                        FROM 
                            instituicao_cadastro AS ic
                        WHERE 
                            ic.trabalhamos_com = '$procedimento' AND ic.uf = '$uf'
                        ORDER BY 
                            ic.instituicao_cnpj DESC;"
                        );
                            

                        if ($result) 
                        {
                            if ($row = mysqli_num_rows($result) > 0) 
                            {
                                ?>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Instituição</th>
                                                <th>Procedimento</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Numero</th>
                                                <th>Bairro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    
                                <?php
                                    foreach ($result as $item)
                                    {
                                ?>
                                    <tr>
                                        <td><?php echo $item["instituicao_nome"]; ?></td>
                                        <td><?php echo $item["trabalhamos_com"]; ?></td>
                                        <td><?php echo $item["telefone"]; ?></td>
                                        <td><?php echo $item["logradouro"]; ?></td>
                                        <td><?php echo $item["numero"]; ?></td>
                                        <td><?php echo $item["bairro"]; ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                <?php
                                ?>
                                        </tbody>
                                    </table>
                                <?php
                                    }
                                                
                            }
                        }
                ?>
            </div>
        </div>
    </div>

    </div>
    <div class="bg-light">       
        <footer>
            <div class="row dados">
                <div class="info">
                    <span><a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Política de Privacidade</a> | <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Termos e condições de uso</a></span>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Política de Privacidade</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4>Data de vigência: [xx/xx/xxxx]</h4>
                                    <p>
                                        Bem-vindo à SIS IntegraVET. Esta plataforma tem o propósito exclusivo de fornecer informações relacionadas à doação de sangue animal e facilitar a busca de instituições que possuem bolsas de sangue para animais. 
                                        A proteção da sua privacidade é importante para nós. Esta Política de Privacidade descreve como não coletamos informações de donos de animais de estimação ao utilizar a plataforma informativa.
                                    </p>
                                    <h5>1. Não Coleta de Informações Pessoais</h5>
                                    <p>
                                        Reiteramos que esta plataforma informativa não coleta, em hipótese alguma, informações pessoais dos donos de animais de estimação. Nenhuma informação pessoal, incluindo nome, endereço de e-mail, número de telefone ou qualquer dado pessoal, é solicitada ou armazenada.
                                    </p>
                                    <h5>2. Uso da Plataforma Informativa</h5>                                   
                                    <p>
                                        Os donos de animais de estimação podem utilizar a plataforma informativa sem a necessidade de fornecer informações pessoais. A plataforma é projetada apenas para fornecer informações sobre doação de sangue animal e não exige qualquer interação pessoal ou compartilhamento de dados.
                                    </p>
                                    <h5>3. Privacidade e Segurança</h5>                        
                                    <p>
                                        Embora não coletemos informações pessoais, levamos a privacidade e a segurança a sério. Tomamos medidas razoáveis para garantir que nossa plataforma seja segura e livre de riscos.
                                    </p> 
                                    <h5>4. Direitos dos Usuários</h5>   
                                    <p>
                                        Os donos de animais de estimação têm o direito de acessar as informações informativas disponíveis na plataforma sem preocupações com a coleta de dados pessoais.
                                    </p>
                                    <h5>5. Alterações na Política de Privacidade</h5>
                                    <p>
                                        Esta Política de Privacidade pode ser atualizada periodicamente. Recomendamos revisar periodicamente esta política para se manter informado sobre como a plataforma trata as informações dos donos de animais de estimação.
                                        Ao utilizar nossa plataforma informativa, você concorda com os termos desta Política de Privacidade. Se não concordar com os termos aqui descritos, recomendamos que continue utilizando a plataforma para fins informativos.
                                    </p>
                                    <h5>6. Contato</h5>
                                    <p>
                                        Se tiver alguma dúvida ou preocupação relacionada à privacidade ou ao uso da plataforma informativa, entre em contato conosco pelo e-mail suporte@sisintegravet.com
                                        <br>
                                        Esta Política de Privacidade está sujeita às leis e regulamentos aplicáveis e será interpretada de acordo com eles.
                                        <br>
                                        [Assinatura da empresa/organização]
                                        [xx/xx/xxxx]                                
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Termos e condições de uso</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4>Data de vigência: [xx/xx/xxxx]</h4>
                                    <p>
                                        Bem-vindo à SIS IntegraVET. Antes de utilizar nossos serviços, por favor, leia atentamente os Termos e Condições de Uso abaixo. 
                                        Ao acessar ou utilizar nossa plataforma, você concorda com estes termos.
                                    </p>
                                    <h5>1. Aceitação dos Termos e Condições</h5>
                                    <p>
                                        Ao acessar ou utilizar a SIS IntegraVET, você concorda e aceita estes Termos e Condições de Uso. 
                                        Se não concordar com qualquer parte destes termos, solicitamos que não utilize nossos serviços.
                                    </p>
                                    <h5>2. Cadastro na Plataforma</h5>                                   
                                    <p>
                                        -Veterinários: Ao se cadastrar, você concorda em fornecer informações precisas, incluindo seu nome, CRMV, endereço de e-mail e outras informações necessárias. Você é responsável por manter suas informações atualizadas.<br>
                                        -Instituições de Bolsas de Sangue: Ao se cadastrar, você concorda em fornecer informações precisas, incluindo CNPJ, nome da empresa, endereço de e-mail, endereço físico e tipos de bolsas de sangue coletadas.
                                    </p>
                                    <h5>3. Uso da Plataforma</h5>                        
                                    <p>
                                        -A Plataforma de Doação de Sangue Animal destina-se a incentivar a doação de sangue animal e facilitar a comunicação entre veterinários e instituições de bolsas de sangue. 
                                        Não nos responsabilizamos por transações ou acordos realizados entre usuários.<br>
                                        -Veterinários podem acessar informações sobre bolsas de sangue disponíveis e comunicar-se com instituições de bolsas de sangue. <br>                                    
                                        -Instituições de Bolsas de Sangue podem cadastrar seus estoques de bolsas, atualizar informações e interagir com veterinários.
                                    </p> 
                                    <h5>4. Privacidade e Segurança</h5>   
                                    <p>
                                        Leia nossa Política de Privacidade para entender como coletamos, usamos e protegemos suas informações pessoais.
                                    </p>
                                    <h5>5. Responsabilidades dos Usuários</h5>
                                    <p>
                                        -Veterinários: Responsáveis por garantir a veracidade das informações fornecidas e por seguir as políticas de doação de sangue animal em vigor.<br>
                                        -Instituições de Bolsas de Sangue: Responsáveis por manter informações precisas sobre o estoque de bolsas de sangue e seguir regulamentações locais.
                                    </p>
                                    <h5>6. Alterações nos Termos e Condições</h5>
                                    <p>
                                        Reservamo-nos o direito de alterar estes Termos e Condições de Uso a qualquer momento. As alterações serão comunicadas através da plataforma. Ao continuar a utilizar nossos serviços após as alterações, você concorda com os novos termos.
                                    </p>
                                    <h5>7. Encerramento de Conta</h5>
                                    <p>
                                        Reservamo-nos o direito de encerrar contas que violem estes Termos e Condições ou que comprometam a integridade da plataforma.
                                    </p>
                                    <h5>8. Contato</h5>
                                    <p>
                                        Se tiver dúvidas ou preocupações sobre estes Termos e Condições de Uso, entre em contato conosco pelo e-mail suporte@sisintegravet.com
                                        <br>
                                        Estes Termos e Condições de Uso estão sujeitos às leis e regulamentos aplicáveis e serão interpretados de acordo com eles.
                                        <br>
                                        [Assinatura da empresa/organização]
                                        [xx/xx/xxxx]
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="suporte">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                    </svg>
                    <span>suporte@sisintegravet.com</span>
                </div>
            </div>            
        </footer>
    </div>
</body>
</html>