algoritmo "FormuladeBaskara"
// Fun��o :
// Autor :
// Data : 22/08/2017
// Se��o de Declara��es 
var
 a, b, c: real
 delta, valorx, valorx2: real

inicio
// Se��o de Comandos
escreva("Valor de A:")
leia(a)
escreva("Valor de B:")
leia(b)
escreva("Valor de C:")
leia(c)

delta <- exp(b,2) - 4 * a * c
se (delta > 0) entao
   valorx <- (-b + RaizQ(delta)) / (2 * a)
   valorx <- (-b - RaizQ(delta)) / (2 * a)
   escreval("    Resultado X1:", valorx)
   escreval("    Resultado X2:", valorx2)
senao
     se (delta = 0) entao
          valorx <- -b / (2*a)
          escreva("A equa�ao possui uma raiz real")
          escreva("X1: ", valorx)
     senao
          escreva("A equa��o n�o possui raizes reais")
     fimse

fimse

// Se��o de Comandos 
fimalgoritmo
