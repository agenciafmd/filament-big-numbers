# Agenciafmd – Filament Big Numbers

Este pacote fornece a funcionalidade de "Big Numbers" (Números em Destaque) para o painel administrativo Admix.

## Requisitos

- PHP ^8.4
- Laravel ^12.0
- Filament ^4.0
- agenciafmd/filament-admix v1.x-dev | dev-master

## Instalação

1. Instale o pacote via Composer:

```bash
composer install agenciafmd/filament-big-numbers
```

2. Execute as migrações:

```bash
php artisan migrate
```

## Ativando no painel Filament

Este pacote inclui um Plugin Filament que registra o `BigNumberResource` automaticamente. Adicione o plugin na config do admix `config/filament-admix.php`:

```php
use Agenciafmd\BigNumbers\BigNumbersPlugin;

return [
    'plugins' => [
        BigNumbersPlugin::class,
    ],
];
```

Após isso, o menu "Big Numbers" aparecerá no painel, com as páginas de Listar, Criar e Editar.

## Auditoria

O `RedirectResource` inclui o relation manager `Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager`, exibindo o histórico de auditorias quando o pacote `tapp/filament-auditing` for utilizado pelo projeto via `filament-admix`.

## Licença

Este pacote é software livre e está disponível nos termos da licença MIT.
