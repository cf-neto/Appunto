# 📒 Appunto - EM DESENVOLVIMENTO

**Appunto** é um aplicativo web pessoal para criar, visualizar e organizar anotações rápidas e resumos. Inspirado na ideia de fichas de estudo (cards), ele é simples, leve e fácil de usar.

---

## ✨ Visão Geral

Appunto permite que você:

- Crie anotações rápidas em forma de "cards"
- Organize pequenos resumos de conteúdos estudados
- Armazene as notas localmente (e futuramente no banco de dados)
- Use interface responsiva e intuitiva

---

## 📁 Tecnologias Utilizadas

| Tecnologia | Função                              |
|------------|-------------------------------------|
| HTML5      | Estrutura da interface              |
| CSS3       | Estilização e responsividade        |
| JavaScript | Interatividade na interface         |
| Tailwind CSS | Utilitário para estilização rápida|
| PHP          | Lógica de back-end e manipulação de sessões   |

---

## 🧑‍🎓 Público-Alvo
- Estudantes que desejam revisar conteúdos
- Pessoas que gostam de registrar ideias rapidamente
- Usuários que preferem apps simples, diretos e offline

## 📂 Estrutura de Pastas

```plaintext
public/
├── assets/
│   ├── css/
│   │   ├── config.css
│   │   ├── home.css
│   │   ├── login.css
│   │   └── responsive.css
│   └── js/
│       └── utils.js
├── index.html
└── register.html

src/
├── config/
│   └── config.php
├── controllers/
│   ├── login.php
│   ├── logout.php
│   └── register.php
├── includes/
│   └── auth.php
└── views/
    └── home.php

.gitignore
README.md
