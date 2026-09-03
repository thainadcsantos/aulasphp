@echo off
chcp 65001 > nul

echo ===================================
echo       GERANDO README E ENVIANDO GIT
echo ===================================

(
echo # 🐘 Aula 6 - PHP CRUD
echo.
echo ## 📚 Sobre a aula
echo.
echo Projeto desenvolvido durante a **Aula 6**, utilizando PHP para implementar operações de **CRUD**.
echo.
echo CRUD significa:
echo.
echo - 🟢 **C**reate - Criar
echo - 🔵 **R**ead - Consultar
echo - 🟡 **U**pdate - Atualizar
echo - 🔴 **D**elete - Excluir
echo.
echo ---
echo.
echo ## 🛠️ Tecnologias utilizadas
echo.
echo ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge^&logo=php^&logoColor=white^)
echo ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge^&logo=mysql^&logoColor=white^)
echo ![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge^&logo=git^&logoColor=white^)
echo.
echo ---
echo.
echo ## 📂 Estrutura do projeto
echo.
echo ```text
echo aula6/
echo ├── public/
echo ├── src/
echo │   ├── Config/
echo │   ├── Controller/
echo │   ├── DAO/
echo │   ├── Model/
echo │   └── View/
echo ├── vendor/
echo ├── composer.json
echo └── README.md
echo ```
echo.
echo ---
echo.
echo ## ⚙️ Funcionalidades
echo.
echo - ➕ Cadastrar registros
echo - 🔍 Consultar registros
echo - ✏️ Atualizar registros
echo - 🗑️ Excluir registros
echo.
echo ---
echo.
echo ## 🚀 Como executar
echo.
echo 1. Clone o repositório.
echo 2. Instale as dependências do Composer.
echo 3. Configure o banco de dados.
echo 4. Execute o projeto em um servidor PHP.
echo.
echo ---
echo.
echo ## 📅 Aula
echo.
echo **Aula 6 - PHP CRUD**
echo.
echo Data: `%date%` - `%time%`
echo.
echo ---
echo.
echo ⭐ Projeto desenvolvido para fins acadêmicos.
) > README.md

echo.
echo README.md criado com sucesso!
echo.

git add . -v
git commit -m "Aula 6 - PHP CRUD"
git branch -M main
git push -u origin main

echo.
echo ==========================================
echo       PROJETO ENVIADO PARA O GITHUB!
echo ==========================================
start "" https://github.com/thainadcsantos/aulasphp