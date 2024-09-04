<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ampera - Criar Oferta</title>
    <link rel="stylesheet" href="CSS/criar_oferta.css">
</head>
<body>
<br><br><br><br>
<div class="negrito">
<div class="container">
    <div class="section">
        <h2>Detalhes</h2>
        <input type="text" placeholder="Nome da sua Empresa (Campo obrigatório)">
        <textarea  placeholder="Descrição"></textarea>
        <textarea placeholder="Produto"></textarea>
        <select>
            <option>Tempo de Entrega</option>
        </select>
        <select>
            <option>Status</option>
        </select>
    </div>
    <div class="section">
        <h2>Foto</h2>
        <div class="upload-box">
            <p>Fazer upload de miniatura</p>
                <button>Procurar</button>
            <p>ou arraste os arquivos até aqui</p>
        </div>
        <div class="contato">
            <h2>Contato</h2>
                <input type="text" placeholder="Telefone">
                <input type="email" placeholder="E-mail">
            <button class="create-offer">Criar oferta</button>
        </div>
    </div>
</div>
</div>

</body>
</html>
