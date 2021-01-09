# Microprojeto Green Pharma

## Desenvolvido com:
* PHP (>=7.0)
* Laravel 8.x
* MySQL
* AdminLTE 3.0.5 (Bootstrap)

## Instruções:
* Na pasta *database/* se encontra o banco green_pharma.sql para importação.
* Na pasta *extra/* se encontra o arquivo **sales.csv**. É ele que será usado na rota */feed* para fazer o teste de upload para o banco de dados.
* Depois disso, clicar em *Planilhas Enviadas* e você terá a lista de todas as planilhas que foram enviadas.
* Em */dashboard* você poderá consultar os dados e filtrá-los por coluna.

## Rotas:
* / : home
* /dashboard : onde é feita a consulta ao banco
* /feed : onde é enviada a planilha para o banco
* /login
* /register : cadastro
* /user/profile : gerenciamento do perfil (senha, etc.)
* /view : onde são visualizadas as planilhas enviadas

**Complementos utlizados:** Livewire (Jetstream), Middleware, Blade, Migrations, etc.
