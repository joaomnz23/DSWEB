# Controle de Dispositivos com Arduino e PHP

Interface web que aciona uma lâmpada e um ventilador ligados a uma placa Arduino, com o PHP enviando os comandos pela porta serial.

[![Arduino](https://img.shields.io/badge/Arduino-IoT-00979D?logo=arduino)](https://www.arduino.cc/)
[![PHP](https://img.shields.io/badge/PHP-puro-777BB4?logo=php)](https://www.php.net/)
[![JavaScript](https://img.shields.io/badge/JavaScript-puro-F7DF1E?logo=javascript&logoColor=black)](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
[![HTML5](https://img.shields.io/badge/HTML-5-E34F26?logo=html5)](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS-3-1572B6?logo=css3)](https://developer.mozilla.org/pt-BR/docs/Web/CSS)

## Sobre

Esta pasta reúne projetos que ligam a web a um dispositivo físico. A página HTML envia o comando ao PHP, que o repassa à placa Arduino pela porta serial, e o firmware da placa aciona a saída digital correspondente.

Fluxo de comunicação:

1. **Navegador:** o JavaScript captura o clique e chama `arduino_control.php?acao=...` com Fetch (método GET).
2. **PHP:** o controlador instancia a classe `Arduino`, que recebe a porta COM no construtor e envia um caractere de comando à porta com a função `exec`.
3. **Arduino:** o firmware (`.ino`) lê o caractere pela serial (9600 baud) e liga, desliga ou pisca o dispositivo.

As respostas do PHP aparecem no console do navegador (F12).

## Projetos

| Projeto | Pasta | Dispositivo | Controle |
|---|---|---|---|
| Código base | [`Base-Conexao/`](./Base-Conexao) | LED | Scripts `ligar.php` e `desligar.php` |
| Lâmpada com botões | [`Projeto-Blink-01/`](./Projeto-Blink-01/) | Lâmpada (pino 7) | Botões Ligar, Desligar e Piscar |
| Lâmpada por cliques | [`Projeto-Blink-02/`](./Projeto-Blink-02/) | LED da própria placa (`LED_BUILTIN`) | Clique na imagem: 1 liga, 2 desliga, 3 pisca |
| Ventilador | [`Projeto-Ventilador/`](./Projeto-Ventilador/) | Ventilador (pino 7) | Clique na imagem: 1 liga, 2 desliga |
| Lâmpada e ventilador | [`Projeto-Ventilador-Lampada/`](./Projeto-Ventilador-Lampada/) | Lâmpada (pino 7) e ventilador (pino 6) | Botões na mesma página |

## Tecnologias

| Camada | Tecnologia |
|---|---|
| Firmware | Arduino (C++), comunicação serial a 9600 baud |
| Back-end | PHP com orientação a objetos |
| Front-end | HTML5, CSS3, JavaScript (Fetch API) |
| Servidor local | Apache (XAMPP) |

## Hardware

| Componente | Uso |
|---|---|
| Placa Arduino (Uno ou Mega) | Recebe os comandos pela serial |
| Cabo USB | Alimentação e comunicação com o computador |
| Módulo relé | Aciona a lâmpada e o ventilador (um por dispositivo) |
| Lâmpada e ventilador | Dispositivos controlados |
| LED comum | Usado no projeto de código base |

Atenção: ao trabalhar com relés e cargas de 110/220 V, isole bem os contatos elétricos para evitar acidentes.

## Como executar

### Pré-requisitos

- Windows (os comandos de porta usam a sintaxe `COMx` do prompt de comando)
- [Arduino IDE](https://www.arduino.cc/en/software)
- [XAMPP](https://www.apachefriends.org/) com Apache e PHP, com a função `exec` habilitada
- Placa Arduino conectada por USB

### Passo a passo

1. **Firmware.** Abra o arquivo `.ino` do projeto escolhido na Arduino IDE e carregue na placa. Confirme que os pinos do código correspondem à montagem física.
2. **Porta serial.** Descubra a porta da placa (por exemplo, `COM4`) na Arduino IDE ou no Gerenciador de Dispositivos e ajuste o valor em `new Arduino("COM4")` no arquivo `arduino_control.php` do projeto. Os scripts do código base usam `COM5`.
3. **Monitor Serial.** Mantenha o Monitor Serial da Arduino IDE fechado, pois ele ocupa a porta.
4. **Servidor.** Clone o repositório dentro de `htdocs`, inicie o Apache no XAMPP e acesse o projeto, por exemplo:

   ```
   http://localhost/DSWEB/PBE/Arduino/Projeto-Blink-01/
   ```