---
modified: 2024-11-10T17:39:05.093Z
title: "Gabarito "
---

# Gabarito

Avaliação técnica de 9 questões sobre fundamentos de programação em PHP feita para o programa de estágio da empresa Gaudium.

## Sobre

**Nível:** Estagiário
**Conceitos:**

- Programação Orientada a Objetos

  - Encapsulamento
  - Polimorfismo
  - Classes Abstratas e Interfaces

- PHP / Base de Programação

  - Passagem de parâmetros por referência
  - Variáveis estáticas
  - Escopo de variáveis
  - Funções de manipulação de arrays
  - Do While vs While

- Banco de Dados

  - Chaves primárias e estrangeiras

- Testes de Software
  - Testes manuais

## Questão 1

Em programação orientada a objeto, quais são características de `encapsulamento`?

Selecione todas as alternativas que forem verdadeiras.

a) É implementado usando modificadores de acesso public, protected e private.

b) O processo de verificar erros gerados dentro da própria classe.

c) Esconder os detalhes internos de implementação de uma classe.

d) Expor apenas o que é necessário para o uso externo.

e) A criação de métodos aninhados dentro da própria classe.

**Resposta:** `a, c, d`

## Questão 2

Qual das alternativas a seguir descreve corretamente o conceito
de `polimorfismo` na programação orientada a objetos?

Selecione apenas uma opção

a) É a habilidade de uma função executar operações
aritméticas com diferentes tipos de variáveis.

b) É a capacidade de uma classe herdar métodos e
propriedades de outra classe.

c) É a técnica que permite que uma classe tenha várias
instâncias ao mesmo tempo na memória.

d) Permite que uma interface ou método seja usado para
representar diferentes tipos de objetos, que podem
responder de maneiras distintas a esse método.

e) É o conceito de criar múltiplos construtores em uma mesma classe para diferentes tipos de parâmetros

**Resposta:** `d)`

## Questão 3

Em relação ao uso de `classes abstratas` e `interfaces` em
programação orientada a objetos, quais das alternativas a seguir
estão corretas?

Selecione todas as opções que se aplicam

a) Uma classe pode herdar de uma classe abstrata e
implementar uma ou mais interfaces ao mesmo tempo.

b) Uma interface só pode definir métodos sem implementação (em algumas linguagens modernas, interfaces podem ter
métodos com implementação padrão).

c) Uma interface não pode ser instanciada diretamente.

d) Uma classe abstrata pode definir métodos com implementação.

e) Uma classe pode herdar de múltiplas classes abstratas ao mesmo tempo.

**Resposta:** `a, b, c, d`

## Questão 4

Considere o código PHP abaixo. Qual será a saída quando ele
for executado?

```php
<?php
function modifyArray(&$arr) {
  $arr[] = "new item";
}

$originalArray = ["first", "second"];
modifyArray($originalArray);
echo implode(", ", $originalArray);
```

**Resposta:** `first, second, new item`

## Questão 5

Considere o seguinte código PHP. Qual será a saída ao executar
este código?

```php
<?php
function test($a, &$b) {
  $a += 5;
  $b *= 2;
  return $a++ + $b;
}

$x = 10;
$y = 5;

$result = test($x, $y);
echo $result . " e " . $y;
```

**Resposta:** `25 e 10`

## Questão 6

Considere o seguinte código PHP. Qual será a saída ao executar
este código?

```php
<?php
class Counter {
    private static $count = -1;

    public function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

$a = new Counter();
$b = new Counter();
$c = new Counter();

echo Counter::getCount();
```

**Resposta:** `2`

## Questão 7

Em banco de dados relacionais, qual das alternativas descreve corretamente a principal diferença entre uma chave primária e uma chave estrangeira?

Selecione apenas uma opção

a) A chave estrangeira identifica de forma única cada
registro em uma tabela, enquanto a chave primária é
usada apenas para relacionar tabelas.

b) A chave primária identifica de forma única cada
registro em uma tabela, enquanto a chave estrangeira
cria um vínculo entre tabelas diferentes.

c) A chave primária permite valores duplicados, enquanto
a chave estrangeira deve ser única em cada linha da
tabela.

d) A chave primária é opcional em bancos de dados
relacionais, enquanto a chave estrangeira é obrigatória
para todas as tabelas.

e) A chave primária pode conter valores nulos, enquanto a
chave estrangeira não permite valores nulos.

**Resposta:** `b)`

## Questão 8

Qual das alternativas abaixo descreve corretamente a principal
característica dos testes manuais em desenvolvimento de
software?

a) Testes manuais garantem que o código seja testado em
todos os navegadores e dispositivos simultaneamente.

b) Testes manuais são realizados automaticamente por
scripts e ferramentas, sem a intervenção de um
testador.

c) Testes manuais são exclusivos para testar a segurança
do software.

d) Testes manuais exigem que o testador execute casos
de teste manualmente, verificando o funcionamento do
software sem o uso de automacão.

e) Testes manuais são realizados somente após o software
estar em produção.

**Resposta:** `d)`

## Questão 9

Qual das alternativas a seguir é verdadeira sobre os loops em
PHP?

Selecione todas as opções que se aplicam

a) O loop do...while sempre executa o bloco de código pelo
menos uma vez, independentemente da condição.

b) O loop for deve sempre ter uma condição de parada.

c) O loop while pode não ser executado nenhuma vez se a
condicão inicial for falsa.

d) O loop foreach só pode ser usado com arrays indexados.

e) O loop for não pode ser aninhado dentro de outro loop.

**Resposta:** `a e c`
