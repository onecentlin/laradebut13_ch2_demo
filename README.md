# LaraDebut #13 - PHPUnit 入門簡介

講者：[Winnie Lin](https://github.com/onecentlin)

單元測試的藝術 第二版 (The Art of Unit Testing: with examples in C# 2nd Edition)

## Chapter 2 : 第一個單元測試

C# 範例程式碼以 PHP 改寫

- 採用 PHP 版本 >= 7.0
- 採用 PHPUnit 版本 ^7

### 安裝 PHPUnit (採用 Composer 安裝至專案方式)

```bash
composer require --dev phpunit/phpunit ^7
```

## 範例執行

安裝必要套件

```bash
composer install
```

執行測試

```bash
./vendor/bin/phpunit
```

執行測試群組

- `ch2` (LogAnalyzerTest.php)
- `fixture` (setUp and tearDown)
- `demo2` (MemCalculatorTest.php)

```bash
./vendor/bin/phpunit --group ch2
```

## 更多資源

- [PHPUnit Manual](https://phpunit.readthedocs.io)
- [PHPUnit Stater](https://github.com/onecentlin/phpunit-starter)
- [PHPUnit Snippets for VS Code](https://marketplace.visualstudio.com/items?itemName=onecentlin.phpunit-snippets)