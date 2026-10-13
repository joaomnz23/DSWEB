# DSWEB

Compilado das aulas e atividades de Desenvolvimento de Sistemas do SENAI Boituva: HTML, CSS, JavaScript, PHP com orientação a objetos, Arduino e APIs.

[![HTML5](https://img.shields.io/badge/HTML-5-E34F26?logo=html5)](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS-3-1572B6?logo=css3)](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-puro-F7DF1E?logo=javascript&logoColor=black)](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/PHP-puro-777BB4?logo=php)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-PDO-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Arduino](https://img.shields.io/badge/Arduino-IoT-00979D?logo=arduino)](https://www.arduino.cc/)

## Sobre

Este repositório reúne os códigos desenvolvidos em sala de aula e as atividades de cada aula do curso de Desenvolvimento de Sistemas do SENAI Boituva. O conteúdo está em ordem cronológica: das primeiras matérias web (HTML e CSS) até o back-end com PHP, a integração com Arduino e a criação de APIs. Nas pastas, o material é separado em Aulas e Atividades.

## Como navegar

| Etapa | Tema | Pasta | Conteúdo |
|---|---|---|---|
| 1 | HTML | [`HTML/Aulas`](./HTML/Aulas), [`HTML/Atividades`](./HTML/Atividades/) | Estrutura de páginas, tabelas, formulários e links |
| 2 | CSS | [`CSS/Aulas`](./CSS/Aulas), [`CSS/Atividades`](./CSS/Atividades/) | Box model, posicionamento (relative, absolute e sticky), z-index, menus fixos e laterais, estilização de páginas |
| 3 | JavaScript | [`PFE/Aulas/`](./PFE/Aulas/), [`PFE/Atividades/`](./PFE/Atividades/) | Eventos de mouse e teclado, manipulação do DOM, validação de formulários |
| 4 | PHP e POO | [`PBE/POO/`](./PBE/POO/) | Abstração, encapsulamento, herança, polimorfismo e construtor |
| 5 | PHP com IoT | [`PBE/Arduino/`](./PBE/Arduino/) | Controle de lâmpada e ventilador pelo navegador, com PHP enviando comandos a uma placa Arduino |
| 6 | APIs com PHP | [`PBE/Primeira-API/`](./PBE/Primeira-API/), [`PBE/Cafeteria-API/`](./PBE/Cafeteria-API/) | Primeira API com endpoints simples (`hello`, `echo`, `produtos`) e Cafeteria-API com categorias, produtos, pedidos e itens de pedido |

`PFE` reúne os conteúdos de Programação Front-End e `PBE`, os de Programação Back-End. A interface que consome as APIs fica em [`PFE/Primeira-API/`](./PFE/Primeira-API/) e [`PFE/Cafeteria/`](./PFE/Cafeteria/).

## Destaques

- [Arduino com PHP](./PBE/Arduino/): lâmpada e ventilador acionados por botões e por cliques em imagens no navegador.
- [Cafeteria](./PBE/Cafeteria-API/): API em PHP com banco de dados e [interface em JavaScript](./PFE/Cafeteria/) que consome a API com Fetch.
- [Desafio do Mouse](./PFE/Atividades/Atividade-04/): atividade com eventos do mouse, pontuação e cronômetro de 15 segundos.
- [Formulário com validação](./PFE/Atividades/Atividade-05/): validação de campos feita em JavaScript.

## Estrutura do repositório

```text
DSWEB/
├── HTML/             # aulas e atividades de HTML
│   ├── Aulas/
│   ├── Atividades/              
├── CSS/              # aulas e atividades de CSS   
│   ├── Aulas/
│   ├── Atividades/    
├── PFE/              # front-end
│   ├── Aulas/
│   ├── Atividades/
│   ├── Primeira-API/ # interface da primeira API
│   └── Cafeteria/    # interface da Cafeteria-API
├── PBE/              # back-end
│   ├── POO/
│   ├── Arduino/
│   ├── Primeira-API/
│   └── Cafeteria-API/
└── README.md
```

## Tecnologias

| Área | Tecnologia |
|---|---|
| Front-end | HTML5, CSS3, JavaScript (DOM e Fetch API) |
| Back-end | PHP (orientação a objetos, PDO, API) |
| Banco de dados | MySQL/MariaDB (Cafeteria-API) |
| IoT | Arduino (firmware `.ino`, comunicação serial) |
| Ambiente local | XAMPP (Apache) |

## Como executar os exemplos

**HTML, CSS e JavaScript:** abra o arquivo `.html` da atividade diretamente no navegador.

**PHP (POO):** com o PHP instalado, inicie o servidor embutido na raiz do repositório e acesse a pasta desejada.

```bash
php -S localhost:8000 -t PBE
```

Exemplo: `http://localhost:8000/POO/`.

<details>
<summary>APIs e Arduino: requisitos adicionais</summary>

**Primeira-API e Cafeteria-API**

- Exigem Apache com `mod_rewrite` (as rotas dependem do `.htaccess`), portanto não funcionam no servidor embutido do PHP.
- A interface em `PFE/` chama endereços como `http://localhost/Cafeteria-API/produtos`. Por isso, o conteúdo da pasta `PBE` precisa estar na raiz do Apache (por exemplo, `htdocs/Cafeteria-API/` no XAMPP).
- A Cafeteria-API usa o banco `cafeteria` (MySQL, usuário `root`, sem senha, configurado em `database.php`) com as tabelas `categorias`, `produtos`, `pedidos` e `pedido_itens`. O script de criação do banco não está neste repositório.

**Arduino**

Consulte o [README da pasta](./PBE/Arduino/) para a montagem, a configuração da porta serial e os projetos.

</details>

## Autor

[joaomnz23](https://github.com/joaomnz23)