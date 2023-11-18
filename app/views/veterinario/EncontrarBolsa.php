<?php
    session_start();
    
    if ((!isset($_SESSION['id']) == true) &&
        (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['id']);
        unset($_SESSION['senha']);

        header('Location: ../tutores/Default.html');
    }

    $logado = $_SESSION['id'];

?>

<!DOCTYPE html>
<html>

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>IntegraVet-Login</title>
    <link href="../cssPadrao/encontrarBolsa.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/rodape.css" rel="stylesheet" type="text/css" />
    <link href="css/rodape.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script defer="defer" src="../jsPadrao/menu.js"></script>

</head>
<body>
    <!-- Menu -->
    <div class="topnav" id="myTopnav">
        <a href="Default.php" class="active">Home</a>
        <a href="SaibaMais.html">Saiba Mais</a>
        <a href="EncontrarBolsa.php">Encontrar Bolsas</a>
        <a href="logout.php" id="logout">Sair</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>

    <div class="container">
        <div class="row titulo">
            <div class="col-12 text-center">
                <h1>Encontre Bolsas de Sangue!</h1>
            </div>
        </div>
    </div>
    <div class="container pesquisa">
        <div class="row apresentacao">

            <form action=""  method="GET">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">
                        <label for="animal">Animal:</label>
                        <select id="animal" name="animal" class="form-select">
                            <option value="" selected disabled>Selecione o animal</option>
                            <option value="Gato" <?= isset($_GET['animal']) == true ? ($_GET['animal'] == 'Gato' ? 'selected': '') :''  ?> >Gato</option>
                            <option value="Cachorro" <?= isset($_GET['animal']) == true ? ($_GET['animal'] == 'Cachorro' ? 'selected': '') :''  ?> >Cachorro</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">
                        <label for="componente">Componente:</label>
                        <select id="componente" name="componente"  class="form-select">
                            <option value="" selected disabled>Selecione o componente</option>                    
                            <option value="Concentrado Hemacias"  <?= isset($_GET['componente']) == true ? ($_GET['componente'] == 'Concentrado Hemácias' ? 'selected': '') :''  ?>>Concentrado Hemácias</option>
                            <option value="Plaquetas"  <?= isset($_GET['componente']) == true ? ($_GET['componente'] == 'Plaquetas' ? 'selected': '') :''  ?>>Plaquetas</option>
                            <option value="Plasmas" <?= isset($_GET['componente']) == true ? ($_GET['componente'] == 'Plasmas' ? 'selected': '') :''  ?> >Plasmas</option>
                            <option value="Sangue Total" <?= isset($_GET['componente']) == true ? ($_GET['componente'] == 'Sangue Total' ? 'selected': '') :''  ?> >Sangue Total</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">
                        <label for="cidade">Cidade:</label>
                        <select id="cidade" name="cidade"  class="form-select">
                            <option value="" selected disabled>Selecione a cidade</option>                    
                            <option value="SP" <?= isset($_GET['cidade']) == true ? ($_GET['cidade'] == 'SP' ? 'selected': '') :''  ?> >São Paulo</option>
                            <option value="RJ" <?= isset($_GET['cidade']) == true ? ($_GET['cidade'] == 'RJ' ? 'selected': '') :''  ?> >Rio de Janeiro</option>
                            <option value="Vitória" <?= isset($_GET['cidade']) == true ? ($_GET['cidade'] == 'Vitória' ? 'selected': '') :''  ?> >Vitória</option>
                            <option value="Belo Horizonte" <?= isset($_GET['cidade']) == true ? ($_GET['cidade'] == 'Belo Horizonte' ? 'selected': '') :''  ?> >Belo Horizonte</option>         
                        </select>
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

                    if (isset($_GET['animal']) && $_GET['animal'] != '')
                    {
                        include_once('C:\xampp\htdocs\integraVet\app\config.php');

                        $animal = $_GET['animal'];
                        $componente = $_GET['componente'];
                        $cidade = $_GET['cidade'];

                        $result = mysqli_query($mysql,
                        "SELECT 
                            cb.bolsa_animal,
                            cb.bolsa_componente,
                            cb.bolsa_quantidade,
                            ic.instituicao_nome,
                            ic.uf,
                            ic.telefone
                         FROM 
                            cad_bolsa AS cb
                         JOIN 
                            instituicao_cadastro AS ic ON cb.instituicao_cnpj = ic.instituicao_cnpj
                         WHERE 
                            cb.bolsa_animal = '$animal' AND cb.bolsa_componente = '$componente' AND ic.uf = '$cidade'
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
                                            <th>Animal</th>
                                            <th>Componente</th>
                                            <th>Quantidade</th>
                                            <th>Instituição</th>
                                            <th>Estado</th>
                                            <th>Telefone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            foreach ($result as $item)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $item["bolsa_animal"]; ?></td>
                                                            <td><?php echo $item["bolsa_componente"]; ?></td>
                                                            <td><?php echo $item["bolsa_quantidade"]; ?></td>
                                                            <td><?php echo $item["instituicao_nome"]; ?></td>
                                                            <td><?php echo $item["uf"]; ?></td>
                                                            <td><?php echo $item["telefone"]; ?></td>
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

    <div class="bg-light">       
        <footer>
            <div class="row dados">
                <div class="info">
                    <span><a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Política de Privacidade</a> | <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Termos e condições de uso</a> | <a href="Perfil.html">Meu perfil</a></span>
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
                                        Bem-vindo à SIS IntegraVET. Esta plataforma permite que veterinários se cadastrem e acessem informações sobre doação de sangue animal. 
                                        A proteção da sua privacidade é de extrema importância para nós. 
                                        Esta Política de Privacidade descreve como coletamos, usamos e protegemos as informações pessoais dos veterinários que utilizam nossa plataforma.
                                    </p>
                                    <h5>1. Informações Coletadas</h5>
                                    <p>
                                        Ao se cadastrar na plataforma, coletamos as seguintes informações pessoais:<br>
                                        -Nome completo;<br>
                                        -CRMV (Conselho Regional de Medicina Veterinária) para fins de verificação profissional;<br>
                                        -Endereço de e-mail;<br>
                                        -Senha segura para acesso à sua conta.                                    
                                    </p>
                                    <h5>2. Uso das Informações</h5>                                   
                                    <p>
                                        As informações coletadas são utilizadas para os seguintes fins:<br>

                                        -Verificação da identidade e credenciais profissionais do veterinário;<br>
                                        -Permitir o acesso seguro à plataforma;<br>
                                        -Facilitar a busca de informações sobre bolsas de sangue animal disponíveis;<br>
                                        -Comunicar eventos ou atualizações relevantes na plataforma.                                    
                                    </p>
                                    <h5>3. Compartilhamento de Informações</h5>                        
                                    <p>
                                        Não compartilhamos as informações pessoais dos veterinários com terceiros, a menos que seja necessário para cumprir obrigações legais ou para proteger a integridade da plataforma.                                    
                                    </p> 
                                    <h5>4. Segurança das Informações</h5>   
                                    <p>
                                        Tomamos medidas razoáveis para proteger as informações pessoais dos veterinários contra acesso não autorizado ou divulgação não autorizada. 
                                        Utilizamos medidas de segurança técnicas e organizacionais para garantir a confidencialidade e integridade dos dados.
                                    </p>
                                    <h5>5. Direitos dos Veterinários</h5>
                                    <p>
                                        Os veterinários têm o direito de acessar, corrigir ou atualizar suas informações pessoais a qualquer momento. 
                                        Eles também podem solicitar a exclusão de suas contas, caso desejem encerrar o uso da plataforma.
                                    </p>
                                    <h5>6. Alterações na Política de Privacidade</h5>
                                    <p>
                                    Esta Política de Privacidade pode ser atualizada periodicamente. 
                                    Recomendamos revisar periodicamente esta política para se manter informado sobre como suas informações pessoais são tratadas.<br>

                                    Ao utilizar nossa plataforma, você concorda com os termos desta Política de Privacidade. Se não concordar com os termos aqui descritos, recomendamos que não utilize a plataforma.                              
                                    </p>
                                    <h5>7. Contato</h5>
                                    <p>
                                        Se tiver alguma dúvida ou preocupação relacionada à privacidade ou ao uso de suas informações pessoais, entre em contato conosco pelo e-mail suporte@sisintegravet.com<br>

                                        Esta Política de Privacidade está sujeita às leis e regulamentos aplicáveis e será interpretada de acordo com eles.<br>

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
