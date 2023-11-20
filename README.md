Baixar o projeto

# Primeiro passo, clonar o projeto:

``` git clone https://github.com/wallasrc/projeto-autenticar# ```

# Acessar
```cd 'caminho-da-pasta-do-projeto'```



Configuração - Backend

# Instalar dependências do projeto
```composer install ```

# Configurar variáveis de ambiente
```cp .env.example .env```

```php artisan key:generate```

consfigure o . env com as informaçõoes do banco de dados

# Criar migrations
```php arisan migrate```



Configuração - Frontend

# Atualizar dependências
```npm install```

# Rodar em ambiente local localhost:8080
```npm run dev```

# Rodar em ambiente de produção
```npm run build```