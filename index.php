<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
    require_once __DIR__ . '/classes/product_list.php';
    require_once __DIR__ . '/classes/utenti_registrati.php';
    
    $Products = [
        new Product('Purse','150','black','Gucci'),
        new Product('Scarf','250','Red','Roberto Cavalli'),
        new Product('Blaizer','370','black','Armani'),
        new Product('Hat','150','Yellow','D&G'),
        new Product('Traucers','170','pink','Gucci'),
        new Product('Jacket','750','green','versace'),
        new Product('Shirt','300','Baige','versace'),
        new Product('shoes','190','black','D&G'),
        new Product('Sweater','370','Brow','Gucci'),        
    ];
?>