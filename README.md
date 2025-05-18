
# GLPI - Customização para o Setor de Engenharia

Este projeto contém a customização do sistema **GLPI** para atender às demandas específicas do setor de engenharia da empresa, conforme fluxo definido e cronograma executado.

---

## ✅ Objetivo

Substituir o controle manual de solicitações (planilhas) por um sistema automatizado e estruturado, com rastreabilidade, contadores de tempo, categorização técnica e integração com o fluxo de tarefas do setor.

---

## 🔧 Funcionalidades Implementadas

- Instalação do GLPI em ambiente local
- Plugins instalados:
  - [ActualTime](https://github.com/ticgal/actualtime): controle de tempo automático
  - [Taskdrop](https://github.com/ticgal/taskdrop): organização visual de tarefas
  - [Formcreator](https://github.com/pluginsGLPI/formcreator): criação de formulários personalizados
  - [Fields](https://github.com/pluginsGLPI/fields): campos personalizados avançados
  - [Reports](https://github.com/pluginsGLPI/reports): relatórios prontos e personalizados
- Criação de regras de negócio:
  - Mudança automática de status
  - Pausa de tarefas anteriores ao iniciar nova
  - Encerramento de solicitações com base nas tarefas
- Estrutura de categorias conforme os tipos do setor (Protótipo, ERP, Atendimento Técnico, etc.)
- Separação de perfis por setor: solicitante, técnico, administrador
- Planejamento de backup e publicação

---

## 🛠️ Requisitos Técnicos

- PHP >= 7.4
- Composer
- Node.js + Yarn
- Extensões PHP: `ext-gd`, `intl`, `mbstring`, `curl`, `xml`, `zip`

---

## 🗂️ Estrutura Recomendada

```
glpi/
├── plugins/
│   ├── actualtime/
│   ├── taskdrop/
│   ├── formcreator/
│   ├── fields/
│   └── reports/
└── ...
```

---

## 🚀 Como usar

1. Clonar este repositório:
```bash
git clone https://github.com/iezak/glpi-projeto-docker
```

2. Instalar dependências dos plugins:
```bash
cd plugins/formcreator
composer install --no-dev
yarn install --prod
```

3. Acessar o GLPI via navegador e instalar/ativar os plugins

---

## 👤 Autor

Vinicius Medeiros Iezak  
Projeto de Extensão - ADS

---

## 📄 Licença

Este projeto segue a licença **GPLv2+**, conforme os termos dos plugins utilizados.
