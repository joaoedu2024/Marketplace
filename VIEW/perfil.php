<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="CSS/perfil.css">
</head>
<body>

<div class="container">
    <div class="section profile-image-section">
        <img src="../IMAGENS/user.png" alt="Imagem do Perfil">
        <div class="profile-actions">
            <button class="atualizar">Atualizar imagem de perfil</button>
            <p>A imagem deve estar em JPEG ou PNG, e não pode ter mais de 10 MB.</p>
        </div>      
    </div>
    
    <div class="section">
        <h2>Localização</h2>
        <input type="text" name="endereco" placeholder="Endereço">
    </div>

    <div class="section">
        <h2>Configurações de perfil</h2>
        <p>Alterar detalhes de identificação da sua conta</p>
        <input type="text" name="usuario" placeholder="Usuário">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="text" name="contato" placeholder="Contato">
        <input type="text" name="cpf_cnpj" placeholder="CPF/CNPJ">
        <button class="save-changes">Salvar alterações</button>
    </div>
</div>

</body>
</html>
