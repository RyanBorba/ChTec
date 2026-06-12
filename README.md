# ChTec

## Sobre o Projeto

O ChTec é um sistema web interno desenvolvido para agilizar a comunicação entre atendentes e técnicos em uma assistência técnica.

Hospedado em um servidor local utilizando XAMPP, o sistema permite que os atendentes enviem chamados para setores específicos ou diretamente para técnicos cadastrados. Os alertas são exibidos em tempo real em um painel de monitoramento, acompanhados por notificações sonoras personalizadas.

O objetivo é reduzir o tempo de comunicação entre a equipe de atendimento e os técnicos, tornando o fluxo de trabalho mais rápido e organizado.

## Funcionalidades

* Chamada de técnicos específicos.
* Chamada por setor (Microinformática e Impressoras).
* Atualização automática dos chamados em tempo real.
* Reprodução de alertas sonoros personalizados.
* Histórico dos últimos chamados recebidos.
* Contador de atendimentos realizados.
* Limpeza manual do histórico.
* Atalho de teclado para chamadas rápidas.
* Funcionamento em rede local sem necessidade de internet.

## Como Funciona

O sistema utiliza um arquivo de controle (`alerta.txt`) para registrar os chamados enviados.

Quando um atendente realiza uma chamada:

1. O painel de chamada envia uma requisição para o servidor.
2. O servidor registra o alerta.
3. O monitor consulta automaticamente o alerta a cada poucos segundos.
4. Ao detectar um novo chamado, o sistema:

   * Exibe uma notificação visual;
   * Reproduz um áudio personalizado;
   * Registra o chamado no histórico;
   * Atualiza o contador de atendimentos.

Após o processamento, o alerta é removido automaticamente.

## Tecnologias Utilizadas

* HTML5
* CSS3
* JavaScript (Fetch API)
* PHP
* XAMPP
* Apache

## Estrutura do Projeto

* `chamado.html` — Painel utilizado pelos atendentes para realizar chamadas.
* `monitor.html` — Painel de monitoramento dos chamados recebidos.
* `enviar_alerta.php` — Processamento e envio dos alertas.
* `limpar_alerta.php` — Limpeza automática dos alertas.
* `alerta.txt` — Arquivo de comunicação entre os módulos.
* Arquivos `.mp3` — Alertas sonoros personalizados.
* Arquivos `.png` — Ícones e elementos visuais.

## Ambiente de Execução

O sistema foi desenvolvido para ser executado em ambiente local utilizando XAMPP, permitindo o uso em rede interna da loja sem dependência de serviços externos.

## Autor

Desenvolvido por Ryan Borba.
