const express = require('express') // Importa o framework Express
const fs = require('fs') // Importa o módulo File System do Node.js para manipular arquivos
const bodyParser = require('body-parser')
const app = express() // Cria uma instância do servidor Express
const PORT = 4000 // Define a porta onde o servidor vai rodar
const cors = require('cors'); // Importa o middleware CORS

// Habilita CORS para todas as origens
app.use(cors({
    origin: 'http://localhost:3000', // Permite apenas requisições desta origem (site, não servidor)
}));

// Middleware para processar dados do formulário no formato JSON e URL-encoded
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({ extended: true }))

// Rota para exibir uma mensagem inicial
app.get('/', (req, res) => {
    res.send('Servidor rodando! Envie dados para a rota /submit')
})

// Rota para receber dados do formulário
app.post('/submit', (req, res) => {
    const data = req.body
  
    // Carregar ou criar o arquivo JSON
    const filePath = './db/data.json'
    let jsonData = []
    if (fs.existsSync(filePath)) {
        const rawData = fs.readFileSync(filePath)
        jsonData = JSON.parse(rawData)
    }
  
    // Adicionar os novos dados
    jsonData.push(data)
  
    // Salvar os dados de volta no arquivo JSON
    fs.writeFileSync(filePath, JSON.stringify(jsonData, null, 2))
  
    res.send('Dados recebidos e salvos com sucesso!')
})
  
// Iniciar o servidor node db/server.js
app.listen(PORT, () => {
    console.log(`Servidor rodando em http://localhost:${PORT}`)
})

