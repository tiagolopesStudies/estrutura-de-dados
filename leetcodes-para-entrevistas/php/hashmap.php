<?php

declare(strict_types=1);

# Exercise: Two Sum

class Solution
{
  public function twoSum(array $nums, int $target): array
  {
    $hasher = [];

    foreach ($nums as $i => $num) {
      $complement = $target - $num;
      if (isset($hasher[$complement])) {
        return [$hasher[$complement], $i];
      }
      $hasher[$num] = $i;
    }
    return [];
  }
}

$solution = new Solution();
print_r($solution->twoSum(nums: [2, 7, 11, 15, 8, 9], target: 17));

/*
 * ============================================================================
 * PROBLEMA: TWO SUM
 * ============================================================================
 * 
 * O problema "Two Sum" é um dos problemas mais clássicos em algoritmos e 
 * estruturas de dados. Dado um array de números inteiros e um valor alvo (target),
 * o objetivo é encontrar dois números no array que, quando somados, resultem 
 * no valor alvo. A função deve retornar os índices desses dois números.
 * 
 * Exemplo:
 * Input: nums = [2, 7, 11, 15], target = 9
 * Output: [0, 1] (porque nums[0] + nums[1] = 2 + 7 = 9)
 * 
 * ============================================================================
 * IMPLEMENTAÇÃO DA SOLUÇÃO
 * ============================================================================
 * 
 * A solução implementada utiliza a técnica de HashMap (ou Hash Table) para
 * resolver o problema de forma eficiente. O algoritmo funciona da seguinte forma:
 * 
 * 1. Criamos um array associativo ($hasher) que funciona como HashMap
 * 2. Para cada elemento do array:
 *    a) Calculamos o complemento: complement = target - num_atual
 *    b) Verificamos se esse complemento já existe no HashMap
 *    c) Se existe, encontramos a solução: retornamos os índices
 *    d) Se não existe, armazenamos o número atual e seu índice no HashMap
 * 
 * Exemplo passo a passo com nums = [2, 7, 11, 15], target = 9:
 * 
 * Iteração 1: num = 2, índice = 0
 * - complement = 9 - 2 = 7
 * - 7 não está no hasher
 * - hasher[2] = 0 → hasher = {2: 0}
 * 
 * Iteração 2: num = 7, índice = 1
 * - complement = 9 - 7 = 2
 * - 2 está no hasher (índice 0)
 * - Retorna [0, 1]
 * 
 * ============================================================================
 * ANÁLISE DE COMPLEXIDADE
 * ============================================================================
 * 
 * COMPLEXIDADE TEMPORAL: O(n)
 * 
 * Por quê O(n)?
 * - Percorremos o array apenas uma vez (loop foreach)
 * - Para cada elemento, fazemos operações de tempo constante:
 *   • Cálculo do complemento: O(1)
 *   • Verificação no HashMap (isset): O(1) em média
 *   • Inserção no HashMap: O(1) em média
 * - Como fazemos n operações O(1), o tempo total é O(n)
 * 
 * COMPLEXIDADE ESPACIAL: O(n)
 * 
 * Por quê O(n)?
 * - No pior caso, armazenamos todos os elementos do array no HashMap
 * - Se a solução estiver nos últimos elementos, quase todo o array será
 *   armazenado no HashMap antes de encontrarmos a resposta
 * - Portanto, o espaço extra usado é proporcional ao tamanho do array: O(n)
 * 
 * ============================================================================
 * COMPARAÇÃO COM OUTRAS ABORDAGENS
 * ============================================================================
 * 
 * Abordagem Força Bruta (dois loops aninhados):
 * - Tempo: O(n²) - para cada elemento, verifica todos os outros
 * - Espaço: O(1) - não usa espaço extra
 * 
 * Abordagem Two Pointers (array ordenado):
 * - Tempo: O(n log n) - devido à ordenação + O(n) para busca
 * - Espaço: O(1) - não usa espaço extra (se pudermos modificar o array)
 * - Problema: perde os índices originais devido à ordenação
 * 
 * Nossa abordagem HashMap:
 * - Tempo: O(n) - melhor complexidade temporal possível
 * - Espaço: O(n) - usa espaço extra, mas mantém os índices originais
 * 
 * Conclusão: A abordagem HashMap é considerada a solução ótima para este
 * problema, pois oferece a melhor complexidade temporal mantendo a 
 * funcionalidade requerida (retornar índices originais).
 */
