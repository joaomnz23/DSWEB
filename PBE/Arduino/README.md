<h1 align="center"> DSWEB - Automação & IoT (Arduino + PHP)</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Arduino-00979D?style=for-the-badge&logo=arduino&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
  <img src="https://img.shields.io/badge/CMD-4D4D4D?style=for-the-badge&logo=circuitpython&logoColor=white" />
</p>

Esta seção do repositório é dedicada à integração entre **Web e Hardware**. Aqui, o foco é o controle de dispositivos físicos em tempo real, utilizando o PHP como ponte de comando entre uma interface interativa e a placa Arduino via comunicação serial (CMD).

---

## 📌 Índice
- [Fluxo de Comunicação](#-fluxo-de-comunicação)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Projetos e Funcionalidades](#-projetos-e-funcionalidades)
- [Como Configurar](#-como-configurar)

---

##  Fluxo de Comunicação

O sistema opera em uma arquitetura de camadas para garantir que o clique no navegador resulte em uma ação física:

1.  **Frontend (HTML/JS):** O usuário interage com botões ou imagens. O JavaScript captura o evento e envia os parâmetros via **Método GET** usando o método **Fetch**.
2.  **Backend (PHP POO):** Um controlador recebe a requisição, instancia uma classe de comando e utiliza o método `__construct()` para preparar a execução.
3.  **Sistema (CMD):** O PHP executa uma linha de comando no sistema operacional que envia o código para a porta serial onde o Arduino está conectado.
4.  **Hardware (Arduino):** O firmware (`.ino`) lê o comando serial e aciona o componente (LED, Relé, Motor).

---

##  Tecnologias e Conteúdos

### <img height="25" src="https://skillicons.dev/icons?i=arduino&theme=dark"/> Arduino (Firmware)
* Desenvolvimento de arquivos `.ino` focados em leitura serial e controle de portas digitais.
* Gerenciamento de estados (Ligar, Desligar, Piscar).

### <img height="25" src="https://skillicons.dev/icons?i=php&theme=dark"/> PHP (Integração & POO)
* **Classes de Controle:** Métodos específicos para cada tipo de carga (Luz, Ventilador).
* **Interação com OS:** Uso de funções de sistema para disparar comandos via CMD.
* **Persistência de dados:** Passagem de parâmetros de controle via URL (GET).

### <img height="25" src="https://skillicons.dev/icons?i=js&theme=dark"/> JavaScript (Interface Dinâmica)
* **Fetch:** Requisições assíncronas para o PHP sem recarregar a página.
* **Eventos de Clique:** Lógica para identificar 1, 2 ou 3 cliques em elementos visuais.
* **Debug:** Logs detalhados no console para monitoramento da comunicação.

---

##  Projetos e Funcionalidades

| Projeto | Atuador | Controle por Imagem | Descrição |
| :--- | :--- | :---: | :--- |
| **Código Base** | LEDs Comuns | Não | Funções básicas de ON, OFF e Blink. |
| **Lâmpada por botões** | Lâmpada + Relé | Não | Acionamento de carga real AC (110/220V). |
| **Controle por imagem** | Diversos | **Sim** | 1 clique: Liga \| 2 cliques: Desliga \| 3 cliques: Piscar. |
| **Controle Ventilador** | Ventilador + Relé | Não | Acionamento de carga real AC (110/220V) e climatização. |
| **Controle Híbrido** | Lâmpada + Ventilador | Não | Controle de múltiplos dispositivos em uma única interface. |


---

##  Como Configurar

1.  **Hardware:**
    * Carregue o arquivo `.ino` correspondente na sua placa Arduino.
    * Certifique-se de que os pinos definidos no código condizem com a montagem física.

2.  **Servidor Local:**
    * Certifique-se de que o PHP tem permissão para executar funções de sistema (`exec`, `shell_exec`).
    * Mantenha o Arduino conectado via USB e identifique a porta COM correta.

3.  **Execução:**
    * Acesse a interface HTML pelo navegador.
    * Abra o Console do Desenvolvedor (F12) para visualizar as mensagens de **debug** do JavaScript.

---

##  Requisitos Técnicos
* Servidor Apache (XAMPP/WAMP).
* Placa Arduino (Uno/Mega).
* Cabo de comunicação USB.
* Módulo Relé (para projetos com lâmpada e ventilador).

---
> **Nota:** Este projeto demonstra a viabilidade de usar PHP como uma linguagem de controle de hardware em ambientes de estudo e prototipagem rápida.

> **Aviso:** Ao lidar com relés e lâmpadas reais, certifique-se de isolar bem os contatos elétricos para evitar acidentes!
