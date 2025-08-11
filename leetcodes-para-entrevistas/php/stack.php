<?php

declare(strict_types=1);

# Exercise: Min Stack

class MinStack
{
  private array $stack;
  private array $minStack;

  public function __construct()
  {
    $this->stack = [];
    $this->minStack = [];
  }

  public function push(int $val): void
  {
    $this->stack[] = $val;
    if (empty($this->minStack) || $val <= end($this->minStack)) {
      $this->minStack[] = $val;
    }
  }

  public function pop(): void
  {
    $val = array_pop($this->stack);
    if ($val === end($this->minStack)) {
      array_pop($this->minStack);
    }
  }

  public function top(): ?int
  {
    return end($this->stack);
  }

  public function getMin(): ?int
  {
    return end($this->minStack);
  }
}

$minStack = new MinStack();

$minStack->push(-2);
$minStack->push(0);
$minStack->push(-3);
echo $minStack->getMin() . PHP_EOL;
$minStack->pop();

echo $minStack->top() . PHP_EOL;
echo $minStack->getMin() . PHP_EOL;

/*
 * PROBLEMA: Min Stack
 * 
 * Implementar uma stack que suporte as operações tradicionais (push, pop, top)
 * e também uma operação getMin() que retorna o elemento mínimo em tempo O(1).
 * 
 * Todas as operações devem ser executadas em tempo constante O(1).
 */

/*
 * SOLUÇÃO:
 * 
 * A solução utiliza duas stacks:
 * 1. $stack: armazena todos os elementos normalmente
 * 2. $minStack: armazena apenas os elementos mínimos
 * 
 * Estratégia:
 * - Push: Sempre adiciona o elemento na stack principal. Na minStack, 
 *   adiciona apenas se for menor ou igual ao atual mínimo
 * - Pop: Remove da stack principal. Se o elemento removido for igual ao 
 *   topo da minStack, também remove da minStack
 * - GetMin: Retorna o topo da minStack (sempre o mínimo atual)
 * 
 * Por que funciona:
 * - A minStack mantém o histórico dos mínimos conforme elementos são adicionados
 * - Quando um elemento é removido, se ele era o mínimo atual, o próximo 
 *   mínimo já está disponível na minStack
 */

/*
 * COMPLEXIDADE:
 * 
 * Tempo: O(1) para todas as operações
 * - push(): O(1) - inserção no final de arrays
 * - pop(): O(1) - remoção do final de arrays  
 * - top(): O(1) - acesso ao último elemento
 * - getMin(): O(1) - acesso ao último elemento da minStack
 * 
 * Espaço: O(n) onde n é o número de elementos
 * - No pior caso, todos os elementos são decrescentes e ambas as stacks 
 *   terão o mesmo tamanho
 * - No melhor caso, a minStack terá apenas 1 elemento
 * - Em média, a minStack será significativamente menor que a stack principal
 */
