#include <stdio.h>
#include <stdlib.h>
int main()  {
    int c, n;

    printf("Dve nahodne cisla od [1-100]\n");
    for (c = 1; c <= 2; c++) {
    n = rand() % 100 + 1;
    printf("%d\n", n);
  }
    int main()    {
    printf("Aritmeticke operace\n");
    int x, y = 2;
    x = (5 + 2 * y) - 4;
    x += 4;
    x++;
    y = 3 + x++ - 1 + x;
    printf("x = %i\ny = %i", x, y);

  return 0;
  }
}
