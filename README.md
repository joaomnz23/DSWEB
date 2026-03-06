<h1 align="center">DSWEB - Desenvolvimento de Sistemas para Web</h1>

<p align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
</p>

Este repositório é um compilado de estudos, práticas e desafios desenvolvidos durante o curso de **Desenvolvimento de Sistemas do SENAI**. O foco principal é a consolidação de fundamentos Front-end e Back-end, servindo como um diário de aprendizado e laboratório de fixação.

---

## 📌 Índice
- [Sobre o Projeto](#sobre-o-projeto)
- [Tecnologias e Conteúdos](#tecnologias-e-conteúdos)
- [Como Executar Localmente](#como-executar-o-php-localmente)

---

## Sobre o Projeto

O **DSWEB** reúne uma série de atividades que partem do básico estrutural até a lógica de programação avançada e orientação a objetos. O objetivo é documentar a evolução técnica em quatro pilares fundamentais da web.

## Tecnologias e Conteúdos

### <img height="25" src="https://skillicons.dev/icons?i=html&theme=dark"/> HTML5
* **Elementos:** Construção de tabelas complexas, formulários de entrada de dados e navegação por links.
* **Foco:** Organização lógica e acessibilidade básica.

### <img height="25" src="https://skillicons.dev/icons?i=css&theme=dark"/> CSS3
* **Design:** Manipulação de cores, estilização de `divs` e tabelas.
* **Efeitos:** Aplicação de filtros e efeitos em imagens.

### <img height="25" src="https://skillicons.dev/icons?i=js&theme=dark"/> JavaScript
* **Eventos:** Captura de interações via mouse e teclado.
* **DOM:** Uso de `getElementById`, `innerHTML`, `createElement` e `createAttribute`.
* **Projeto:** Site interativo com contabilização de cliques em tempo real.

### <img height="25" src="https://skillicons.dev/icons?i=php&theme=dark"/> PHP (Back-end & POO)
* Implementação prática dos **4 pilares da POO**:
 1.  **Abstração:** Modelagem de classes.
 2.  **Encapsulamento:** Proteção de dados.
 3.  **Herança:** Reutilização de código.
 4.  **Polimorfismo:** Especialização de comportamentos.
* Uso do método `__construct()`
---

## Como Executar o PHP Localmente

Para rodar os arquivos PHP deste repositório, você precisará de um ambiente de servidor local.

### 1. Utilizando XAMPP (Recomendado)
1. Baixe e instale o [XAMPP](https://www.apachefriends.org/index.html).
2. Clone este repositório dentro da pasta `htdocs` (geralmente em `C:\xampp\htdocs`).
3. Abra o **XAMPP Control Panel** e inicie o módulo **Apache**.
4. No seu navegador, acesse: `http://localhost/DSWEB/`

### 2. Utilizando o Servidor Embutido do PHP
Se você já tiver o PHP instalado no seu PATH:
1. Abra o terminal na pasta do projeto.
2. Digite o comando:
   ```bash
   php -S localhost:8000
3. Acesse `http://localhost:8000` no seu navegador.
