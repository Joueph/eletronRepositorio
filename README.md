**Iniciando o projeto em Docker**

**Electron-App Readme**

Este é um guia para iniciar um aplicativo Electron simples. Certifique-se de seguir os passos abaixo para configurar e executar o aplicativo.

**Passo a passo**

1. **Crie o Arquivo .env:**
   - Execute o seguinte comando para criar o arquivo `.env` a partir do exemplo:

```
cp .env.example .env
```

2. **Atualize as variáveis de ambiente do arquivo .env:**
   - Abra o arquivo `.env` e atualize as variáveis de ambiente conforme necessário. Por exemplo:

```
APP_NAME=laravel
APP_URL=http://localhost:8080

DB_PASSWORD=root
```

3. **Suba os containers do projeto:**
   - Execute o seguinte comando para subir os containers do projeto:

```
docker-compose up -d
```

4. **Acessar o container:**
   - Execute o seguinte comando para acessar o container:

```
docker-compose exec app bash
```

5. **Instalar as dependências do projeto:**
   - Dentro do container, instale as dependências do projeto:

```
composer install
```

6. **Gerar a key do projeto Laravel:**
   - Ainda dentro do container, gere a chave do projeto Laravel:

```
php artisan key:generate
```

7. **Gerar o banco do projeto:**
   - Por fim, dentro do container, gere o banco de dados do projeto:

```
php artisan migrate:fresh --seed
```

**Executando o aplicativo**

Para iniciar o aplicativo Electron, execute o seguinte comando no terminal, estando na pasta do seu projeto:

```
npm start
```


**Electron-App Readme**

Este é um guia para iniciar um aplicativo Electron simples. Certifique-se de seguir os passos abaixo para configurar e executar o aplicativo.

**Pré-requisitos**

- Certifique-se de ter o Node.js e o npm instalados. Você pode verificar se o npm está instalado executando o seguinte comando no terminal:

```
npm -v
```

**Passos de configuração**

1. **Criação da pasta do projeto:**
   - No terminal, execute o seguinte comando para criar uma nova pasta para o seu projeto:

```
mkdir electron-app
```

2. **Instalação do Electron:**
   - Após criar a pasta do projeto, navegue até ela no terminal e execute o seguinte comando para instalar o Electron:

```
npm install electron
```

3. **Atualização do arquivo package.json:**
   - Após a instalação do Electron, substitua o conteúdo do arquivo `package.json` pelo seguinte código:

```json
{
  "name": "electron-app",
  "version": "1.0.0",
  "description": "Hello World!",
  "main": "main.js",
  "author": "Jane Doe",
  "license": "MIT",

  "scripts": {
    "start": "electron ."
  }
}
```

4. **Criação do arquivo main.js:**
   - Crie um arquivo chamado `main.js` na pasta do seu projeto.
   - Insira o seguinte código no arquivo `main.js`:

```javascript
const { app, BrowserWindow } = require('electron');

function createWindow() {
  const mainWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      nodeIntegration: true
    }
  });

  // Carrega a página da web local hospedada em localhost:8080
  mainWindow.loadURL('http://localhost:8080');

  mainWindow.webContents.openDevTools();
}

app.whenReady().then(createWindow);

app.on('window-all-closed', () => {
  if (process.platform !== 'darwin') {
    app.quit();
  }
});

app.on('activate', () => {
  if (BrowserWindow.getAllWindows().length === 0) {
    createWindow();
  }
});
```

**Executando o aplicativo**

Para iniciar o aplicativo Electron, execute o seguinte comando no terminal, estando na pasta do seu projeto:

```
npm start
```

Isso iniciará o aplicativo e abrirá uma janela com a página da web local hospedada em `localhost:8080`.
