<?php
@unlink("texto.txt");
file_put_contents('texto.txt', file_get_contents("https://s3.eu-central-1.amazonaws.com/edi-customer-integration/Resellers/Pricelists/Blue/blue_euro_tab.txt"));

