# PHP Programmer -- Job assignment

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
