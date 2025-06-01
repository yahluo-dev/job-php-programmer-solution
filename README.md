# PHP Programmer -- Job assignment

The assignment was to create a simple REST API for customer management, using JSON for data exchange. It is built using [Apiato](https://github.com/apiato/apiato.git), an implementation of the [PORTO architecture](https://github.com/Mahmoudz/Porto).

## Diagrams
``` mermaid
erDiagram
    CUSTOMER {
    int id PK
    string name
    string email
    }
    CUSTOMER_GROUP {
    int id PK
    string name
    }

    CUSTOMER }|--|{ CUSTOMER_GROUP : "is in"
```
