## S.O.L.I.D.

- Esses 5 princípios, quando aplicados corretamente, ajudam a criar um software mais robusto, flexível e fácil de manter, promovendo boas práticas de design orientado a objetos.
    - **(S)**.ingle Responsibility Principle - SRP
        - <b>Princípio da Responsabilidade Única</b>:
        - Uma classe deve ter apenas uma razão para mudar, ou seja, ela deve ter uma única responsabilidade. Isso ajuda a manter o código organizado e facilita a manutenção.
    - **(O)**.pen/Closed Principle - OCP
        - <b>Princípio do Aberto/Fechado</b>:
        - As entidades de software (classes, módulos, funções, etc.) devem estar abertas para extensão, mas fechadas para modificação. Isso significa que você pode estender o comportamento de uma classe sem modificar seu código-fonte.
    - **(L)**.iskov Substitution Principle - LSP
        - <b>Princípio da Substituição de Liskov</b>:
        - Isso significa que objetos de uma classe derivada devem ser capazes de substituir objetos da classe base sem afetar a integridade do programa.
    - **(I)**.nterface Segregation Principle - ISP
        - <b>Princípio da Segregação de Interfaces</b>:
        - Uma classe não deve ser forçada a implementar interfaces que ela não utiliza. Isso evita que as classes tenham métodos desnecessários.
    - **(D)**.ependency Inversion Principle - DIP
        - <b>Princípio da Inversão de Dependência</b>:
        - Esse princípio estabelece que as classes de alto nível não devem depender de classes de baixo nível, mas sim de abstrações. Além disso, detalhes devem depender de abstrações. Isso promove a flexibilidade e a facilidade de manutenção do código.

## Design Pattern
- **STRATEGY**
    - O padrão de design Strategy é usado quando você deseja definir uma família de algoritmos, encapsulá-los e torná-los intercambiáveis.
        - CENÁRIO:
            - Suponha que você esteja construindo um sistema de processamento de pagamento e deseje calcular o valor do desconto com base no método de pagamento escolhido, onde cada método de pagamento pode ter uma estratégia de desconto diferente.
        - SOLUÇÃO:
            - a) Definina a interface (<b>PaymentStrategy</b>) que irá descrever o contrato para todas as estratégias de pagamento;
            - b) Crie as classes concretas (ex.: <b>CreditCardPayment</b> e <b>PayPalPayment</b>) onde serão implementadas pela interface PaymentStrategy;
            - c) Crie a classe <b>ShoppingCart</b> que aceitará uma estratégia de pagamento e utilizará essa estratégia para calcular o desconto;
        - **strategy/index.php**
            - Acesse a pasta raíz do projeto, e execute em seu terminal:
                - php strategy/index.php;