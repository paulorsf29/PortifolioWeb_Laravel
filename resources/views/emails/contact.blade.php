<!DOCTYPE html>
<html>
<head>
    <title>Nova mensagem de contato</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #f8f9fa; padding: 10px; text-align: center; }
        .content { padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nova mensagem do portfólio</h2>
        </div>
        
        <div class="content">
            <div class="field">
                <p class="label">Nome:</p>
                <p>{{ $data['name'] }}</p>
            </div>
            
            <div class="field">
                <p class="label">E-mail:</p>
                <p>{{ $data['email'] }}</p>
            </div>
            
            <div class="field">
                <p class="label">Assunto:</p>
                <p>{{ $data['subject'] }}</p>
            </div>
            
            <div class="field">
                <p class="label">Mensagem:</p>
                <p>{{ $data['message'] }}</p>
            </div>
            
            <hr>
            
            <p><small>Esta mensagem foi enviada através do formulário de contato do seu portfólio.</small></p>
        </div>
    </div>
</body>
</html>